<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormationEspritController extends AbstractController
{
    /**
     * @Route("/formation/esprit", name="formation_esprit")
     */
    public function index(): Response
    {
        return $this->render('formation_esprit/index.html.twig', [
            'controller_name' => 'FormationEspritController',
        ]);
    }
     //reponse simple

    /**
     * @Route("/show/{f}",name="formation")
     */
    public function showFormation($f){
        return new Response("Formation".$f);
    }

    /**
     * @Route("/list",name="formationList")
     */
    public function listFormation()
    {
        $formations = array(
            array('ref' => 'form147', 'Titre' => 'Formation Symfony
4','Description'=>'formation pratique',
                'date_debut'=>'12/06/2020', 'date_fin'=>'19/06/2020',
                'nb_participants'=>19),
            array('ref'=>'form177','Titre'=>'Formation SOA' ,
                'Description'=>'formation
theorique','date_debut'=>'03/12/2020','date_fin'=>'10/12/2020',
                'nb_participants'=>0),
            array('ref'=>'form177','Titre'=>'Formation SOA' ,
                'Description'=>'formation
theorique','date_debut'=>'03/12/2020','date_fin'=>'10/12/2020',
                'nb_participants'=>0),
            array('ref'=>'form178','Titre'=>'Formation Angular' ,
                'Description'=>'formation
theorique','date_debut'=>'10/06/2020','date_fin'=>'14/06/2020',
                'nb_participants'=>12));
        $var1= 100;
        $var2 ="asma";
        return $this->render("formation_esprit/list.html.twig",array("x"=>$var1,"y"=>$var2,"tabFormation"=>$formations));
    }


    /**
     * @Route("/contactAction",name="contact")
     */
    public function contact(){
        return $this->render("formation_esprit/contact.html.twig");
    }
}
