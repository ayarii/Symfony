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
     * @Route("/list/{var}", name="listUsers")
     */
    public function listUsers($var)
    {
        // return new Response("La liste des étudiants");
        return $this->render("user/list.html.twig", array('class' => $var));
    }

    /**
     * @Route("/listFormation", name="formations")
     */
    public function listFormation()
    {
        $formations = array(
            array('ref' => 'form147', 'Titre' => 'Formation Symfony
4', 'Description' => 'formation pratique',
                'date_debut' => '12/06/2020', 'date_fin' => '19/06/2020',
                'nb_participants' => 19),
            array('ref' => 'form177', 'Titre' => 'Formation SOA',
                'Description' => 'formation
theorique', 'date_debut' => '03/12/2020', 'date_fin' => '10/12/2020',
                'nb_participants' => 0),
            array('ref' => 'form178', 'Titre' => 'Formation Angular',
                'Description' => 'formation
theorique', 'date_debut' => '10/06/2020', 'date_fin' => '14/06/2020',
                'nb_participants' => 12));
        return $this->render("user/listFormation.html.twig", array('tabFormation' => $formations));
    }
}
