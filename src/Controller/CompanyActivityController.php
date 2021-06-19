<?php

namespace App\Controller;

use App\Entity\CompanyActivity;
use App\Form\CompanyActivityType;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\CompanyActivityRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/admin")
 */
class CompanyActivityController extends AbstractController
{
    /**
     * @Route("/company/activity", name="activity_list")
     */
    public function index(Request $request, CompanyActivityRepository $companyActivityRepository): Response
    {
        if ($request->query->get('message')) $this->addFlash('message', $request->query->get('message'));        
        $activities = $companyActivityRepository->findAll();
        return $this->render('company_activity/activity.html.twig', [           
            'activities' => $activities
        ]);
    }

    /**
     * @Route("/company/activity/search", name="activity_search")
     */
    public function search(Request $request, CompanyActivityRepository $CompanyActivityRepository): Response
    {   
        if ($request->query->get('str') == '') {
            $activities = $CompanyActivityRepository->findAll();
        }
        else {
            $activities = $CompanyActivityRepository->findByNameLike($request->query->get('str'));
        }        
        return $this->render('company_activity/activity_list.html.twig', [
            'activities' => $activities
        ]);
    }

    /**
     * @Route("/company/activity/new", name="activity_new")
     */
    public function add(Request $request, ManagerRegistry $managerRegistry): Response
    {      
        $activity = new CompanyActivity();        
        $form = $this->createForm(CompanyActivityType::class, $activity);        

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // save
            $em = $managerRegistry->getManager();
            $em->persist($activity);
            $em->flush();
            // message      
            $this->addFlash('message', 'Activité d\'entreprise enregistrée');
            // redirect
            return $this->redirectToRoute('activity_list');
        }       

        return $this->render('company_activity/activity_edit.html.twig', [
            'form' => $form->createView(),         
            'id' => '0'
        ]);
    }

    /**
     * @Route("/company/activity/{id}", methods={"GET","POST"}, name="activity_edit")
     */
    public function update(Request $request, $id, ManagerRegistry $managerRegistry, CompanyActivityRepository $CompanyActivityRepository): Response
    {
        $activity = $CompanyActivityRepository->findOneBy(['id' => $id]);
        $form = $this->createForm(CompanyActivityType::class, $activity);

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // save
            $em = $managerRegistry->getManager();
            $em->persist($activity);
            $em->flush();
            // message            
            $this->addFlash('message', 'Activité d\'entreprise modifiée');
            // redirect
            return $this->redirectToRoute('activity_list');
        }

        return $this->render('company_activity/activity_edit.html.twig', [
            'form' => $form->createView(),         
            'id' => $activity->getId()
        ]);
    }

    /**
     * @Route("/company/activity/{id}", methods={"DELETE"}, name="activity_delete")
     */
    public function delete($id, CompanyActivityRepository $CompanyActivityRepository): Response
    {      
        // find                 
        $activity = $CompanyActivityRepository->findOneBy(['id' => $id]);        
        // delete       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($activity);
        $entityManager->flush();       
        // response
        return $this->json(['status' => 'success']);       
    }
}
