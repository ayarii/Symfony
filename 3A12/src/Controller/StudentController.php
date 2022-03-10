<?php

namespace App\Controller;

use App\Entity\Student;
use App\Form\SearchFormType;
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
     * @Route("/listStudent", name="listStudent")
     */
    public function list(Request $request)
    {
        $students= $this->getDoctrine()->getRepository(Student::class)->findAll();
        $studentOrderByMail=$this->getDoctrine()->getRepository(Student::class)->orderByMail();
        $findExcellentStudent=$this->getDoctrine()->getRepository(Student::class)->findExcellentStudent();
       $formSearch= $this->createForm(SearchFormType::class);
       $formSearch->handleRequest($request);
       if($formSearch->isSubmitted()){
           $username= $formSearch->getData();
           $results = $this->getDoctrine()->getRepository(Student::class)->searchStudent($username);
           return $this->render("student/list.html.twig",
               array("searchForm"=>$formSearch->createView(),
                   "students"=>$results,'studentOrderByMail'=>$studentOrderByMail,'findExcellentStudent'=>$findExcellentStudent));
       }
        return $this->render("student/list.html.twig",
            array("searchForm"=>$formSearch->createView(),
                "students"=>$students,'studentOrderByMail'=>$studentOrderByMail,'findExcellentStudent'=>$findExcellentStudent));
    }
    /**
     * @Route("/addStudent",name="studentAdd")
     */
    public function addStudent(Request $request )
    {
        $student= new Student();
        $form= $this->createForm(StudentType::class,$student);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $this->getDoctrine()->getManager();
            $em->persist($student);
            $em->flush();
            return $this->redirectToRoute("listStudent");
        }
        return $this->render("student/add.html.twig",array("formStudent"=>$form->createView()));
    }

    /**
     * @Route("/updateStudent/{nce}",name="studentUpdate")
     */
    public function updateStudent($nce,Request $request,StudentRepository $repository )
    {
        $student= $repository->find($nce);
        $form= $this->createForm(StudentType::class,$student);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("studentAdd");
        }
        return $this->render("student/update.html.twig",
            array("formStudent"=>$form->createView(),
                'student'=>$student));
    }
}
