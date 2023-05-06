<?php

namespace App\Controller;

use App\Repository\ClassroomRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
}
