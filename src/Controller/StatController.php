<?php

namespace App\Controller;

use App\Entity\Project;
use App\Repository\ProjectRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Serializer\Serializer;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StatController extends AbstractController
{
    /**
     * @Route("/stat", name="stat")
     */
    public function index(): Response
    {       
        $today = new \DateTime();
        $year = $today->format('Y');

        return $this->render('stat/stat.html.twig', [
            'stat' => [
                'year' => $year,
                'years' => $this->getYears()
            ]
        ]);
    }

    /**
     * @Route("/stat/search", name="stat_search")
     */
    public function search(Request $request, ProjectRepository $projectRepository): Response
    {               
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);  

        $id = $request->query->get('id');              
        $year = $request->query->get('year');        
               
        $result = $this->getQueries($year, $id, $projectRepository);    
        $data = $this->getData($id, $result['projects']);
        $chartInput = $this->getChartInput($id, $data, $result['label']);          

        $jsonContent = $serializer->normalize($chartInput, 'json');
        return $this->json($jsonContent);        
    }

    /****************************************/
    
    private function getYears () {
        $start = 2021;
        $today = new \DateTime();
        $end = $today->format('Y');
        $years = [];
        for ($i=$start; $i<=$end; $i++) {
            array_push($years, $i);
        }
        return $years;
    }

    private function getQueries($year, $chart, $projectRepository) {        
        $label = '';
        $projects = [];
        switch($chart) {
            case '1' :  case '2' :
                $label = 'Projets';              
                $projects = $projectRepository->findByYear($year);
                break;           
        }
        return [
            'projects' => $projects,
            'label' => $label
        ];
    }

    private function  getChartInput($chart, $data, $label) {                 
        $chartInput = [];
        switch($chart) {
            case '1' : case '2' :
                $chartInput = [
                    'type' => 'bar',          
                    'data' => [  
                        'labels' => $data['labels'],
                        'datasets'=> [[
                            'label' => $label,
                            'data' => $data['projects'],                   
                            'backgroundColor' => $data['backgroundColor'],
                            'borderColor' => $data['borderColor'],                   
                            'borderWidth' => 1
                        ]]
                    ],
                    'options' => [
                        'scales' =>  [
                            'yAxes' => [[
                                'ticks' => [
                                    'beginAtZero' => true
                                ]
                            ]]
                        ]
                    ]
                ];
                break;
        }
        return $chartInput;
    }

    private function getData($chart, $projects) {
        $data = [
            'projects' => [],
            'labels' => ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
            'backgroundColor' => [],
            'borderColor' =>[]
        ];
        switch($chart) {
            case '1' : case '2' :     
                //dd($projects);
                for($i=1; $i<=12; $i++) { 
                    $nb = 0;        
                    foreach($projects as $project) {
                        if (intval($project['month']) == $i) {
                            $nb = $project['nb'];
                            break; 
                        }
                    }            
                    array_push($data['projects'], $nb);           
                    array_push($data['backgroundColor'], 'rgba(54, 162, 235, 0.2)');
                    array_push($data['borderColor'], 'rgba(54, 162, 235, 1');
                }                             
                break;            
        }    
        return $data;
    }
}
