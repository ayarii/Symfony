<?php

namespace App\Controller;

use App\Entity\Classroom;
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
     * @Route("/listStudent",name="listStudent")
     */
    public function listStudent(){

        $students= $this->getDoctrine()->getRepository(Student::class)->findAll();
        return $this->render("student/list.html.twig",array("tabStudents"=>$students));
    }

    /**
     * @Route("/show/{id}",name="showStudent")
     */
    public function showStudent($id){

        $student= $this->getDoctrine()->getRepository(Student::class)->find($id);
        return $this->render("student/show.html.twig",array("student"=>$student));
    }

    /**
     * @Route("/addStudent", name="addStudent")
     */
    public function addStudent(Request $request)
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
     * @Route("/updateStudent/{nce}", name="updateStudent")
     */
    public function updateStudent(StudentRepository $repository,Request $request,$nce,EntityManagerInterface $em)
    {
        //$student= $this->getDoctrine()->getRepository(Student::class)->find($id);
        $student= $repository->find($nce);
        $form= $this->createForm(StudentType::class,$student);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            //$em= $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("listStudent");
        }
        return $this->render("student/update.html.twig",array("formStudent"=>$form->createView()));
    }

    /**
     * @Route("/removeStudent/{nce}", name="removeStudent")
     */
    public function deleteStudent(StudentRepository $repository,$nce,EntityManagerInterface $em)
    {
        $student= $repository->find($nce);
        $em->remove($student);
        $em->flush();
        return $this->redirectToRoute("listStudent");


    }
}
