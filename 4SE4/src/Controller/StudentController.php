<?php

namespace App\Controller;

use App\Entity\Student;
use App\Form\StudentType;
use App\Repository\StudentRepository;
use Doctrine\ORM\EntityManagerInterface;
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
     * @Route("/addStudent",name="addStudent")
     */
    public function add(EntityManagerInterface $em,Request $request){
        $student= new Student();
        $form= $this->createForm(StudentType::class,$student);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em->persist($student);
            $em->flush();
            return $this->redirectToRoute("listStudent");
        }
        return $this->render("student/add.html.twig",array("formStudent"=>$form->createView()));
    }

    /**
     * @Route("/listStudent",name="listStudent")
     */
    public function listStudent(StudentRepository $student)
    {
        $students= $student->findAll();
        return $this->render("student/list.html.twig",array("students"=>$students));
    }
}
