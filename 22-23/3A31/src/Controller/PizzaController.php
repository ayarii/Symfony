<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PizzaController extends AbstractController
{
    #[Route('/pizza', name: 'app_pizza')]
    public function index(): Response
    {
        return $this->render('pizza/index.html.twig', [
            'controller_name' => 'PizzaController',
        ]);
    }

    #[Route('/add/{var}', name: 'add_pizza')]
    public function addPizza($var)
    {
        return new Response("Pizza:".$var);
    }

    #[Route('/list', name: 'list_pizza')]
    public function list()
    {
        return $this->render("pizza/list.html.twig");
    }
}
