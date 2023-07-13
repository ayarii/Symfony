<?php

namespace App\Controller;

use App\Entity\Student;
use App\Form\StudentType;
use App\Repository\StudentRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    #[Route('/student', name: 'app_student')]
    public function index(): Response
    {
        return $this->render('student/index.html.twig', [
            'controller_name' => 'StudentController',
        ]);
    }

    #[Route('/liststudent', name: 'app_liststudent')]
    public function listStudent(StudentRepository $repository){
        $students= $repository->findAll();
        return $this->
        render("student/list.html.twig",array('tabStudent'=>$students));
    }

    #[Route('/addstudent', name: 'app_addstudent')]

    public function addStudent(ManagerRegistry $doctrine,Request $request)
    {
        $student= new Student();
         $form=$this->createForm(StudentType::class,$student);
       $form->handleRequest($request);
         if($form->isSubmitted()){
         //    $em= $this->getDoctrine()->getManager();
             $em= $doctrine->getManager();
             $em->persist($student);
             $em->flush();
           #  return  new Response("success");
             return  $this->redirectToRoute("app_liststudent");
         }
        return $this->
       // render("student/add.html.twig",array("formStudent"=>$form->createView()));
         renderForm("student/add.html.twig",array("formStudent"=>$form));

    }
}
