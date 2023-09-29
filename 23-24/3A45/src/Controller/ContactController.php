<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }

    #[Route('/contact/{variable}', name: 'app_contact')]
    public function contact($variable)
    {
        return new Response("Hello".$variable);
    }

    #[Route('/about', name: 'app_contact')]
    public function about()
    {
        return $this->render("contact/about.html.twig");
    }
}
