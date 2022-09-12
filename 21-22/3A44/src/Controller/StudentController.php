<?php

namespace App\Controller;

use App\Entity\Student;
use App\Form\MaxMinType;
use App\Form\SearchStudentByAvgType;
use App\Form\SearchStudentType;
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
     * @Route("/listStudent",name="listStudent")
     */
    public function list(Request $request)
    {
        $students= $this->getDoctrine()->getRepository(Student::class)->findAll();
         $studentsByEmail= $this->getDoctrine()->getRepository(Student::class)->orderByMail();
         $formSearch= $this->createForm(SearchStudentType::class);
         $formSearch->handleRequest($request);
         if($formSearch->isSubmitted()){
             $nce= $formSearch->getData()->getNce();
             $result= $this->getDoctrine()->getRepository(Student::class)->searchStudent($nce);
             return $this->render("student/list.html.twig",array("tabStudent"=>$result,
                 "studentsByEmail"=>$studentsByEmail,'formSearch'=>$formSearch->createView()));
         }
        return $this->render("student/list.html.twig",array("tabStudent"=>$students,
            "studentsByEmail"=>$studentsByEmail,'formSearch'=>$formSearch->createView()));
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

    /**
     * @Route("/addStudent",name="studentAdd")
     */
    public function addStudent(Request $request)
    {
        $student= new Student();
        $formStudent= $this->createForm(StudentType::class,$student);
        $formStudent->handleRequest($request);
        if($formStudent->isSubmitted()){
            $em= $this->getDoctrine()->getManager();
            $em->persist($student);
            $em->flush();
            return $this->redirectToRoute("listStudent");
        }
        return $this->render("student/add.html.twig",array("formStudent"=>$formStudent->createView()));
    }


    /**
     * @Route("/updateStudent/{nce}",name="studentUpdate")
     */
    public function updateStudent(StudentRepository $s,$nce,Request $request)
    {
        $student= $s->find($nce);
        //var_dump($student).die();
        $formStudent= $this->createForm(StudentType::class,$student);
        $formStudent->handleRequest($request);
        if($formStudent->isSubmitted()){
            $em= $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("listStudent");
        }
        return $this->render("student/add.html.twig",array("formStudent"=>$formStudent->createView()));
    }

    /**
     * @Route("/searchStudentByAVG", name="searchStudentByAVG")
     */
    public function searchStudentByAVG(Request $request,StudentRepository $s){
        $students = $s->findAll();
        $studentsR= $s->findStudentDontAdmitted();
        $searchForm = $this->createForm(MaxMinType::class);
        $searchForm->handleRequest($request);
        if ($searchForm->isSubmitted()) {
            $minMoy=$searchForm['min']->getData();
            $maxMoy=$searchForm['max']->getData();
            $resultOfSearch = $s->findStudentByAVG($minMoy,$maxMoy);
            return $this->render('student/searchStudentByAVG.html.twig', [
                'students' => $resultOfSearch,
                'searchStudentByAVG' => $searchForm->createView()]);
        }
        return $this->render('student/searchStudentByAVG.html.twig', array('students' => $studentsR,'searchStudentByAVG'=>$searchForm->createView(),
            'studentsR'=>$studentsR));
    }
}
