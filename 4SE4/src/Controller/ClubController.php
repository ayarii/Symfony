<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
}
