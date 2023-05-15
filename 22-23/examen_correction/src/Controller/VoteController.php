<?php

namespace App\Controller;

use App\Entity\Vote;
use App\Form\VoteType;
use App\Repository\JoueurRepository;
use App\Repository\VoteRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoteController extends AbstractController
{

    #[Route('/vote/add', name: 'app_vote_add')]
    public function addProduct(ManagerRegistry $doctrine,Request $request): Response {
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

        return $this->renderForm('vote/add.html.twig',[
            'form'=>$form
        ]);
    }

    #[Route('/vote/byJoueur/{id}', name: 'app_vote_byjoueur')]
    public function showProductByCategory(VoteRepository $repository,$id,JoueurRepository $repo): Response
    {
        $votes = $repository->getVotesByJoueur($id);
        $joueur = $repo->find($id);
        return $this->render('vote/votesByJoueur.html.twig', [
            'votes' => $votes,
            'joueur'=>$joueur
        ]);
    }
}
