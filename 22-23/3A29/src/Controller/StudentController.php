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

    #[Route('/listStudent', name: 'list_student')]
    public function listStudent(Request $request,StudentRepository $repository)
    {
        $students= $repository->findAll();
       // $students= $this->getDoctrine()->getRepository(StudentRepository::class)->findAll();
        $sortByMoyenne= $repository->sortByMoyenne();
       $formSearch= $this->createForm(SearchStudentType::class);
       $formSearch->handleRequest($request);
       $topStudents= $repository->topStudent();
       if($formSearch->isSubmitted()){
           $nce= $formSearch->get('nce')->getData();
           //var_dump($nce).die();
           $result= $repository->searchStudent($nce);
           return $this->renderForm("student/list.html.twig",
               array("tabStudent"=>$result,
                   "sortByMoyenne"=>$sortByMoyenne,
                   "searchForm"=>$formSearch));
       }
         return $this->renderForm("student/list.html.twig",
           array("tabStudent"=>$students,
               "sortByMoyenne"=>$sortByMoyenne,
                "searchForm"=>$formSearch,
               'topStudents'=>$topStudents));
    }
    #[Route('/addStudent', name: 'add_student')]
    public function addStudent(ManagerRegistry $doctrine)
    {
        $student= new Student();
        $student->setNce("258");
        $student->setUsername("rahma");
        $student->setMoyenne(18);
       // $em=$this->getDoctrine()->getManager();
        $em= $doctrine->getManager();
        $em->persist($student);
        $em->flush();
        return $this->redirectToRoute("list_student");
    }

    #[Route('/addForm', name: 'add2')]
    public function addForm(ManagerRegistry $doctrine,Request $request)
    {
        $student= new Student;
        $form= $this->createForm(StudentType::class,$student);
        $form->handleRequest($request) ;
        if ($form->isSubmitted()){
             $em= $doctrine->getManager();
             $em->persist($student);
             $em->flush();
             return  $this->redirectToRoute("list_student");
         }
        return $this->renderForm("student/add.html.twig",array("formStudent"=>$form));
    }

    #[Route('/updateForm/{nce}', name: 'update')]
    public function  updateForm($nce,StudentRepository $repository,ManagerRegistry $doctrine,Request $request)
    {
        $student= $repository->find($nce);
        $form= $this->createForm(StudentType::class,$student);
        $form->handleRequest($request) ;
        if ($form->isSubmitted()){
            $em= $doctrine->getManager();
            $em->flush();
            return  $this->redirectToRoute("list_student");
        }
        return $this->renderForm("student/update.html.twig",array("formStudent"=>$form));
    }

    #[Route('/removeForm/{nce}', name: 'remove')]

    public function removeStudent(ManagerRegistry $doctrine,$nce,StudentRepository $repository)
    {
        $student= $repository->find($nce);
        $em = $doctrine->getManager();
        $em->remove($student);
        $em->flush();
        return  $this->redirectToRoute("list_student");
    }

    #[Route('/addStudent2', name: 'addStudent2')]
    public function addStudent2(StudentRepository $repository,Request $request,ManagerRegistry $doctrine)
    {
        $student= new Student();
        $form= $this->createForm(StudentType::class,$student);
        $form->handleRequest($request) ;
        if ($form->isSubmitted()&&$form->isValid()){
            $repository->add($student,true);
            return  $this->redirectToRoute("list_student");
        }
        return $this->renderForm("student/add2.html.twig",array("studentForm"=>$form));
    }

    #[Route('/deleteC/{id}', name: 'deleteC')]
    public function deleteClassroom($id,ManagerRegistry $doctrine,ClassroomRepository $repository)
    {
        $classroom= $repository->find($id);
        $em= $doctrine->getManager();
        $em->remove($classroom);
        $em->flush();
        return new Response("hello");
    }


    #[Route('/showClassroom/{id}', name: 'showClassroom')]
    public function showClassroom(StudentRepository $repo,$id,ClassroomRepository $repository)
    {
        $classroom = $repository->find($id);
       $students= $repo->getStudentsByClassroom($id);
        return $this->render("student/showClassroom.html.twig",array(
            'showClassroom'=>$classroom,
            'tabStudent'=>$students
        ));
    }
}
