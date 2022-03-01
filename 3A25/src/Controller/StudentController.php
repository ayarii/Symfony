<?php

namespace App\Controller;

use App\Entity\Student;
use App\Form\StudentType;
use App\Repository\StudentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
     * @Route("/listStudent", name="students")
     */
    public function listStudent(StudentRepository $repository){
        $students= $repository->findAll();
        return $this->render("student/list.html.twig",
            array('students'=>$students));
    }

    /**
     * @Route("/addStudent",name="studentAdd")
     */
    public function addStudent(Request $request)
    {
        $student= new Student();
        $form= $this->createForm(StudentType::class,$student);
         $form->handleRequest($request);
        if($form->isSubmitted()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($student);
            $em->flush();
            return $this->redirectToRoute("studentAdd");
        }
        return $this->render("student/add.html.twig",array('formStudent'=>$form->createView()));
    }
}
