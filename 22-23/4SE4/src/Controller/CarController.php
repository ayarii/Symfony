<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarController extends AbstractController
{
    #[Route('/car', name: 'app_car')]
    public function index(): Response
    {
        return $this->render('car/index.html.twig', [
            'controller_name' => 'CarController',
        ]);
    }

    #[Route('/list/{var}', name: 'list_car')]
    public function listCar($var)
    {
        return new Response("La liste des 
        voitures de la classe:".$var );
    }

    #[Route('/show', name: 'show_car')]
    public function showCar()
    {
        return $this->
        render("car/show.html.twig");
    }
}
