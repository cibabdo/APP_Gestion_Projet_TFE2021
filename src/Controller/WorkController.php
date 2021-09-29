<?php

namespace App\Controller;

use App\Entity\Work;
use App\Form\WorkType;
use App\Repository\WorkRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/admin")
 */
class WorkController extends AbstractController
{
    /**
     * @Route("/work", name="work_list")
     */
    public function index(Request $request, WorkRepository $workRepository): Response
    {
        if ($request->query->get('message')) $this->addFlash('message', $request->query->get('message'));        
        $works = $workRepository->findAll();
        return $this->render('work/work.html.twig', [
            'works' => $works
        ]);
    }

    /**
     * @Route("/work/search", name="work_search")
     */
    public function search(Request $request, WorkRepository $workRepository): Response
    {   
        if ($request->query->get('str') == '') {
            $works = $workRepository->findAll();
        }
        else {
            $works = $workRepository->findByNameLike($request->query->get('str'));
        }        
        return $this->render('work/work_list.html.twig', [
            'works' => $works
        ]);
    }

    /**
     * @Route("/work/new", name="work_new")
     */
    public function add(Request $request, ManagerRegistry $managerRegistry): Response
    {
        $work = new Work();        
        $form = $this->createForm(WorkType::class, $work);        

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // instanciation de la DB
            $em = $managerRegistry->getManager();
            $em->persist($work);
            $em->flush();
            // message            
            $this->addFlash('message', 'Travail enregistré');
            // redirect
            return $this->redirectToRoute('work_list');
        }       

        return $this->render('work/work_edit.html.twig', [
            'form' => $form->createView(),
             'id' => '0'
        ]);
    }

    /**
     * @Route("/work/{id}", methods={"GET","POST"}, name="work_edit")
     */
    public function update(Request $request, $id, ManagerRegistry $managerRegistry, WorkRepository $workRepository): Response
    {
        $work = $workRepository->findOneBy(['id' => $id]);
        $form = $this->createForm(WorkType::class, $work);

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // instanciation de la DB
            $em = $managerRegistry->getManager();
            $em->persist($work);
            $em->flush();
            // message            
            $this->addFlash('message', 'Travail modifié');
            // redirect
            return $this->redirectToRoute('work_list');
        }

        return $this->render('work/work_edit.html.twig', [
            'form' => $form->createView(),          
            'id' => $work->getId()
        ]);
    }

    /**
     * @Route("/work/{id}", methods={"DELETE"}, name="work_delete")
     */
    public function delete($id, WorkRepository $workRepository): Response
    {      
        // find                 
        $work = $workRepository->findOneBy(['id' => $id]);        
        // delete       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($work);
        $entityManager->flush();       
        // response
        return $this->json(['status' => 'success']);       
    }
}
