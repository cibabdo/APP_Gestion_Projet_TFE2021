<?php

namespace App\Controller;

use App\Entity\EngineeringOffice;
use App\Form\EngineeringOfficeType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\EngineeringOfficeRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/admin")
 */
class EngineeringOfficeController extends AbstractController
{
    /**
     * @Route("/engineeringoffice", name="engineeringoffice_list")
     */
    public function index(Request $request, EngineeringOfficeRepository $engineeringofficeRepository): Response
    {
        if ($request->query->get('message')) $this->addFlash('message', $request->query->get('message'));        
        $engineeringoffices = $engineeringofficeRepository->findAll();
        return $this->render('engineering_office/engineeringoffice.html.twig', [            
            'engineeringoffices' => $engineeringoffices
        ]);
    }

    /**
     * @Route("/engineeringoffice/search", name="engineeringoffice_search")
     */
    public function search(Request $request, EngineeringOfficeRepository $engineeringofficeRepository): Response
    {   
        if ($request->query->get('str') == '') {
            $engineeringoffices = $engineeringofficeRepository->findAll();
        }
        else {
            $engineeringoffices = $engineeringofficeRepository->findByNameLike($request->query->get('str'));
        }        
        return $this->render('engineering_office/engineeringoffice_list.html.twig', [            
            'engineeringoffices' => $engineeringoffices
        ]);
    }

    /**
     * @Route("/engineeringoffice/new", name="engineeringoffice_new")
     */
    public function add(Request $request, ManagerRegistry $managerRegistry): Response
    {
        $engineeringoffice = new EngineeringOffice();        
        $form = $this->createForm(EngineeringOfficeType::class, $engineeringoffice);        

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // save
            $em = $managerRegistry->getManager();
            $em->persist($engineeringoffice);
            $em->flush();
            // message            
            $this->addFlash('message', 'Bureau enregistré');
            // redirect
            return $this->redirectToRoute('engineeringoffice_list');
        }       

        return $this->render('engineering_office/engineeringoffice_edit.html.twig', [
            'form' => $form->createView(),           
            'id' => '0'
        ]);
    }

    /**
     * @Route("/engineeringoffice/{id}", methods={"GET","POST"}, name="engineeringoffice_edit")
     */
    public function update(Request $request, $id, ManagerRegistry $managerRegistry, EngineeringOfficeRepository $engineeringofficeRepository): Response
    {
        $engineeringoffice = $engineeringofficeRepository->findOneBy(['id' => $id]);
        $form = $this->createForm(EngineeringOfficeType::class, $engineeringoffice);

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // save
            $em = $managerRegistry->getManager();
            $em->persist($engineeringoffice);
            $em->flush();
            // message        
            $this->addFlash('message', 'Bureau modifié');
            // redirect
            return $this->redirectToRoute('engineeringoffice_list');
        }

        return $this->render('engineering_office/engineeringoffice_edit.html.twig', [
            'form' => $form->createView(),          
            'id' => $engineeringoffice->getId()
        ]);
    }

    /**
     * @Route("/engineeringoffice/{id}", methods={"DELETE"}, name="engineeringoffice_delete")
     */
    public function delete($id, EngineeringOfficeRepository $engineeringofficeRepository): Response
    {      
        // find                 
        $engineeringoffice = $engineeringofficeRepository->findOneBy(['id' => $id]);        
        // delete       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($engineeringoffice);
        $entityManager->flush();       
        // response
        return $this->json(['status' => 'success']);       
    }
}
