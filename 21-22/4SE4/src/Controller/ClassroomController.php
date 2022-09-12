<?php

namespace App\Controller;

use App\Entity\Classroom;
use App\Repository\ClassroomRepository;
use App\Repository\StudentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClassroomController extends AbstractController
{
    /**
     * @Route("/classroom", name="classroom")
     */
    public function index(): Response
    {
        return $this->render('classroom/index.html.twig', [
            'controller_name' => 'ClassroomController',
        ]);
    }

    /**
     * @Route("/list",name="classroomList")
     */
    public function listClassroom(){
        $classrooms=$this->getDoctrine()->getRepository(Classroom::class)->findAll();
        return $this->render("classroom/list.html.twig",array("tabClass"=>$classrooms));
    }

    /**
     * @Route("/show/{id}",name="classroomShow")
     */
    public function show($id){
        $oneclass= $this->getDoctrine()->getRepository(Classroom::class)->find($id);
        return $this->render("classroom/show.html.twig",array("one"=>$oneclass));
    }

    /**
     * @Route("/listStudentByClassroom/{id}",name="listStudentByClassroom")
     */
    public function listStudentByClassroom(StudentRepository $student,$id){
        $students= $student->listStudentByClass($id);
        return $this->render("classroom/listStudentByClassroom.html.twig",array('students'=>$students));
    }
}
