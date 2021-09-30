<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClubEspritController extends AbstractController
{
    /**
     * @Route("/club/esprit", name="club_esprit")
     */
    public function index(): Response
    {
        return $this->render('club_esprit/index.html.twig', [
            'controller_name' => 'ClubEspritController',
        ]);
    }


    /**
     * @Route("/club/{var}",name="getClub")
     */
    public function getName($var)
    {
     //   return new Response("Club de sport à ".$var);
        $x=10;
        return $this->render("club_esprit/club.html.twig", array("ecole"=>$var,"varx"=>$x)
        );
    }
}
