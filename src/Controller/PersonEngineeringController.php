<?php

namespace App\Controller;

use App\Entity\PersonEngineering;
use App\Form\PersonEngineeringType;
use Symfony\Component\Form\FormError;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\PersonEngineeringRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/admin")
 */
class PersonEngineeringController extends AbstractController
{
    /**
     * @Route("/personengineering", name="personengineering_list")
     */
    public function index(Request $request, PersonEngineeringRepository $personengineeringRepository): Response
    {
        if ($request->query->get('message')) $this->addFlash('message', $request->query->get('message'));        
        $personengineerings = $personengineeringRepository->findAll();
        return $this->render('person_engineering/personengineering.html.twig', [
            'personengineerings' => $personengineerings
        ]);
    }

    /**
     * @Route("/personengineering/search", name="personengineering_search")
     */
    public function search(Request $request, PersonEngineeringRepository $personengineeringRepository): Response
    {   
        if ($request->query->get('str') == '') {
            $personengineerings = $personengineeringRepository->findAll();
        }
        else {
            $personengineerings = $personengineeringRepository->findByNameLike($request->query->get('str'));
        }        
        return $this->render('person_engineering/personengineering_list.html.twig', [
            'personengineerings' => $personengineerings
        ]);
    }

    /**
     * @Route("/personengineering/new", name="personengineering_new")
     */
    public function add(Request $request, ManagerRegistry $managerRegistry): Response
    {
        $personengineering = new PersonEngineering();        
        $form = $this->createForm(PersonEngineeringType::class, $personengineering);        

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // instanciation DB de l'utilisateur
            $em = $managerRegistry->getManager();
            $em->persist($personengineering);
            $em->flush();
            // message            
            $this->addFlash('message', 'Personne enregistrée');
            // redirect
            return $this->redirectToRoute('personengineering_list');
        }       

        return $this->render('person_engineering/personengineering_edit.html.twig', [
            'form' => $form->createView(),         
            'id' => '0'
        ]);
    }

    /**
     * @Route("/personengineering/{id}", methods={"GET","POST"}, name="personengineering_edit")
     */
    public function update(Request $request, $id, ManagerRegistry $managerRegistry, PersonEngineeringRepository $personengineeringRepository): Response
    {
        $personengineering = $personengineeringRepository->findOneBy(['id' => $id]);
        $form = $this->createForm(PersonEngineeringType::class, $personengineering);

        // form submit
        $form->handleRequest($request);                    
        if ($form->isSubmitted() && $form->isValid()) {           
            // instanciation DB de l'utilisateur
            $em = $managerRegistry->getManager();
            $em->persist($personengineering);
            $em->flush();
            // message            
            $this->addFlash('message', 'Personne modifiée');
            // redirect
            return $this->redirectToRoute('personengineering_list');
        }

        return $this->render('person_engineering/personengineering_edit.html.twig', [
            'form' => $form->createView(),            
            'id' => $personengineering->getId()
        ]);
    }

    /**
     * @Route("/personengineering/{id}", methods={"DELETE"}, name="personengineering_delete")
     */
    public function delete($id, PersonEngineeringRepository $personengineeringRepository): Response
    {      
        // cherche                 
        $personengineering = $personengineeringRepository->findOneBy(['id' => $id]);        
        // delete       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($personengineering);
        $entityManager->flush();       
        // response
        return $this->json(['status' => 'success']);       
    }
}
