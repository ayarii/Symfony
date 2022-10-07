<?php

namespace App\Controller;

use App\Entity\Club;
use App\Repository\ClubRepository;
use Doctrine\Persistence\ManagerRegistry;
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

    #[Route('/list', name: 'app_formation')]
    public function formations()
    {
        $v1= "2cinfo1";
        $v2= "S14";
        $formations = array(
           array('ref' => 'form147', 'Titre' => 'Formation Symfony
4','Description'=>'formation pratique',
                'date_debut'=>'12/06/2020', 'date_fin'=>'19/06/2020',
                'nb_participants'=>19) ,
            array('ref'=>'form177','Titre'=>'Formation SOA' ,
                'Description'=>'formation
theorique','date_debut'=>'03/12/2020','date_fin'=>'10/12/2020',
                'nb_participants'=>0),
            array('ref'=>'form178','Titre'=>'Formation Angular' ,
                'Description'=>'formation
theorique','date_debut'=>'10/06/2020','date_fin'=>'14/06/2020',
                'nb_participants'=>12));
        return $this->render("club/list.html.twig",array("classe"=>$v1,"salle"=>$v2,"tabFormation"=>$formations));
    }

    #[Route('/reservation', name: 'app_reservation')]

    public function reservation(){
        return $this->render("club/reservation.html.twig");
    }

    #[Route('/clubs', name: 'app_clubs')]
    public function listClub(ClubRepository  $x)
    {
        //$repository=$this->getDoctrine()->getRepository(ClubRepository::class)->findAll();
        $clubs= $x->findAll();
       return $this->render("club/clubs.html.twig",
           array("tabClub"=>$clubs));
    }

    #[Route('/addClub', name: 'add_club')]
    public function addClub(ManagerRegistry $doctrine)
    {
        $club= new Club();
        $club->setName("club1");
        $club->setDescription("test");
        $em= $doctrine->getManager();
        $em->persist($club);
        $em->flush();
        return new Response("succes");
    }

    #[Route('/updateClub/{id}', name: 'update_club')]
    public function update(ClubRepository $repository,$id,ManagerRegistry
    $doctrine)
    {
        $club= $repository->find($id);
        $club->setName("clubUpdate");
        $club->setDescription("update description");
        $em = $doctrine->getManager();
        $em->flush();
        return $this->redirectToRoute("app_clubs");
    }
    #[Route('/removeClub/{id}', name: 'remove_club')]
    public function remove(ClubRepository $repository,$id,ManagerRegistry $doctrine)
    {
        $club= $repository->find($id);
        $em= $doctrine->getManager();
        $em->remove($club);
        $em->flush();
        return $this->redirectToRoute("app_clubs");



    }
}
