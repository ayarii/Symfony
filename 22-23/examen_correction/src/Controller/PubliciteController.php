<?php

namespace App\Controller;

use App\Entity\Publicite;
use App\Form\PubliciteType;
use App\Repository\PubliciteRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PubliciteController extends AbstractController
{
    #[Route('/publicite', name: 'app_publicite')]
    public function index(): Response
    {
        return $this->render('publicite/index.html.twig', [
            'controller_name' => 'PubliciteController',
        ]);
    }

    #[Route('/addPublicite', name: 'add_publicite')]
    public function addProduit(Request $request, ManagerRegistry $doctrine)
    {
        $publicite = new Publicite();
        $form = $this->createForm(PubliciteType::class, $publicite);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $doctrine->getManager();
            $em->persist($publicite);
            $em->flush();
            return $this->redirectToRoute("add_publicite");
        }
        return $this->render("publicite/add.html.twig",
            array('formPublicite' => $form->createView()));
    }

    #[Route('/listPublicite', name: 'app_listPublicite')]
    public function listPublicite(PubliciteRepository $repository)
    {
        $publiciteEnLigne = $repository->findBy(array("type" => "enLigne"),array('dateDebut' => 'ASC'));
        $publiciteTelevisee = $repository->findBy(array("type" => "Televisee"),array('dateDebut' => 'ASC'));
        $publiciteRadiodiffusee = $repository->findBy(array("type" => "Radiodiffusee"),array('dateDebut' => 'ASC'));
        return $this->render("publicite/list.html.twig",
            array("tabPubliciteEnLigne" => $publiciteEnLigne,
                  "tabPubliciteTelevisee" => $publiciteTelevisee,
                  "tabPubliciteRadiodiffusee" => $publiciteRadiodiffusee
            ));
    }

    #[Route('/listPubliciteParProduit/{id}', name: 'app_listPubliciteParProduit')]
    public function listPubliciteParProduit(PubliciteRepository $repository,$id){
        $publicites= $repository->listPubliciteParProduit($id);
        return $this->render("publicite/listPubliciteParProduit.html.twig",
            array("tabPublicites" => $publicites));
    }
}
