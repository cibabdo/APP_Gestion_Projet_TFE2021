<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Component\Form\FormError;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/admin")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user_list")
     */
    public function index(Request $request, UserRepository $userRepository): Response
    {
        if ($request->query->get('message')) $this->addFlash('message', $request->query->get('message'));        
        $users = $userRepository->findAll();
        return $this->render('user/user.html.twig', [
            'users' => $users
        ]);
    }

    /**
     * @Route("/user/search", name="user_search")
     */
    public function search(Request $request, UserRepository $userRepository): Response
    {   
        if ($request->query->get('str') == '') {
            $users = $userRepository->findAll();
        }
        else {
            $users = $userRepository->findByNameLike($request->query->get('str'));
        }        
        return $this->render('user/user_list.html.twig', [
            'users' => $users
        ]);
    }

    /**
     * @Route("/user/new", name="user_new")
     */
    public function add(Request $request, ManagerRegistry $managerRegistry, UserPasswordEncoderInterface $encoder): Response
    {
        $user = new User();
        $user->setRoles(['ROLE_USER']);
        $form = $this->createForm(UserType::class, $user);        

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {  
            // crypt password
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);            
            // instanciation de la DB
            $em = $managerRegistry->getManager();
            $em->persist($user);
            $em->flush();
            // message            
            $this->addFlash('message', 'Utilisateur enregistré');
            // redirect
            return $this->redirectToRoute('user_list');
        }       

        return $this->render('user/user_edit.html.twig', [
            'form' => $form->createView(),         
            'id' => '0'            
        ]);
    }

    /**
     * @Route("/user/{id}", methods={"GET","POST"}, name="user_edit")
     */
    public function update(Request $request, $id, ManagerRegistry $managerRegistry, UserRepository $userRepository, UserPasswordEncoderInterface $encoder): Response
    {
        $user = $userRepository->findOneBy(['id' => $id]);
        $user->setPasswordOld($user->getPassword());
        $form = $this->createForm(UserType::class, $user);

        // form submit
        $form->handleRequest($request);     
        if ($form->isSubmitted()) {
            if ($user->getPassword() == null) {
                $user->setPassword($user->getPasswordOld());                
            }
            else {
                if ($user->getPassword() != $user->password_confirm && $user->password_confirm == '') {
                    $form->get('password_confirm')->addError(new FormError("Le mot de passe n'est pas identique au premier")); 
                }
            }
        }                       
        if ($form->isSubmitted() && $form->isValid()) {            
            // crypt password
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);
            // instanciation de la DB
            $em = $managerRegistry->getManager();
            $em->persist($user);
            $em->flush();
            // message            
            $this->addFlash('message', 'Utilisateur modifié');
            // redirect
            return $this->redirectToRoute('user_list');
        }

        return $this->render('user/user_edit.html.twig', [
            'form' => $form->createView(),            
            'id' => $user->getId()
        ]);
    }

    /**
     * @Route("/user/{id}", methods={"DELETE"}, name="user_delete")
     */
    public function delete($id, UserRepository $userRepository): Response
    {      
        // find                 
        $user = $userRepository->findOneBy(['id' => $id]);        
        // delete       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($user);
        $entityManager->flush();       
        // response
        return $this->json(['status' => 'success']);       
    }
}
