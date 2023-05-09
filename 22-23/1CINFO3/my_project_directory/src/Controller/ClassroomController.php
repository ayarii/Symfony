<?php

namespace App\Controller;

use App\Entity\Classroom;
use App\Form\ClassroomType;
use App\Repository\ClassroomRepository;
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

    #[Route('/listclassroom', name: 'app_listclassroom')]
    public function listClassroom(ClassroomRepository $repository )
    {
        $classrooms= $repository->findAll();
        return $this->render("classroom/list.html.twig",
        array("tabClassroom"=>$classrooms));
    }

    #[Route('/showclassroom/{id}', name: 'app_showclassroom')]
    public function showClassroom(ClassroomRepository  $repository,$id)
    {
        $classroom = $repository->find($id);
        return $this->render("classroom/show.html.twig",array(
        'classroom'=>$classroom));
    }

    #[Route('/deleteclassroom/{id}', name: 'app_deleteclassroom')]
    public function deleteClassroom(ManagerRegistry $doctrine,ClassroomRepository $repository,$id)
    {
        $classroom= $repository->find($id);
      #  $em= $this->getDoctrine()->getManager();
        $em=$doctrine->getManager();
        $em->remove($classroom);
        $em->flush();
        return $this->redirectToRoute("app_listclassroom");
    }

    #[Route('/addclassroom', name: 'app_addclassroom')]
    public function addClassroom(ManagerRegistry $doctrine,Request $request)
    {
     /*  1ère méthode ajout statique
      $classroom= new Classroom();
        $classroom->setTitleClassroom("4twin6");
        $classroom->setDescription("description");
        $classroom->setNbrStudent("10");
        $em= $doctrine->getManager();
        $em->persist($classroom);
        $em->flush();
        return $this->redirectToRoute("app_listclassroom");*/
       //2ème méthode (ajout avec formulaire)
        $classroom= new Classroom();
        $formClassroom= $this->
        createForm(ClassroomType::class,$classroom);
        $formClassroom->handleRequest($request);
        if($formClassroom->isSubmitted() ){
            $em= $doctrine->getManager();
            $em->persist($classroom);
            $em->flush();
            return $this->redirectToRoute("app_listclassroom");
        }
        return $this->render("classroom/add.html.twig",
            array("formlaireClassroom"=>$formClassroom->createView()));


    }


    #[Route('/updateclassroom/{id}', name: 'app_updateclassroom')]
    public function updateClassroom(ClassroomRepository $repository,$id,ManagerRegistry $doctrine,Request $request)
    {
        $classroom= $repository->find($id);
        $formClassroom= $this->
        createForm(ClassroomType::class,$classroom);
        $formClassroom->handleRequest($request);
        if($formClassroom->isSubmitted() ){
            $em= $doctrine->getManager();
            $em->flush();
            return $this->redirectToRoute("app_listclassroom");
        }
        return $this->render("classroom/update.html.twig",
            array("formlaireClassroom"=>$formClassroom->createView()));


    }
}
