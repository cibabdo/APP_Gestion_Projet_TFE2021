<?php

namespace App\Controller;

use App\Entity\Employee;
use App\Form\EmployeeType;
use App\Repository\EmployeeRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/admin")
 */
class EmployeeController extends AbstractController
{
    /**
     * @Route("/employee", name="employee_list")
     */
    public function index(Request $request, EmployeeRepository $employeeRepository): Response
    {
        if ($request->query->get('message')) $this->addFlash('message', $request->query->get('message'));        
        $employees = $employeeRepository->findAll();
        return $this->render('employee/employee.html.twig', [
            'employees' => $employees
        ]);
    }

    /**
     * @Route("/employee/search", name="employee_search")
     */
    public function search(Request $request, EmployeeRepository $employeeRepository): Response
    {   
        if ($request->query->get('str') == '') {
            $employees = $employeeRepository->findAll();
        }
        else {
            $employees = $employeeRepository->findByNameLike($request->query->get('str'));
        }        
        return $this->render('employee/employee_list.html.twig', [
            'employees' => $employees
        ]);
    }

    /**
     * @Route("/employee/new", name="employee_new")
     */
    public function add(Request $request, ManagerRegistry $managerRegistry): Response
    {
        $employee = new Employee();        
        $form = $this->createForm(EmployeeType::class, $employee);        

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // save
            $em = $managerRegistry->getManager();
            $em->persist($employee);
            $em->flush();
            // message            
            $this->addFlash('message', 'Employé enregistré');
            // redirect
            return $this->redirectToRoute('employee_list');
        }       

        return $this->render('employee/employee_edit.html.twig', [
            'form' => $form->createView(),         
            'id' => '0'
        ]);
    }

    /**
     * @Route("/employee/{id}", methods={"GET","POST"}, name="employee_edit")
     */
    public function update(Request $request, $id, ManagerRegistry $managerRegistry, EmployeeRepository $employeeRepository): Response
    {
        $employee = $employeeRepository->findOneBy(['id' => $id]);
        $form = $this->createForm(EmployeeType::class, $employee);

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // save
            $em = $managerRegistry->getManager();
            $em->persist($employee);
            $em->flush();
            // message            
            $this->addFlash('message', 'Employé modifié');
            // redirect
            return $this->redirectToRoute('employee_list');
        }

        return $this->render('employee/employee_edit.html.twig', [
            'form' => $form->createView(),            
            'id' => $employee->getId()
        ]);
    }

    /**
     * @Route("/employee/{id}", methods={"DELETE"}, name="employee_delete")
     */
    public function delete($id, EmployeeRepository $employeeRepository): Response
    {      
        // find                 
        $employee = $employeeRepository->findOneBy(['id' => $id]);        
        // delete       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($employee);
        $entityManager->flush();       
        // response
        return $this->json(['status' => 'success']);       
    }
}
