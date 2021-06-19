<?php

namespace App\Controller;

use App\Entity\Role;
use App\Form\RoleType;
use App\Repository\RoleRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/admin")
 */
class RoleController extends AbstractController
{
     /**
     * @Route("/role", name="role_list")
     */
    public function index(Request $request, RoleRepository $roleRepository): Response
    {
        if ($request->query->get('message')) $this->addFlash('message', $request->query->get('message'));        
        $roles = $roleRepository->findAll();
        return $this->render('role/role.html.twig', [            
            'roles' => $roles
        ]);
    }

    /**
     * @Route("/role/search", name="role_search")
     */
    public function search(Request $request, RoleRepository $roleRepository): Response
    {   
        if ($request->query->get('str') == '') {
            $roles = $roleRepository->findAll();
        }
        else {
            $roles = $roleRepository->findByNameLike($request->query->get('str'));
        }        
        return $this->render('role/role_list.html.twig', [          
            'roles' => $roles
        ]);
    }

    /**
     * @Route("/role/new", name="role_new")
     */
    public function add(Request $request, ManagerRegistry $managerRegistry): Response
    {
        $role = new Role();        
        $form = $this->createForm(RoleType::class, $role);        

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // save
            $em = $managerRegistry->getManager();
            $em->persist($role);
            $em->flush();
            // message
            $this->addFlash('message', 'Fonction enregistrée');
            // redirect
            return $this->redirectToRoute('role_list');
        }       

        return $this->render('role/role_edit.html.twig', [
            'form' => $form->createView(),          
            'id' => '0'
        ]);
    }

    /**
     * @Route("/role/{id}", methods={"GET","POST"}, name="role_edit")
     */
    public function update(Request $request, $id, ManagerRegistry $managerRegistry, RoleRepository $roleRepository): Response
    {
        $role = $roleRepository->findOneBy(['id' => $id]);
        $form = $this->createForm(RoleType::class, $role);

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // save
            $em = $managerRegistry->getManager();
            $em->persist($role);
            $em->flush();
            // message            
            $this->addFlash('message', 'Fonction modifiée');
            // redirect
            return $this->redirectToRoute('role_list');
        }

        return $this->render('role/role_edit.html.twig', [
            'form' => $form->createView(),           
            'id' => $role->getId()
        ]);
    }

    /**
     * @Route("/role/{id}", methods={"DELETE"}, name="role_delete")
     */
    public function delete($id, RoleRepository $roleRepository): Response
    {      
        // find                 
        $role = $roleRepository->findOneBy(['id' => $id]);        
        // delete       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($role);
        $entityManager->flush();       
        // response
        return $this->json(['status' => 'success']);       
    }
}
