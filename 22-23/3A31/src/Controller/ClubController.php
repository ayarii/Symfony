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

    #[Route('/formations', name: 'list_formation')]
    public function formations()
    {
        $v1= "3A31";
        $v2="J13";
        $formations = array(
            array('ref' => 'form147', 'Titre' => 'Formation Symfony
4','Description'=>'pratique',
                'date_debut'=>'12/06/2020', 'date_fin'=>'19/06/2020',
                'nb_participants'=>19),
            array('ref'=>'form177','Titre'=>'Formation SOA' ,
                'Description'=>'theorique','date_debut'=>'03/12/2020','date_fin'=>'10/12/2020',
                'nb_participants'=>0),
            array('ref'=>'form178','Titre'=>'Formation Angular' ,
                'Description'=>'theorique','date_debut'=>'10/06/2020','date_fin'=>'14/06/2020',
                'nb_participants'=>12));
        return $this->
        render("club/formations.html.twig",
        array("v1"=>$v1,"v2"=>$v2,"listFormation"=>$formations));
    }

    #[Route('/reservation', name: 'app_reservation')]
    public function reservationFormation()
    {
        //return new Response("réservation!");
        return $this->render("club/detail.html.twig");
    }

    #[Route('/clubs', name: 'app_clubs')]
    public function listClub(ClubRepository  $repository)
    {
        $clubs= $repository->findAll();
        return $this->render("club/clubs.html.twig",
            array('tabclubs'=>$clubs));
    }
}
