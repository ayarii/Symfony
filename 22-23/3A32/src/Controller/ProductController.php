<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    #[Route('/productList', name: 'list_product')]
    public function listProduct()
    {
        return new Response("WELCOME 3A32");
    }

    #[Route('/productShow/{product}', name: 'show_product')]
    public function showProduct($product)
    {
        return new Response("Show Product:".$product);
    }
}
