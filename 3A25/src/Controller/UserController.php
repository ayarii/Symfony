<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }


    /**
     * @Route("/listUser/{var}",name="users")
     */
    public function listUser($var)
    {
        return new Response("List Users".$var);
    }


    /**
     * @Route("/showUser",name="usershow")
     */
    public function showUser()
    {
        return $this->render("user/show.html.twig");
    }
}
