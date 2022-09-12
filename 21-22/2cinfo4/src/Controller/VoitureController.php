<?php

namespace App\Controller;

use App\Entity\Chauffeur;
use App\Entity\Voiture;
use App\Form\ChauffeurType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoitureController extends AbstractController
{
    /**
     * @Route("/voiture", name="voiture")
     */
    public function index(): Response
    {
        return $this->render('voiture/index.html.twig', [
            'controller_name' => 'VoitureController',
        ]);
    }

    /**
     * @Route("/listVoiture", name="listvoiture")
     */
    public function list()
    {
        $voitures= $this->getDoctrine()->getRepository(Voiture::class)->findAll();
        return $this->render('voiture/list.html.twig', array('voitures'=>$voitures));
    }

    /**
     * @Route("/removevoiture/{id}", name="removevoiture")
     */
    public function remove($id)
    {
        $voiture= $this->getDoctrine()->getRepository(Voiture::class)->find($id);
        $em= $this->getDoctrine()->getManager();
        $em->remove($voiture);
        $em->flush();
        return $this->redirectToRoute("listvoiture");
    }

    /**
     * @Route("/louer/{id}", name="louerVoiture")
     */
    public function louer($id,Request $request)
    {
        $voiture= $this->getDoctrine()->getRepository(Voiture::class)->find($id);
        $chauffeur= new  Chauffeur();
        $form= $this->createForm(ChauffeurType::class,$chauffeur);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $this->getDoctrine()->getManager();
            $em->persist($chauffeur);
            $em->flush();
            return $this->redirectToRoute("listvoiture");
        }
        return $this->render("voiture/louer.html.twig",array('voiture'=>$voiture,'form'=>$form->createView()));
    }
}
