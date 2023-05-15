<?php

namespace App\Controller;

use App\Entity\Vote;
use App\Form\VoteType;
use App\Repository\JoueurRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JoueurController extends AbstractController
{
    #[Route('/joueur', name: 'app_joueur')]
    public function showAllProduct(JoueurRepository $joueurRepository,ManagerRegistry $doctrine,Request $request): Response
    {
        $joueurs = $joueurRepository->findBy(array(),array('nom'=>'ASC'));
        $vote = new Vote();
        $form = $this->createForm(VoteType::class,$vote);
        $form->handleRequest($request);
        $em = $doctrine->getManager();
        if($form->isSubmitted()) {
            $vote->setDate(new \DateTime());
            $em->persist($vote);
            $em->flush();
            return $this->redirectToRoute('app_joueur');
        }
        return $this->renderForm('joueur/index.html.twig', [
            'joueurs' => $joueurs,
            'form'=>$form
        ]);
    }

    }
