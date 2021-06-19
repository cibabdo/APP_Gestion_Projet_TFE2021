<?php

namespace App\Controller;

use App\Entity\Company;
use App\Form\CompanyType;
use App\Repository\CompanyRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/admin")
 */
class CompanyController extends AbstractController
{
    /**
     * @Route("/company", name="company_list")
     */
    public function index(Request $request, CompanyRepository $companyRepository): Response
    {        
        if ($request->query->get('message')) $this->addFlash('message', $request->query->get('message'));        
        $companies = $companyRepository->findAll();       
        return $this->render('company/company.html.twig', [
            'companies' => $companies
        ]);
    }

    /**
     * @Route("/company/search", name="company_search")
     */
    public function search(Request $request, CompanyRepository $companyRepository): Response
    {   
        if ($request->query->get('str') == '') {
            $companies = $companyRepository->findAll();
        }
        else {
            $companies = $companyRepository->findByNameLike($request->query->get('str'));
        }        
        return $this->render('company/company_list.html.twig', [
            'companies' => $companies
        ]);
    }

    /**
     * @Route("/company/new", name="company_new")
     */
    public function add(Request $request, ManagerRegistry $managerRegistry): Response
    {
        $company = new Company();        
        $form = $this->createForm(CompanyType::class, $company);        

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // save
            $em = $managerRegistry->getManager();
            $em->persist($company);
            $em->flush();
            // message        
            $this->addFlash('message', 'Entreprise enregistrée');
            // redirect
            return $this->redirectToRoute('company_list');
        }       

        return $this->render('company/company_edit.html.twig', [
            'form' => $form->createView(),          
            'id' => '0'
        ]);
    }

    /**
     * @Route("/company/{id}", methods={"GET","POST"}, name="company_edit")
     */
    public function update(Request $request, $id, ManagerRegistry $managerRegistry, CompanyRepository $companyRepository): Response
    {
        $company = $companyRepository->findOneBy(['id' => $id]);
        $form = $this->createForm(CompanyType::class, $company);

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // save
            $em = $managerRegistry->getManager();
            $em->persist($company);
            $em->flush();
            // message            
            $this->addFlash('message', 'Entreprise modifiée');
            // redirect
            return $this->redirectToRoute('company_list');
        }

        return $this->render('company/company_edit.html.twig', [
            'form' => $form->createView(),           
            'id' => $company->getId()
        ]);
    }

    /**
     * @Route("/company/{id}", methods={"DELETE"}, name="company_delete")
     */
    public function delete($id, CompanyRepository $companyRepository): Response
    {           
        // find            
        $company = $companyRepository->findOneBy(['id' => $id]);        
        // delete       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($company);
        $entityManager->flush();       
        // response
        return $this->json(['status' => 'success']);       
    }
}
