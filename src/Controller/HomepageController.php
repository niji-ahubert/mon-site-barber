<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(): Response
    {

        return $this->render('homepage/index.html.twig', [
            'title' => 'mon titre de homepage',
            'description' => ' Et voila une description',
            'link_href' => 'app_homepage'
        ]);
    }
}
