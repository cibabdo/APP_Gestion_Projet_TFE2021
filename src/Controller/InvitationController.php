<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SigninType;
use App\Entity\ProjectAccess;
use Symfony\Component\Mime\Email;
use App\Entity\UserSigninSecurity;
use App\Repository\UserRepository;
use App\Repository\ProjectRepository;
use Symfony\Component\Form\FormError;

use Doctrine\Persistence\ManagerRegistry;
use App\Repository\PersonEngineeringRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserSigninSecurityRepository;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class InvitationController extends AbstractController
{
    /**
     * @Route("/project/{id}/invitation/{personId}", name="invitation")
     */
    public function index($id, $personId, Request $request, MailerInterface $mailer, UserRepository $userRepository, ProjectRepository $projectRepository, PersonEngineeringRepository $personEngineeringRepository, 
                                                                                     ManagerRegistry $managerRegistry,
                                                                                     KernelInterface $kernel): Response
    {   
        // vérification permission 
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_INTERNAL')) 
            throw new AccessDeniedException('Vous n\'êtes pas autorisé');                
               
        // récupération id de la personne à inviter
        $person = $personEngineeringRepository->find($personId);
       
        // récupération email
        $user = $userRepository->findByEmail($person->getEmail()); 

        // vérification existance
        if ($user != null) throw new AccessDeniedException('L\'utilisateur est déjà inscrit');

        // sécurité mail en dev
        $env = strtolower($kernel->getEnvironment());        
        if ($env == 'dev') $person->setEmail('donato.abiuso@gmail.com');

        // récupération id projet
        $project = $projectRepository->find($id);

        $form = $this->createFormBuilder()->getForm();

        // formulaire sumit
        $form->handleRequest($request);
        if ($form->isSubmitted()) {    
            
            // nonce (token) création
            $invit = new UserSigninSecurity();    
            $invit->setNonce(uniqid());
            
            //validité du nonce
            $today = new \DateTime();
            $interval = new \DateInterval('P1D');
            $invit->setExpiredat(date_add($today, $interval));  
            
            $invit->setProject($id);
            $invit->setPerson($personId);

            // instanciation DB
            $em = $managerRegistry->getManager();
            $em->persist($invit);
            $em->flush();                        
         
            // mail envoi
            $html = '<p>Bonjour, vous êtes invité à vous inscrire via ce <a href="http://localhost:8000/invitation/inscription?nonce=' . $invit->getNonce() . '">lien</p>';
            $html .= '<p>Vous trouvery en pièce joint la procédure d\'accès à notre réseau sécurisé<p>';
            $email = (new Email())
            ->from('donato.abiuso@chuliege.be')
            ->to($person->getEmail())           
            ->subject('CHU - Invitation pour le projet ' . $project->getTitle())            
            ->html($html);
            // les 2 méthodes d attachement fonctionne en local mais pas sur ovh
            //->attachFromPath($this->getParameter('attach_directory') . '/procedure_chu_vpn.pdf');
            //->attach(fopen('./attach/procedure_chu_vpn.pdf', 'r'));
            $mailer->send($email);

            // message flash            
            $this->addFlash('message', 'Mail d\'invitation envoyé');
            // redirect
            return $this->redirectToRoute('project_edit', ['id' => $project->getId()]);
        }     
        
        //rend la page pour confirmer l'invitation
        return $this->render('invitation/invitation.html.twig', [
            'form' => $form->createView(),
            'id' => $project->getId(),
            'name' => $project->getTitle(),
            'person' => $person->getFirstname(),
            'email' => $person->getEmail()
        ]);
    }

    /**
     * @Route("/invitation/inscription", name="invitation_inscription")
     */
    public function inscription(Request $request, ProjectRepository $projectRepository, PersonEngineeringRepository $personEngineeringRepository, UserSigninSecurityRepository $userSigninSecurityRepository, ManagerRegistry $managerRegistry, UserPasswordEncoderInterface $encoder)
    {   
        // vérification nonce   
        if ($request->query->get('nonce') == null) throw new AccessDeniedException('Vous n\'êtes pas autorisé');

        // vérification nonce   
        $invit = $userSigninSecurityRepository->find($request->query->get('nonce'));
        if ($invit == null) throw new AccessDeniedException('Vous n\'êtes pas autorisé'); 

        // vérification de la date de validité du nonce
        $today = new \DateTime();
        if ($today > $invit->getExpiredat()) throw new AccessDeniedException('Vous n\'êtes pas autorisé'); 

        // récupération de la personne invité
        $person = $personEngineeringRepository->find($invit->getPerson());

        // inscription - formulaire
        $message = '';
        $user = new User();
        $user->setUsername($person->getFirstname());
        $user->setEmail($person->getEmail());
        $user->setRoles(["ROLE_USER", "ROLE_EXTERNAL"]);
        $form = $this->createForm(SigninType::class, $user);

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($user->getEmail() != $person->getEmail()) {
                $form->get('email')->addError(new FormError('Vous ne pouvez pas modifier votre email'));
            }
        }
        if ($form->isSubmitted() && $form->isValid()) {
            // crypt password
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);
            
            // instanciation DB de l'utilisateur
            $em = $managerRegistry->getManager();
            $em->persist($user);
            $em->flush();

            // ajout droit d'accès au projet
            $project = $projectRepository->find($invit->getProject());
            $access = new ProjectAccess();
            $access->setUser($user);
            $access->setProject($project);
            $em = $managerRegistry->getManager();
            $em->persist($access);
            $em->flush();

            // delete nonce      
            $em = $managerRegistry->getManager();
            $em->remove($invit);
            $em->flush(); 

            // redirect
            return $this->redirectToRoute('security_login');
        }

        //render
        return $this->render('security/signin.html.twig', [
            'form' => $form->createView(),
            'message' => $message
        ]);        
        
        // response
        return new Response(
            '<html><body>accès autorisé</body></html>'
        );        
    }

    /**
     * @Route("/test", name="test")
     */
    public function test(Request $request, ManagerRegistry $managerRegistry, UserPasswordEncoderInterface $encoder)
    {   
        //Niveau sécurité bof bof - Juste présent car pas de fixture db
        //Permet de créer le 1er user admin à supprimer du code un fois créée
            $user = new User();
        $user->setUsername('Donato');
        $user->setEmail('donato.abiuso@gmail.com');
        $user->setLanguage('FR');
        $user->setRoles(['ROLE_ADMIN']);
        $form = $this->createForm(SigninType::class, $user);

        // form submit
        $form->handleRequest($request);       
        if ($form->isSubmitted() && $form->isValid()) {
            // crypt password
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);
            
            // instanciation DB de l'utilisateur
            $em = $managerRegistry->getManager();
            $em->persist($user);
            $em->flush();          

            // redirect
            return $this->redirectToRoute('security_login');
        }

        //render
        return $this->render('security/signin.html.twig', [
            'form' => $form->createView(),
            'message' => ''      
        ]); 
    }
}
