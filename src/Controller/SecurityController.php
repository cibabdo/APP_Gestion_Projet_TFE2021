<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SigninType;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route({
    *     "fr": "/admin/inscription",
    *     "en": "/admin/signin"
    * }, name="security_signin")
     */
    public function signin(Request $request, ManagerRegistry $managerRegistry, UserPasswordEncoderInterface $encoder)
    {
        $message = '';

        $user = new User();
        $form = $this->createForm(SigninType::class, $user);

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // crypt password
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);
            // save
            $em = $managerRegistry->getManager();
            $em->persist($user);
            $em->flush();
            // message
            $message = 'Utilisateur enregistrĂ©';
            // redirect
            return $this->redirectToRoute('security_login');
        }

        //render
        return $this->render('security/signin.html.twig', [
            'form' => $form->createView(),
            'message' => $message
        ]);
    } 

    /**
    * @Route({
    *     "fr": "/connexion",
    *     "en": "/login"
    * }, name="security_login")
    */
    function login(AuthenticationUtils $authenticationUtils, TranslatorInterface $translator) {      
        // errors
        $error = $authenticationUtils->getLastAuthenticationError();        
        $lastUsername = $authenticationUtils->getLastUsername();     
        // render
        return $this->render('/security/login.html.twig', [
            'title' => $translator->trans('login.title'),
            'password' => $translator->trans('login.password'),
            'username' => $lastUsername,
            'error' => $error ? 'Email et/ou mot de passe erronĂ©(s)' : null
        ]);
    }

    /**
    * @Route({
    *     "fr": "/deconnexion",
    *     "en": "/logout"
    * }, name="security_logout")
    */
    function logout() {}
}