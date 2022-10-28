<?php

namespace App\Controller;

use App\Entity\Classroom;
use App\Form\ClassroomType;
use App\Repository\ClassroomRepository;
use App\Repository\StudentRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClassroomController extends AbstractController
{
    #[Route('/classroom', name: 'app_classroom')]
    public function index(): Response
    {
        return $this->render('classroom/index.html.twig', [
            'controller_name' => 'ClassroomController',
        ]);
    }
    #[Route('/listclassroom', name: 'list_classroom')]
    public function listClassroom(ClassroomRepository  $repository)
    {
       // $classrooms= $this->getDoctrine()->getRepository(ClassroomRepository::class)->findAll();
        $classrooms= $repository->findAll();
        return $this->render("classroom/list.html.twig",array("listClassroom"=>$classrooms));
    }

    #[Route('/addclassroom', name: 'add_classroom')]
    public function addClassroom(ManagerRegistry $doctrine)
    {
        $classroom= new Classroom();
        $classroom->setName("3A32");
        $classroom->setNbrStudent("25");
         $em= $doctrine->getManager();
         $em->persist($classroom);
         $em->flush();
         return $this->redirectToRoute("list_classroom");
    }

    #[Route('/addForm', name: 'addForm_classroom')]
    public function addForm(Request $request,ManagerRegistry $doctrine)
    {
        $classroom= new Classroom();
        $form= $this->createForm(ClassroomType::class,$classroom);
        $form->handleRequest($request) ;
        if($form->isSubmitted()){
             $em = $doctrine->getManager();
             $em->persist($classroom);
             $em->flush();
             return $this->redirectToRoute("list_classroom");
         }
        return $this->renderForm("classroom/add.html.twig",array("formClass"=>$form));
    }

    #[Route('/updateForm/{id}', name: 'updateForm_classroom')]
    public function updateForm($id,ClassroomRepository $repository,Request $request,ManagerRegistry $doctrine)
    {
        $classroom= $repository->find($id);
        $form= $this->createForm(ClassroomType::class,$classroom);
        $form->handleRequest($request) ;
        if($form->isSubmitted()){
            $em = $doctrine->getManager();
            $em->flush();
            return $this->redirectToRoute("list_classroom");
        }
        return $this->renderForm("classroom/update.html.twig",array("formClass"=>$form));
    }
    #[Route('/removeForm/{id}', name: 'removeForm_classroom')]
    public function removeClassroom(ManagerRegistry $doctrine,$id,ClassroomRepository $repository)
    {
        $classroom= $repository->find($id);
        $em= $doctrine->getManager();
        $em->remove($classroom);
        $em->flush();
        return $this->redirectToRoute("list_classroom");
    }


    #[Route('/show/{id}', name: 'show_classroom')]
    public function showClassroom(StudentRepository $repo,$id,ClassroomRepository $repository)
    {
        $classroom = $repository->find($id);
        $students= $repo->getStudentsByClassroom($id);
        return $this->render("classroom/show.html.twig",
        array('classroom'=>$classroom,
            'studentsByClassroom'=>$students)
        );

    }
}
