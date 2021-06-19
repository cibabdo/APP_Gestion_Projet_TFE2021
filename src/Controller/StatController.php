<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StatController extends AbstractController
{
    /**
     * @Route("/stat", name="stat")
     */
    public function index(): Response
    {
        $labels = [];
        $datas = [];
        return $this->render('stat/index.html.twig', [
            'controller_name' => 'StatController',
            'stat' => [
                'years' => [2021, 2022],
                'type' => 'bar',
                'options' => [
                    'scales' => [
                        'yAxes' => [
                            'ticks' => [
                                'beginAtZero' => true                            
                            ]
                        ]                        
                    ]
                ],
                'data' => [
                    'labels' => ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                    'datasets' => [
                        'label' => $labels,
                        'data' => $datas,                   
                        'backgroundColor' => [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        'borderColor' => [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],                   
                        'borderWidth' => 1
                    ]
                ]
            ]
        ]);
    }
}
