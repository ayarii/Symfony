<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

    #[Route('/addProduct', name: 'add_product')]
    public function addProduc(Request $request,ManagerRegistry $doctrine)
    {
        $product= new Product();
        $form= $this->createForm(ProductType::class,$product);
       $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em = $doctrine->getManager();
            $em->persist($product);
            $em->flush();
            return new Response("produit ajouté avec succes");
        }
        return  $this->render("product/add.html.twig",array
            ( "formProduct"=>$form->createView())
       );
    }

}
