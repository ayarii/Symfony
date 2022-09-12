<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    /**
     * @Route("/first", name="first")
     */
    public function index(): Response
    {
        return $this->render('first/index.html.twig', [
            'controller_name' => 'FirstController',
        ]);
    }

    /**
     * @Route("/myFirstFunction/{para}",name="firstAction")
     */
    public function firstFunction($para){
        return new Response("Bonjour".$para);
    }

    /**
     * @Route("/secondFunction",name="second")
     */
    public function secondFunction()
    {
        $para=20;
        $y="hello";
        return $this->render("first/second.html.twig",array("x"=>$para,"para2"=>$y));
    }





}
