<?php

namespace App\Controller;

use App\Entity\Location;
use App\Form\LocationType;
use App\Repository\LocationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/admin")
 */
class LocationController extends AbstractController
{
    /**
     * @Route("/location", name="location_list")
     */
    public function index(Request $request, LocationRepository $locationRepository): Response
    {
        if ($request->query->get('message')) $this->addFlash('message', $request->query->get('message'));        
        $locations = $locationRepository->findAll();
        return $this->render('location/location.html.twig', [
            'locations' => $locations
        ]);
    }

    /**
     * @Route("/location/search", name="location_search")
     */
    public function search(Request $request, LocationRepository $locationRepository): Response
    {   
        if ($request->query->get('str') == '') {
            $locations = $locationRepository->findAll();
        }
        else {
            $locations = $locationRepository->findByNameLike($request->query->get('str'));
        }        
        return $this->render('location/location_list.html.twig', [
            'locations' => $locations
        ]);
    }

    /**
     * @Route("/location/new", name="location_new")
     */
    public function add(Request $request, ManagerRegistry $managerRegistry): Response
    {
        $location = new Location();        
        $form = $this->createForm(LocationType::class, $location);        

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // save
            $em = $managerRegistry->getManager();
            $em->persist($location);
            $em->flush();
            // message            
            $this->addFlash('message', 'Localitée enregistrée');
            // redirect
            return $this->redirectToRoute('location_list');
        }       

        return $this->render('location/location_edit.html.twig', [
            'form' => $form->createView(),
             'id' => '0'
        ]);
    }

    /**
     * @Route("/location/{id}", methods={"GET","POST"}, name="location_edit")
     */
    public function update(Request $request, $id, ManagerRegistry $managerRegistry, LocationRepository $locationRepository): Response
    {
        $location = $locationRepository->findOneBy(['id' => $id]);
        $form = $this->createForm(LocationType::class, $location);

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // save
            $em = $managerRegistry->getManager();
            $em->persist($location);
            $em->flush();
            // message            
            $this->addFlash('message', 'Localitée modifiée');
            // redirect
            return $this->redirectToRoute('location_list');
        }

        return $this->render('location/location_edit.html.twig', [
            'form' => $form->createView(),          
            'id' => $location->getId()
        ]);
    }

    /**
     * @Route("/location/{id}", methods={"DELETE"}, name="location_delete")
     */
    public function delete($id, LocationRepository $locationRepository): Response
    {      
        // find                 
        $location = $locationRepository->findOneBy(['id' => $id]);        
        // delete       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($location);
        $entityManager->flush();       
        // response
        return $this->json(['status' => 'success']);       
    }
}
