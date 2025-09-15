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


    #[Route('/freePalestine', name: 'app_freePalestine')]
    public function freePalestine()
    {
        #return new Response("#FreePalestine");
        return $this->redirectToRoute("app_free");
    }

    #[Route('/free', name: 'app_free')]
    public function free()
    {
        $name= "Gaza";
        return new Response("#Free".$name);
    }


    #[Route('/free2/{name}', name: 'app_free2')]
    public function free2($name)
    {
        return new Response("#Free".$name);
    }

    #[Route('/calcul', name: 'app_calcul')]
    public function calcul()
    {
        $nbr= 1500;
        return $this->render("product/calcul.html.twig",
            array("number"=>$nbr));
    }


    #[Route('/goToIndex', name: 'goToIndex')]
    public function goToIndex()
    {
        return $this->redirectToRoute("app_product");
    }
}
