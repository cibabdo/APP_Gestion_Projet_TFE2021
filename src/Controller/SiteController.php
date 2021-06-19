<?php

namespace App\Controller;

use App\Entity\Site;
use App\Form\SiteType;
use App\Repository\SiteRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/admin")
 */
class SiteController extends AbstractController
{
    /**
     * @Route("/site", name="site_list")
     */
    public function index(Request $request, SiteRepository $siteRepository): Response
    {
        if ($request->query->get('message')) $this->addFlash('message', $request->query->get('message'));        
        $sites = $siteRepository->findAll();
        return $this->render('site/site.html.twig', [
            'sites' => $sites
        ]);
    }

    /**
     * @Route("/site/search", name="site_search")
     */
    public function search(Request $request, SiteRepository $siteRepository): Response
    {   
        if ($request->query->get('str') == '') {
            $sites = $siteRepository->findAll();
        }
        else {
            $sites = $siteRepository->findByNameLike($request->query->get('str'));
        }        
        return $this->render('site/site_list.html.twig', [
            'sites' => $sites
        ]);
    }

    /**
     * @Route("/site/new", name="site_new")
     */
    public function add(Request $request, ManagerRegistry $managerRegistry): Response
    {
        $site = new Site();        
        $form = $this->createForm(SiteType::class, $site);        

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // save
            $em = $managerRegistry->getManager();
            $em->persist($site);
            $em->flush();
            // message            
            $this->addFlash('message', 'Site enregistré');
            // redirect
            return $this->redirectToRoute('site_list');
        }       

        return $this->render('site/site_edit.html.twig', [
            'form' => $form->createView(),
             'id' => '0'
        ]);
    }

    /**
     * @Route("/site/{id}", methods={"GET","POST"}, name="site_edit")
     */
    public function update(Request $request, $id, ManagerRegistry $managerRegistry, SiteRepository $siteRepository): Response
    {
        $site = $siteRepository->findOneBy(['id' => $id]);
        $form = $this->createForm(SiteType::class, $site);

        // form submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {           
            // save
            $em = $managerRegistry->getManager();
            $em->persist($site);
            $em->flush();
            // message            
            $this->addFlash('message', 'Site modifié');
            // redirect
            return $this->redirectToRoute('site_list');
        }

        return $this->render('site/site_edit.html.twig', [
            'form' => $form->createView(),          
            'id' => $site->getId()
        ]);
    }

    /**
     * @Route("/site/{id}", methods={"DELETE"}, name="site_delete")
     */
    public function delete($id, SiteRepository $siteRepository): Response
    {      
        // find                 
        $site = $siteRepository->findOneBy(['id' => $id]);        
        // delete       
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($site);
        $entityManager->flush();       
        // response
        return $this->json(['status' => 'success']);       
    }
}
