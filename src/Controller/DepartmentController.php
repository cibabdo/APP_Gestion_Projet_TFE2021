<?php

namespace App\Controller;

use App\Entity\Department;
use App\Form\DepartmentType;
use App\Repository\DepartmentRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/admin")
 */
class DepartmentController extends AbstractController
{
    /**
     * @Route("/department", name="department_list")
     */
    public function index(Request $request, DepartmentRepository $departmentRepository): Response
    {
        if ($request->query->get('message')) $this->addFlash('message', $request->query->get('message'));        
        $departments = $departmentRepository->findAll();
        return $this->render('department/department.html.twig', [
            'departments' => $departments
        ]);
    }

    /**
     * @Route("/department/search", name="department_search")
     */
    public function search(Request $request, DepartmentRepository $departmentRepository): Response
    {   
        if ($request->query->get('str') == '') {
            $departments = $departmentRepository->findAll();
        }
        else {
            $departments = $departmentRepository->findByNameLike($request->query->get('str'));
        }        
        return $this->render('department/department_list.html.twig', [
            'departments' => $departments
        ]);
    }

    /**
     * @Route("/department/new", name="department_new")
     */
    public function add(Request $request, ManagerRegistry $managerRegistry): Response
    {
        $department = new Department();        
        $form = $this->createForm(DepartmentType::class, $department);        

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // save
            $em = $managerRegistry->getManager();
            $em->persist($department);
            $em->flush();
            // message            
            $this->addFlash('message', 'Département enregistré');
            // redirect
            return $this->redirectToRoute('department_list');
        }       

        return $this->render('department/department_edit.html.twig', [
            'form' => $form->createView(),
             'id' => '0'
        ]);
    }

    /**
     * @Route("/department/{id}", methods={"GET","POST"}, name="department_edit")
     */
    public function update(Request $request, $id, ManagerRegistry $managerRegistry, DepartmentRepository $departmentRepository): Response
    {
        $department = $departmentRepository->findOneBy(['id' => $id]);
        $form = $this->createForm(DepartmentType::class, $department);

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // save
            $em = $managerRegistry->getManager();
            $em->persist($department);
            $em->flush();
            // message            
            $this->addFlash('message', 'Département modifié');
            // redirect
            return $this->redirectToRoute('department_list');
        }

        return $this->render('department/department_edit.html.twig', [
            'form' => $form->createView(),          
            'id' => $department->getId()
        ]);
    }

    /**
     * @Route("/department/{id}", methods={"DELETE"}, name="department_delete")
     */
    public function delete($id, DepartmentRepository $departmentRepository): Response
    {      
        // find                 
        $department = $departmentRepository->findOneBy(['id' => $id]);        
        // delete       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($department);
        $entityManager->flush();       
        // response
        return $this->json(['status' => 'success']);       
    }
}
