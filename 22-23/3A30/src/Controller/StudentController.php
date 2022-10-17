<?php

namespace App\Controller;

use App\Entity\Student;
use App\Form\StudentType;
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

    #[Route('/addStudent', name: 'app_addstudent')]
    public function addStudent(Request $request,ManagerRegistry $doctrine)
    {
        $student= new Student();
        $form= $this->createForm(StudentType::class,$student);
        $form->handleRequest($request);
        if ($form->isSubmitted()){
            $em= $doctrine->getManager();
            $em->persist($student);
            $em->flush();
            return  $this->redirectToRoute("app_addstudent");
        }
        return $this->renderForm("student/add.html.twig",array("formStudent"=>$form));

    }
}
