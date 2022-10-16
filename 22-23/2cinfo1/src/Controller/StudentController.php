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

    #[Route('/addstudent', name: 'add_student')]
    public function addStudent(Request $request,ManagerRegistry $doctrine)
    {
        $student= new Student();
        $form = $this->createForm(StudentType::class,$student);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $doctrine->getManager();
            $em->persist($student);
            $em->flush();
            return  $this->redirectToRoute("add_student");
        }
        return $this->renderForm("student/add.html.twig",
            array("formStudent"=>$form));
    }

    #[Route('/liststudent', name: 'list_student')]
    public function listStudent(StudentRepository $repository)
    {
        $students= $repository->orderByID();
        $enabledStudent= $repository->findEnabledStudent();
        return $this->render("student/list.html.twig",array("listStudent"=>$students,"enabledStudent"=>$enabledStudent));
    }
}
