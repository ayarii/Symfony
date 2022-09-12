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
     * @Route("/listClassroom", name="listClassroom")
     */
    public function list()
    {
        $classrooms= $this->getDoctrine()->getRepository(Classroom::class)->findAll();
        return $this->render("classroom/list.html.twig",array("tabclass"=>$classrooms));
    }

    /**
     * @Route("/deleteClassroom/{id}", name="suppClassroom")
     */
    public function delete($id)
    {
        $classroom= $this->getDoctrine()->getRepository(Classroom::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($classroom);
        $em->flush();
        return $this->redirectToRoute("listClassroom");
    }

    /**
     * @Route("/addClassroom", name="addClassroom")
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
            return $this->redirectToRoute("listClassroom");
        }
        return $this->render("classroom/add.html.twig",array("formClassroom"=>$form->createView()));
    }

    /**
     * @Route("/updateClassroom/{id}", name="updateClassroom")
     */
    public function update(Request $request,ClassroomRepository $repository,$id)
    {
        //$classroom= $this->getDoctrine()->getRepository(Classroom::class)->find($id)
        $classroom= $repository->find($id);
        $form= $this->createForm(ClassroomType::class,$classroom);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("listClassroom");
        }
        return $this->render("classroom/update.html.twig",array("classroom"=>$classroom,"formClassroom"=>$form->createView()));
    }

}
