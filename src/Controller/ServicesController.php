<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServicesController extends AbstractController
{
    #[Route('/services', name: 'app_services')]
    public function index(): Response
    {

        $myServices = [
            [
                'h3_title' => 'Hair Cut',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.',
                'icon_name' => 'flaticon-bald'
            ],
            [
                'h3_title' => 'Facial & Body Care',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.',
                'icon_name' => 'flaticon-beard'
            ],
            [
                'h3_title' => 'Massages',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.',
                'icon_name' => 'flaticon-scissors'
            ],
            [
                'h3_title' => 'Hair Cut',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.',
                'icon_name' => 'flaticon-hair-spray'
            ],
            [
                'h3_title' => 'Hair Cut',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.',
                'icon_name' => 'flaticon-hair-spray'
            ],
            [
                'h3_title' => 'Facial & Body Care',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.',
                'icon_name' => 'flaticon-beard'
            ]
        ];

        return $this->render('services/index.html.twig', [
            'title' => 'mon titre de services',
            'description' => ' Et voila un service',
            'link_href' => 'app_services',
            'my_services' => $myServices
        ]);
    }
}
