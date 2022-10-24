<?php

namespace App\Controller;

use App\Entity\Student;
use App\Form\SearchStudentType;
use App\Form\StudentType;
use App\Repository\ClassroomRepository;
use App\Repository\StudentRepository;
use Symfony\Bridge\Doctrine\ManagerRegistry;
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

    #[Route('/addstudent', name: 'app_addstudent')]
    public function addStudent(\Doctrine\Persistence\ManagerRegistry $doctrine,Request $request)
    {
        $student= new Student();
        $form= $this->createForm(StudentType::class,$student);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em = $doctrine->getManager();
            $em->persist($student);
            $em->flush();
            return  $this->redirectToRoute("app_addstudent");
        }
        return $this->renderForm("student/add.html.twig",
            array("formStudent"=>$form));
    }

    #[Route('/liststudent', name: 'app_liststudent')]
    public function listStudent(StudentRepository $repository,Request $request)
    {
        $students= $repository->findAll();
        $studentsByNce=$repository->getStudentsOrdredByNCE();
        $formSearch= $this->createForm(SearchStudentType::class);
        $formSearch->handleRequest($request) ;
        $topStudents= $repository->topStudent();
        if($formSearch->isSubmitted()){
             $nce=$formSearch->getData();
             $result= $repository->findStudentByNCE($nce);
             return $this->renderForm("student/list.html.twig",
                 array("students"=>$result,"byNCE"=>$studentsByNce,"searchForm"=>$formSearch));
         }
        return $this->renderForm("student/list.html.twig",
       array("students"=>$students,
                "byNCE"=>$studentsByNce,
                "searchForm"=>$formSearch,
                 "topStudents"=>$topStudents));
    }

    #[Route('/showclassroom/{id}', name: 'app_showStudent')]
    public function showClassroom(StudentRepository  $rep,ClassroomRepository  $repository ,$id)
    {
     $classroom= $repository->find($id);
     $students= $rep->getStudentsByClassroom($id);
     return $this->render("student/showClassroom.html.twig",array(
         "classrom"=>$classroom,
         'students'=>$students));
    }
}
