<?php

namespace App\Controller;

use App\Entity\Classroom;
use App\Form\ClassroomType;
use App\Repository\ClassroomRepository;
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
     * @Route("/listClassroom", name="classroomList")
     */
    public function listClassroom()
    {
        $classes= $this->getDoctrine()
            ->getRepository(Classroom::class)
            ->findAll();
        return $this->render("classroom/list.html.twig",array("tabClassroom"=>$classes));
    }


    /**
     * @Route("/removeClassroom/{id}",name="deleteClassroom")
     */
    public function deleteClassroom($id)
    {
        $classroom= $this->getDoctrine()->getRepository(Classroom::class)->find($id);
         $em=$this->getDoctrine()->getManager();
         $em->remove($classroom);
         $em->flush();
          return $this->redirectToRoute("classroomList");
    }

    /**
     * @Route("/addClassroom",name="addClassroom")
     */
    public function addClassroom( Request $request)
    {
        $classroom= new Classroom();
        $form= $this->createForm(ClassroomType::class,$classroom);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($classroom);
            $em->flush();
            return $this->redirectToRoute("classroomList");
        }
        return $this->render("classroom/add.html.twig",array("formulaireClassroom"=>$form->createView()));
    }

    /**
     * @Route("/updateClassroom/{id}", name="classroomUpdate")
     */
    public function updateClassroom( Request $request,ClassroomRepository $repository,$id)
    {
        $classroom= $repository->find($id);
     //   $classroom=  $this->getDoctrine()->getRepository(Classroom::class)->find($id);
        $form= $this->createForm(ClassroomType::class,$classroom);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("classroomList");
        }
        return $this->render("classroom/update.html.twig",array("classroom"=>$classroom,"formulaireClassroom"=>$form->createView()));
    }
}
