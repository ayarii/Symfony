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

    #[Route('/studentList/{var}', name: 'list_student')]
    public function listStudent($var)
    {
        return new Response("Bonsoir".$var);
    }

    #[Route('/showStudent/{var}', name: 'show_student')]
    public function showStudent($var)
    {
        $x=20;
        $formations = array(
            array('ref' => 'f1', 'Titre' => 'Formation Symfony
4','Description'=>'formation pratique','nb_participants'=>19) ,
            array('ref'=>'f2','Titre'=>'Formation SOA' ,
                'Description'=>'formation theorique','nb_participants'=>0),
            array('ref'=>'f3','Titre'=>'Formation Angular' ,
                'Description'=>'formation theorique','nb_participants'=>12));
        return $this->render
        ("student/show.html.twig",
            array("variable1"=>$var,"variable2"=>$x,
               'tabFormations'=>$formations));
    }

    #[Route('/addStudent', name: 'add_student')]
    public function addStudent(Request $request,ManagerRegistry $doctrine)
    {
        $student= new Student();
        $form= $this->createForm(StudentType::class,$student);
        $form->handleRequest($request);
        if($form->isSubmitted()){
           $em= $doctrine->getManager();
           $em->persist($student);
           $em->flush();
           return $this->redirectToRoute("add_student");
       }
        return $this->render("student/add.html.twig",
            array('formStudent'=>$form->createView()));

    }

    #[Route('/listStudents', name: 'list_student')]
    public function listStudents(StudentRepository $repository)
    {
        //la liste des étudiants
       // $students= $repository->findAll();
        // la liste des étudiants ordonnée par Id
        $students= $repository->orderByID();
        return $this->render("student/list.html.twig",
            array("listStudents"=>$students));
    }
}
