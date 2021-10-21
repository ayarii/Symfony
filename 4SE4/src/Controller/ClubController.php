<?php

namespace App\Controller;

use App\Entity\Club;
use App\Form\ClubType;
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
     *@Route("/hello",name="helloAction")
     */

    public  function firstAction(){
        return new Response("Bonjour ");
     }

    /**
     *@Route("/test/{var}",name="secondAction")
     */
     public function secondFunction($var){
        return new Response("Hello".$var);
     }


    /**
     * @Route("/listClub",name="list")
     */
    public function listClub()
    {
        $clubs= $this->getDoctrine()->getRepository(Club::class)->findAll();
        return $this->render("club/list.html.twig",array("tabClub"=>$clubs));
     }

    /**
     * @Route("/addClub",name="addAction")
     */
    public function add(Request $request)
    {
        $club = new Club();
        $form= $this->createForm(ClubType::class,$club);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $this->getDoctrine()->getManager();
            $em->persist($club);
            $em->flush();
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute("list");
        }
        return $this->render("club/add.html.twig",array("formulaire"=>$form->createView()));
     }

    /**
     * @Route("/updateClub/{id}",name="updateAction")
     */
    public function update(Request $request,$id)
    {
        $club = $this->getDoctrine()->getRepository(Club::class)->find($id);
        $form= $this->createForm(ClubType::class,$club);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("list");
        }
        return $this->render("club/update.html.twig",array("formulaire"=>$form->createView()));
    }

    /**
     * @Route("/removeClub/{id}",name="removeAction")
     */
    public function delete($id)
    {
        $club= $this->getDoctrine()->getRepository(Club::class)
            ->find($id);
        $em= $this->getDoctrine()->getManager();
        $em->remove($club);
        $em->flush();
        return $this->redirectToRoute("list");
    }
}
