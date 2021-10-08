<?php

namespace App\Controller;

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
    public function list()
    {
        $students= $this->getDoctrine()->getRepository(Student::class)->findAll();
        return $this->render("student/list.html.twig",array("tabStudent"=>$students));
    }


    /**
     * @Route("/showStudent{nce}",name="show")
     */
    public function show($nce){
        $student= $this->getDoctrine()->getRepository(Student::class)->find($nce);
        return $this->render("student/show.html.twig",array("student"=>$student));
    }

    /**
     * @Route("/removeStudent{nce}",name="remove")
     */
    public function delete($nce){
        $student= $this->getDoctrine()->getRepository(Student::class)->find($nce);
        $em= $this->getDoctrine()->getManager();
        $em->remove($student);
        $em->flush();
        return $this->redirectToRoute("list");
    }
}
