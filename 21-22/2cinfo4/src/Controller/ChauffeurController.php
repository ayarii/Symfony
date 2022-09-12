<?php

namespace App\Controller;

use App\Entity\Chauffeur;
use App\Form\ChauffeurType;
use App\Repository\ChauffeurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChauffeurController extends AbstractController
{
    /**
     * @Route("/chauffeur", name="chauffeur")
     */
    public function index(): Response
    {
        return $this->render('chauffeur/index.html.twig', [
            'controller_name' => 'ChauffeurController',
        ]);
    }

    /**
     * @Route("/listchauffeur", name="listchauffeur")
     */
    public function listChauffeur(){
        $chauffeurs= $this->getDoctrine()->getRepository(Chauffeur::class)->findAll();
        return $this->render('chauffeur/list.html.twig', array('chauffeurs'=>$chauffeurs));
    }

    /**
     * @Route("/updateChauffeur/{id}",name="updateChauffeur")
     */
    public function update(ChauffeurRepository $repository,$id, Request $request){
        $chauffeur= $repository->find($id);
        $form= $this->createForm(ChauffeurType::class,$chauffeur);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("listchauffeur");
        }
        return $this->render("chauffeur/update.html.twig",array('formUpdate'=>$form->createView()));
    }

}
