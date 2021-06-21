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
use App\Repository\PersonContactRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserSigninSecurityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class InvitationController extends AbstractController
{
    /**
     * @Route("/project/{id}/invitation/{personId}", name="invitation")
     */
    public function index($id, $personId, Request $request, MailerInterface $mailer, UserRepository $userRepository, ProjectRepository $projectRepository, PersonContactRepository $personContactRepository, 
                                                                                     ManagerRegistry $managerRegistry): Response
    {                
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_INTERNAL')) 
            throw new AccessDeniedException('Vous n\'êtes pas autorisé');                
               
        $person = $personContactRepository->find($personId);
       
        $user = $userRepository->findByEmail($person->getEmail());        
        if ($user != null) throw new AccessDeniedException('L\'utilisateur est déjà inscrit');

        $project = $projectRepository->find($id);

        $form = $this->createFormBuilder()->getForm();

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted()) {    
            // nonce (token)        
            $invit = new UserSigninSecurity();    
            $invit->setNonce(uniqid());
            
            $today = new \DateTime();
            $interval = new \DateInterval('P1D');
            $invit->setExpiredat(date_add($today, $interval));  
            
            $invit->setProject($id);
            $invit->setPerson($personId);

            // save
            $em = $managerRegistry->getManager();
            $em->persist($invit);
            $em->flush();           

            // mail
            $html = '<p>Bonjour, vous êtes invité à vous inscrire via ce <a href="http://localhost:8000/invitation/inscription?nonce=' . $invit->getNonce() . '">lien</p>';
            $email = (new Email())
            ->from('donato.abiuso@chuliege.be')
            ->to($person->getEmail())           
            ->subject('CHU - Invitation pour le projet ' . $project->getTitle())            
            ->html($html);
            $mailer->send($email);

            // message            
            $this->addFlash('message', 'Mail d\'invitation envoyé');
            // redirect
            return $this->redirectToRoute('project_edit', ['id' => $project->getId()]);
        }     

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
    public function inscription(Request $request, ProjectRepository $projectRepository, PersonContactRepository $personContactRepository, UserSigninSecurityRepository $userSigninSecurityRepository, ManagerRegistry $managerRegistry, UserPasswordEncoderInterface $encoder)
    {   
        // verify nonce   
        if ($request->query->get('nonce') == null) throw new AccessDeniedException('Vous n\'êtes pas autorisé');

        // verify nonce   
        $invit = $userSigninSecurityRepository->find($request->query->get('nonce'));
        if ($invit == null) throw new AccessDeniedException('Vous n\'êtes pas autorisé'); 

        // verify date
        $today = new \DateTime();
        if ($today > $invit->getExpiredat()) throw new AccessDeniedException('Vous n\'êtes pas autorisé'); 

        // person
        $person = $personContactRepository->find($invit->getPerson());

        // signup
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
            
            // save user
            $em = $managerRegistry->getManager();
            $em->persist($user);
            $em->flush();

            // add acces to project
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
            
            // save user
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
