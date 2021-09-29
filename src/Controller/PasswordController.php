<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\Mime\Email;
use App\Repository\UserRepository;
use App\Entity\UserPasswordSecurity;
use Symfony\Component\Form\FormError;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserSigninSecurityRepository;
use Symfony\Component\HttpKernel\KernelInterface;
use App\Repository\UserPasswordSecurityRepository;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class PasswordController extends AbstractController
{
    /**
    * @Route({
    *     "fr": "/init_motdepasse",
    *     "en": "/init_password"
    * }, name="init_password")
    */
    function init(Request $request, ManagerRegistry $managerRegistry, KernelInterface $kernel, 
                        UserRepository $userRepository,
                        MailerInterface $mailer) : Response {
      
        // create form  
        $form = $this->createFormBuilder()
                    ->add('email', EmailType::class)
                    ->getForm();        

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {     
            // get data       
            $data = $form->getData();            

            // get user
            $user = $userRepository->findByEmail($data['email']);            

            // vérification existance
            if (count($user) == 0) throw new AccessDeniedException('Cet email n\'existe pas');            
            $user = $user[0];                        
            
            // nonce (token) création
            $userPasswordSecurity = new UserPasswordSecurity();    
            $userPasswordSecurity->setNonce(uniqid());
            
            // validité du nonce
            $today = new \DateTime();
            $interval = new \DateInterval('P1D');
            $userPasswordSecurity->setExpiredat(date_add($today, $interval));  
            $userPasswordSecurity->setUser($user->getId());

             // update DB
             $em = $managerRegistry->getManager();
             $em->persist($userPasswordSecurity);
             $em->flush();       
             
             // mail envoi
            $html = '<p>Bonjour, voici le <a href="http://localhost:8000/changer_motdepasse?nonce=' . $userPasswordSecurity->getNonce() . '">lien</a> pour la demande de changement de mot de passe.</p>';
            $html .= '<p>Si vous n\'êtes pas à l\'origine de la demande, cliquez sur ce <a href="http://localhost:8000/annuler_motdepasse?nonce=' . $userPasswordSecurity->getNonce() . '">lien</a> pour annuler la demande.<p>';
            $email = (new Email())
            ->from('donato.abiuso@chuliege.be')
            ->to($user->getEmail())           
            ->subject('CHU - demande de changement de mot de passe')            
            ->html($html);            
            $mailer->send($email);

            // message flash            
            $this->addFlash('message', 'Mail envoyé pour le changement de mot de passe');

            // redirect
            return $this->redirectToRoute('security_login');
        }

        //render
        return $this->render('password/init_password.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
    * @Route({
    *     "fr": "/changer_motdepasse",
    *     "en": "/change_password"
    * }, name="change_password")
    */
    function changePassword(Request $request, ValidatorInterface $validator, ManagerRegistry $managerRegistry, UserPasswordEncoderInterface $encoder, UserRepository $userRepository, UserPasswordSecurityRepository $userPasswordSecurityRepository): Response {

        // vérification nonce   
        if ($request->query->get('nonce') == null) throw new AccessDeniedException('Vous n\'êtes pas autorisé');

        // vérification nonce   
        $passwordSecurityRepository = $userPasswordSecurityRepository->find($request->query->get('nonce'));
        if ($passwordSecurityRepository == null) throw new AccessDeniedException('Vous n\'êtes pas autorisé'); 

        // vérification de la date de validité du nonce
        $today = new \DateTime();
        if ($today > $passwordSecurityRepository->getExpiredat()) throw new AccessDeniedException('Vous n\'êtes pas autorisé'); 
 
        // récupération le user
        $user = $userRepository->find($passwordSecurityRepository->getUser());
                   
        // create form  
        $form = $this->createFormBuilder()
                    ->add('password', PasswordType::class)
                    ->add('password_confirm', PasswordType::class)                              
                    ->getForm();   

        // handle request
        $form->handleRequest($request);
                    
        // verify password with confirm
        if ($form->isSubmitted()) {
            // get data       
            $data = $form->getData();

            // verify entiry user
            $user->setPassword($data['password']);
            $user->setPasswordConfirm($data['password_confirm']);               
            $errors = $validator->validate($user);              
            if (count($errors) > 0) {
                $form->get('password')->addError(new FormError($errors[0]->getMessage()));            
                if (isset($errors[1])) $form->get('password_confirm')->addError(new FormError($errors[1]->getMessage()));            
            }
        }

        // form submit       
        if ($form->isSubmitted() && $form->isValid()) {        
            // crypt password
            $hash = $encoder->encodePassword($user, $data['password']);
            $user->setPassword($hash);

            // update user
            $em = $managerRegistry->getManager();
            $em->persist($user);
            $em->flush();

            // delete nonce      
            $em = $managerRegistry->getManager();
            $em->remove($passwordSecurityRepository);
            $em->flush(); 

            // message
            $this->addFlash('message', 'Mot de passe enregistré');    

            // redirect
            return $this->redirectToRoute('security_login');
        }

        //render
        return $this->render('password/change_password.html.twig', [
            'form' => $form->createView(),
            'email' => $user->getEmail()
        ]);
    }

    /**
    * @Route({
    *     "fr": "/annuler_motdepasse",
    *     "en": "/cancel_password"
    * }, name="cancel_password")
    */
    function cancelPassword(Request $request, ValidatorInterface $validator, ManagerRegistry $managerRegistry, UserPasswordEncoderInterface $encoder, UserRepository $userRepository, UserPasswordSecurityRepository $userPasswordSecurityRepository): Response {
        // vérification nonce   
        if ($request->query->get('nonce') == null) throw new AccessDeniedException('Vous n\'êtes pas autorisé');

        // vérification nonce   
        $passwordSecurityRepository = $userPasswordSecurityRepository->find($request->query->get('nonce'));
        if ($passwordSecurityRepository == null) throw new AccessDeniedException('Vous n\'êtes pas autorisé'); 

        // delete nonce      
        $em = $managerRegistry->getManager();
        $em->remove($passwordSecurityRepository);
        $em->flush(); 

        // message
        $this->addFlash('message', 'Demande annulée pour le changement de mot de passe');

        // redirect
        return $this->redirectToRoute('security_login');
    }
}
