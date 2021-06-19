<?php

namespace App\Controller;

use App\Entity\EngineeringOfficeSort;
use App\Form\EngineeringOfficeSortType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EngineeringOfficeSortRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/admin")
 */
class EngineeringOfficeSortController extends AbstractController
{
    /**
     * @Route("/engineeringofficesort", name="engineeringofficesort_list")
     */
    public function index(Request $request, EngineeringOfficeSortRepository $engineeringOfficeSortRepository): Response
    {
        if ($request->query->get('message')) $this->addFlash('message', $request->query->get('message'));        
        $engineeringofficesorts = $engineeringOfficeSortRepository->findAll();
        return $this->render('engineering_office_sort/engineeringofficesort.html.twig', [            
            'engineeringofficesorts' => $engineeringofficesorts
        ]);
    }

    /**
     * @Route("/engineeringofficesort/search", name="engineeringofficesort_search")
     */
    public function search(Request $request, EngineeringOfficeSortRepository $engineeringOfficeSortRepository): Response
    {   
        if ($request->query->get('str') == '') {
            $engineeringofficesorts = $engineeringOfficeSortRepository->findAll();
        }
        else {
            $engineeringofficesorts = $engineeringOfficeSortRepository->findByNameLike($request->query->get('str'));
        }        
        return $this->render('engineering_office_sort/engineeringofficesort_list.html.twig', [         
            'engineeringofficesorts' => $engineeringofficesorts
        ]);
    }

    /**
     * @Route("/engineeringofficesort/new", name="engineeringofficesort_new")
     */
    public function add(Request $request, ManagerRegistry $managerRegistry): Response
    {
        $engineeringOfficeSort = new Engineeringofficesort();        
        $form = $this->createForm(EngineeringOfficeSortType::class, $engineeringOfficeSort);        

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // save
            $em = $managerRegistry->getManager();
            $em->persist($engineeringOfficeSort);
            $em->flush();
            // message            
            $this->addFlash('message', 'Type de bureau enregistré');
            // redirect
            return $this->redirectToRoute('engineeringofficesort_list');
        }       

        return $this->render('engineering_office_sort/engineeringofficesort_edit.html.twig', [
            'form' => $form->createView(),           
            'id' => '0'
        ]);
    }

    /**
     * @Route("/engineeringofficesort/{id}", methods={"GET","POST"}, name="engineeringofficesort_edit")
     */
    public function update(Request $request, $id, ManagerRegistry $managerRegistry, EngineeringOfficeSortRepository $engineeringOfficeSortRepository): Response
    {
        $engineeringOfficeSort = $engineeringOfficeSortRepository->findOneBy(['id' => $id]);
        $form = $this->createForm(EngineeringOfficeSortType::class, $engineeringOfficeSort);

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // save
            $em = $managerRegistry->getManager();
            $em->persist($engineeringOfficeSort);
            $em->flush();
            // message            
            $this->addFlash('message', 'Type de bureau modifié');
            // redirect
            return $this->redirectToRoute('engineeringofficesort_list');
        }

        return $this->render('engineering_office_sort/engineeringofficesort_edit.html.twig', [
            'form' => $form->createView(),         
            'id' => $engineeringOfficeSort->getId()
        ]);
    }

    /**
     * @Route("/engineeringofficesort/{id}", methods={"DELETE"}, name="engineeringofficesort_delete")
     */
    public function delete($id, EngineeringOfficeSortRepository $engineeringOfficeSortRepository): Response
    {      
        // find                 
        $engineeringofficesort = $engineeringOfficeSortRepository->findOneBy(['id' => $id]);        
        // delete       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($engineeringofficesort);
        $entityManager->flush();       
        // response
        return $this->json(['status' => 'success']);       
    }
}
