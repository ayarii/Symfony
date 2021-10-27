<?php

namespace App\Controller;

use App\Entity\Student;
use App\Form\SearchStudentByAvgType;
use App\Form\SearchStudentType;
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
    public function addStudent(EntityManagerInterface $em,Request $request)
    {
        $student= new Student();
        $formStudent= $this->createForm(StudentType::class,$student);
        $formStudent->handleRequest($request);
         if ($formStudent->isSubmitted()){
             $em->persist($student);
             $em->flush();
             return $this->redirectToRoute("listStudent");
         }
        return $this->render("student/add.html.twig",array('formStudent'=>$formStudent->createView()));
    }

    /**
     * @Route("/listStudent",name="listStudent")
     */
    public function listStudent(StudentRepository  $s,Request $request){

        $students= $s->findAll();
        $studentsByEmail= $s->orderByMail();
        $formSearch = $this->createForm(SearchStudentType::class);
        $formSearch->handleRequest($request);
        if($formSearch->isSubmitted()){
            $nce= $formSearch->getData();
           // var_dump($nce).die();
           $studentSearch= $s->searchStudent($nce);
            return $this->render("student/list.html.twig",
                array("listStudent"=>$studentSearch,"studentsByEmail"=>$studentsByEmail,"search"=>$formSearch->createView()));
        }
        return $this->render("student/list.html.twig",
            array("listStudent"=>$students,"studentsByEmail"=>$studentsByEmail,"search"=>$formSearch->createView()));
    }

    /**
     * @Route("/searchStudentByAVG", name="searchStudentByAVG")
     */
    public function searchStudentByAVG(Request $request,StudentRepository $s){
        $students = $s->findAll();
        $studentsR= $s->findStudentDontAdmitted();
        $searchForm = $this->createForm(SearchStudentByAvgType::class);
        $searchForm->handleRequest($request);
        if ($searchForm->isSubmitted()) {
            $minMoy=$searchForm['min']->getData();
            $maxMoy=$searchForm['max']->getData();
            $resultOfSearch = $s->findStudentByAVG($minMoy,$maxMoy);
            return $this->render('student/searchStudentByAVG.html.twig', [
                'students' => $resultOfSearch,
                'searchStudentByAVG' => $searchForm->createView()]);
        }
        return $this->render('student/searchStudentByAVG.html.twig', array('students' => $students,'searchStudentByAVG'=>$searchForm->createView(),
            'studentsR'=>$studentsR));
    }
}
