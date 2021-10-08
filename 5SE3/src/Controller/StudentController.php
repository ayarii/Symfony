<?php

namespace App\Controller;

use App\Entity\Classroom;
use App\Entity\Student;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    /**
     * @Route("/student", name="student")
     */
    public function index(): Response
    {
        return $this->render('student/index.html.twig', [
            'controller_name' => 'StudentController',
        ]);
    }

    /**
     * @Route("/listStudent",name="list")
     */
    public function listStudent(){

        $students= $this->getDoctrine()->getRepository(Student::class)->findAll();
        return $this->render("student/list.html.twig",array("tabStudents"=>$students));
    }

    /**
     * @Route("/show/{id}",name="showStudent")
     */
    public function showStudent($id){

        $student= $this->getDoctrine()->getRepository(Student::class)->find($id);
        return $this->render("student/show.html.twig",array("student"=>$student));
    }
}
