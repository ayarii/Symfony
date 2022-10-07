<?php

namespace App\Controller;

use App\Repository\ClubRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClubController extends AbstractController
{
    #[Route('/club', name: 'app_club')]
    public function index(): Response
    {
        return $this->render('club/index.html.twig', [
            'controller_name' => 'ClubController',
        ]);
    }

    #[Route('/listClub', name: 'list_club')]

    public function listClubs(ClubRepository $repository)
    {
        $clubs= $repository->findAll();
        return $this->render("club/list.html.twig",
            array("tabClubs"=>$clubs));
    }
}
