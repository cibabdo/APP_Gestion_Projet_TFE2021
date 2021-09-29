<?php

namespace App\Controller;

use App\Entity\PersonContact;
use App\Form\PersonContactType;
use Symfony\Component\Form\FormError;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\PersonContactRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/admin")
 */
class PersonContactController extends AbstractController
{
    /**
     * @Route("/personcontact", name="personcontact_list")
     */
    public function index(Request $request, PersonContactRepository $personcontactRepository): Response
    {
        if ($request->query->get('message')) $this->addFlash('message', $request->query->get('message'));        
        $personcontacts = $personcontactRepository->findAll();
        return $this->render('person_contact/personcontact.html.twig', [
            'personcontacts' => $personcontacts
        ]);
    }

    /**
     * @Route("/personcontact/search", name="personcontact_search")
     */
    public function search(Request $request, PersonContactRepository $personcontactRepository): Response
    {   
        if ($request->query->get('str') == '') {
            $personcontacts = $personcontactRepository->findAll();
        }
        else {
            $personcontacts = $personcontactRepository->findByNameLike($request->query->get('str'));
        }        
        return $this->render('person_contact/personcontact_list.html.twig', [
            'personcontacts' => $personcontacts
        ]);
    }

    /**
     * @Route("/personcontact/new", name="personcontact_new")
     */
    public function add(Request $request, ManagerRegistry $managerRegistry): Response
    {
        $personcontact = new PersonContact();        
        $form = $this->createForm(PersonContactType::class, $personcontact);        

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // instanciation DB de l'utilisateur
            $em = $managerRegistry->getManager();
            $em->persist($personcontact);
            $em->flush();
            // message            
            $this->addFlash('message', 'Personne enregistrée');
            // redirect
            return $this->redirectToRoute('personcontact_list');
        }       

        return $this->render('person_contact/personcontact_edit.html.twig', [
            'form' => $form->createView(),         
            'id' => '0'
        ]);
    }

    /**
     * @Route("/personcontact/{id}", methods={"GET","POST"}, name="personcontact_edit")
     */
    public function update(Request $request, $id, ManagerRegistry $managerRegistry, PersonContactRepository $personcontactRepository): Response
    {
        $personcontact = $personcontactRepository->findOneBy(['id' => $id]);
        $form = $this->createForm(PersonContactType::class, $personcontact);

        // form submit
        $form->handleRequest($request);        
        if ($form->isSubmitted() && $personcontact->getCompany() != null && $personcontact->getEngineeringOffice() != null) {
            // Compagnie ou bureau d'étude pas les deux
            $form->get('company')->addError(new FormError("Choisir une entreprise ou un bureau d'étude"));            
        }            
        if ($form->isSubmitted() && $form->isValid()) {           
            // instanciation DB de l'utilisateur
            $em = $managerRegistry->getManager();
            $em->persist($personcontact);
            $em->flush();
            // message            
            $this->addFlash('message', 'Personne modifiée');
            // redirect
            return $this->redirectToRoute('personcontact_list');
        }

        return $this->render('person_contact/personcontact_edit.html.twig', [
            'form' => $form->createView(),            
            'id' => $personcontact->getId()
        ]);
    }

    /**
     * @Route("/personcontact/{id}", methods={"DELETE"}, name="personcontact_delete")
     */
    public function delete($id, PersonContactRepository $personcontactRepository): Response
    {      
        // cherche                 
        $personcontact = $personcontactRepository->findOneBy(['id' => $id]);        
        // delete       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($personcontact);
        $entityManager->flush();       
        // response
        return $this->json(['status' => 'success']);       
    }
}
