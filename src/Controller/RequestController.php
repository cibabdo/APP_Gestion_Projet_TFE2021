<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;

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

     /**
     * @Route("/request/pdf", name="request_pdf")
     */
    public function pdf(Request $request, ProjectRepository $projectRepository): Response
    {   
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // find in DB
        if ($request->query->get('state') == '') {
            $projects = $projectRepository->findAll();
        }
        else {
            $projects = $projectRepository->findByState($request->query->get('state'));
        }
                
        $state = $request->query->get('state');
        $states  = ["Pas commencé", "Etude", "En cours", "Clôturé", "Stand By", "Reporté"];
        if ($state == '') {
            $lib = 'TOUT';
        }
        else {
            $lib = $states[$state];
        } 
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('request/request_pdf.html.twig', [
            'projects' => $projects,
            'state' => $lib
        ]);
        
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)                      
        $dompdf->stream("request.pdf", [
            "Attachment" => false
        ]);         
        
        return new Response('', 200, [
            'Content-Type' => 'application/pdf',
        ]);
    }
}
