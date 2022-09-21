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

    #[Route('/list/{var}', name: 'list_product')]
    public function listProduct($var)
    {
        return new  Response("La liste des produits:".$var);
    }

    /**
     * @Route("/show", name="show")
     */
    public function showProduct()
    {
        return $this->render("product/show.html.twig");
    }
}
