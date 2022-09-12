<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    /**
     * @Route("/productList/{var}",name="productAction")
     */
    public function listProduct($var){
     return new Response("La liste des".$var);
    }

    /**
     * @Route("/show",name="showAction")
     */
    public function showProduct()
    {
        return $this->render("product/show.html.twig");
    }
}
