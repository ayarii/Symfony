<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    #[Route('/simpleMsg', name: 'app_simpleMsg')]
    public function simpleMsg()
    {
        return new Response("Bonjour 3A27");
    }



    #[Route('/paraMsg/{var}', name: 'app_paraMsg')]
    public function paraMsg($var)
    {
        return new Response("Bonjour".$var);
    }


    #[Route('/show', name: 'app_show')]
    public function showInterface()
    {
        return $this->render("product/show.html.twig");
    }

    #[Route('/goToIndex', name: 'app_goToIndex')]
    public function goToIndex()
    {
        return $this->redirectToRoute("app_product");
    }
}
