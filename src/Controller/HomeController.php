<?php
namespace App\Controller;

use App\Service\PlanningService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {
    /**
    * @Route("/", name="home", methods={"GET"})
    */
    function index(Request $request, PlanningService $planningService): Response { 
        $planningService->verifyPlanning();
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->render('/home.html.twig');
        }
        else {
            return $this->redirectToRoute('project_list');
        } 
    }   
}