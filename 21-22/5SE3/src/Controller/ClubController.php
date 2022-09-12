<?php

namespace App\Controller;

use App\Entity\Club;
use App\Form\ClubType;
use App\Form\SearchClubType;
use App\Repository\ClubRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClubController extends AbstractController
{
    /**
     * @Route("/club", name="club")
     */
    public function index(): Response
    {
        return $this->render('club/index.html.twig', [
            'controller_name' => 'ClubController',
        ]);
    }

    /**
     * @Route("/addClub",name ="ClubAdd")
     */
    public function addClub( Request $request)
    {
        $club= new Club();
        $form= $this->createForm(ClubType::class,$club);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $this->getDoctrine()->getManager();
            $em->persist($club);
            $em->flush();
            return $this->redirectToRoute("ClubAdd");
        }
        return $this->render("club/add.html.twig",array('formClub'=>$form->createView()));
    }

    /**
     * @Route("/listClub",name ="listClub")
     */
    public function listClub(ClubRepository $repository,Request $request){
       # $clubs= $this->getDoctrine()->getRepository(Club::class)->findAll();
        $clubs= $repository->findAll();
        $clubOrderByName= $repository->listClubOrderByName();
        $form= $this->createForm(SearchClubType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $name= $form->getData()->getName();
            $result= $repository->searchClub($name);
            return $this->render("club/list.html.twig",array("listClub"=>$result,"orderByName"=>$clubOrderByName,"searchForm"=>$form->createView()));
        }
        return $this->render("club/list.html.twig",array("listClub"=>$clubs,"orderByName"=>$clubOrderByName,"searchForm"=>$form->createView()));
    }
}
