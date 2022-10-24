<?php

namespace App\Controller;

use App\Entity\Student;
use App\Form\SearchStudentType;
use App\Form\StudentType;
use App\Repository\ClassroomRepository;
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
    #[Route('/liststudent', name: 'app_liststudent')]
    public function listStudent(Request  $request,StudentRepository  $repository)
    {
        $students= $repository->findAll();
        $studentsByMoyenne= $repository->getStudentsOrdredByMoyenne();
         $formSearch= $this->createForm(SearchStudentType::class);
        $formSearch->handleRequest($request);
         $topStudents= $repository->topStudent();
         if($formSearch->isSubmitted()){
             $username= $formSearch->get('username')->getData();
             $results= $repository->searchStudent($username);
             return $this->renderForm("student/listStudent.html.twig",
                 array('tabStudents'=>$results,
                     "StudentsByMoyenne"=>$studentsByMoyenne,
                     'searchStudent'=>$formSearch));
         }
         return $this->renderForm("student/listStudent.html.twig",
            array("tabStudents"=>$students,
                     "StudentsByMoyenne"=>$studentsByMoyenne,
                     "searchStudent"=>$formSearch,
                       'topStudents'=>$topStudents));
    }

    #[Route('/showClassroom/{id}', name: 'app_showClassroom')]
    public function showClassroom(StudentRepository $repo,ClassroomRepository $repository,$id)
    {
        $classroom= $repository->find($id);
        $students=  $repo->getStudentsByClassroom($id);
        return $this->render('student/showclassroom.html.twig',
        array('classroom'=>$classroom,
            'tabStudents'=>$students));
    }
}
