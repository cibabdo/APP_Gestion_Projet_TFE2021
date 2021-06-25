<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {
    /**
    * @Route("/", name="home", methods={"GET"})
    */
    function index(Request $request): Response {       
       return $this->render('/home.html.twig');
    }    
}