<?php

namespace App\Controller;

use App\Form\RequestType;
use App\Repository\ProjectRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RequestController extends AbstractController
{
    /**
     * @Route("/request", name="request")
     */
    public function index(): Response
    {        
        $form = $this->createForm(RequestType::class);        

        return $this->render('request/request.html.twig', [
            'form' => $form->createView()
        ]);
    }

     /**
     * @Route("/request/search", name="request_search")
     */
    public function search(Request $request, ProjectRepository $projectRepository): Response
    {                
        if ($request->query->get('state') == '') {
            $projects = $projectRepository->findAll();
        }
        else {
            $projects = $projectRepository->findByState($request->query->get('state'));
        }        
        return $this->render('request/request_list.html.twig', [
            'projects' => $projects
        ]);
    }
}
