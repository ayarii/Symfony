<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/contactpage/{var}', name: 'contact_app')]
    public function contact($var)
    {
        return new Response("bonsoir".$var);
    }
    #[Route('/service', name: 'service_app')]

    public function service()
    {
        return $this->render("home/service.html.twig");
    }

}
