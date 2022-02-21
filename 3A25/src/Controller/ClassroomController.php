<?php

namespace App\Controller;

use App\Entity\Classroom;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClassroomController extends AbstractController
{
    /**
     * @Route("/classroom", name="classroom")
     */
    public function index(): Response
    {
        return $this->render('classroom/index.html.twig', [
            'controller_name' => 'ClassroomController',
        ]);
    }

    /**
     * @Route("/listClassroom", name="classroomList")
     */
    public function listClassroom()
    {
        $classes= $this->getDoctrine()
            ->getRepository(Classroom::class)
            ->findAll();
        return $this->render("classroom/list.html.twig",array("tabClassroom"=>$classes));
    }
}
