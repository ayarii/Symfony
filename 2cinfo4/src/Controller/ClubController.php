<?php

namespace App\Controller;

use App\Entity\Club;
use App\Form\ClubType;
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
     * @Route("/listClub", name="listClub")
     */
    public function listClub(){
        $clubs=$this->getDoctrine()->getRepository(Club::class)->findAll();
         return $this->render("club/list.html.twig",array('tabClub'=>$clubs));
    }

    /**
     * @Route("/showClub/{id}", name="showClub")
     */
    public function showClub($id){
        $club= $this->getDoctrine()->getRepository(Club::class)->find($id);
        return $this->render("club/show.html.twig",array('club'=>$club));
    }

    /**
     * @Route("/deleteClub/{id}", name="removeClub")
     */
    public function deleteClub($id)
    {
        $club= $this->getDoctrine()->getRepository(Club::class)->find($id);
        $em= $this->getDoctrine()->getManager();
        $this->getDoctrine()->getManager()->remove($club);
         $em->flush();
         return $this->redirectToRoute("listClub");
    }

    /**
     * @Route("/addClub",name="ajoutClub")
     */
    public function addClub(Request $request)
    {
        $club= new Club();
        $form = $this->createForm(ClubType::class,$club);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $this->getDoctrine()->getManager();
            $em->persist($club);
            $em->flush();
            return $this->redirectToRoute("listClub");
        }
        return $this->render("club/add.html.twig",array('formulaireClub'=>$form->createView()));
   }

    /**
     * @Route("/updateClub/{id}",name="editClub")
     */
    public function updateClub(ClubRepository $repository,$id, Request $request){
        $club= $repository->find($id);
        $form= $this->createForm(ClubType::class,$club);
       $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("listClub");
        }
        return $this->render("club/update.html.twig",array('formUpdate'=>$form->createView()));
    }

}
