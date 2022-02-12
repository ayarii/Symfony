<?php

namespace App\Controller;

use App\Repository\ProprietaireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProprietaireController extends AbstractController
{
    /**
     * @Route("/proprietaire", name="proprietaire")
     */
    public function index(): Response
    {
        return $this->render('proprietaire/index.html.twig', [
            'controller_name' => 'ProprietaireController',
        ]);
    }
    /**
     * @Route("/deletePro/{numprop}", name="deletePro")
     */
    public function delete(ProprietaireRepository $repository,$numprop){
        $prorietaire= $repository->find($numprop);
        $em= $this->getDoctrine()->getManager();
        $em->remove($prorietaire);
        $em->flush();
        return $this->redirectToRoute("addImo");
    }
}
