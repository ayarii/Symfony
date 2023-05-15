<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    #[Route('/produit', name: 'app_produit')]
    public function index(): Response
    {
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }

    #[Route('/addProduit', name: 'add_produit')]
    public function addProduit(Request $request,ManagerRegistry $doctrine)
    {
        $produit= new Produit();
        $form= $this->createForm(ProduitType::class,$produit);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $doctrine->getManager();
            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute("add_produit");
        }
        return $this->render("produit/add.html.twig",
            array('formProduit'=>$form->createView()));
    }

    #[Route('/listProduit', name: 'app_listProduit')]
    public function listProduit(ProduitRepository $repository )
    {
        $produits = $repository->findAll();
        return $this->render("produit/list.html.twig",
            array("tabProduit"=>$produits));
    }

    #[Route('/deleteProduit/{id}', name: 'app_deleteProduit')]
    public function deleteProduit(ManagerRegistry $doctrine,ProduitRepository $repository,$id)
    {
        $produit= $repository->find($id);
        #  $em= $this->getDoctrine()->getManager();
        $em=$doctrine->getManager();
        $em->remove($produit);
        $em->flush();
        return $this->redirectToRoute("app_listProduit");
    }
}
