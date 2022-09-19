<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoyController extends AbstractController
{
    #[Route('/categoy', name: 'app_categoy')]
    public function index(): Response
    {
        return $this->render('categoy/index.html.twig', [
            'controller_name' => 'CategoyController',
        ]);
    }
}
