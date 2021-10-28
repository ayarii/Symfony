<?php

namespace App\Controller;

use App\Entity\Classroom;
use App\Form\ClassroomType;
use App\Repository\ClassroomRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
     * @Route("/listClassroom",name="classroomList")
     */
    public function listClassroom()
    {
        $classrooms= $this->getDoctrine()
            ->getRepository(Classroom::class)->findAll();
         return $this->render("classroom/list.html.twig",
             array("tabClassroom"=>$classrooms));
    }
    /**
     * @Route("/addClassroom",name="classroomAdd")
     */
    public function add(Request $request)
    {
        $classroom= new Classroom();
        $form= $this->createForm(ClassroomType::class,$classroom);
         $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $this->getDoctrine()->getManager();
            $em->persist($classroom);
            $em->flush();
            return $this->redirectToRoute("classroomList");
        }
        return $this->render("classroom/add.html.twig",
            array("formClassroom"=>$form->createView()));
    }

    /**
     * @Route("/updateClassroom/{id}",name="updateClassroom")
     */
    public function update(Request $request,$id)
    {
        $classroom= $this->getDoctrine()
            ->getRepository(Classroom::class)->find($id);
        $form= $this->createForm(ClassroomType::class,$classroom);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("classroomList");
        }
        return $this->render("classroom/update.html.twig",
            array("formClassroom"=>$form->createView()));
    }

    /**
     * @Route("/removeClassroom/{id}",name="removeClassroom")
     */
    public function deleteClassroom(ClassroomRepository $c,$id,EntityManagerInterface $em)
    {

        $classroom= $c->find($id);
        $em->remove($classroom);
        $em->flush();
        return $this->redirectToRoute("classroomList");
    }
}
