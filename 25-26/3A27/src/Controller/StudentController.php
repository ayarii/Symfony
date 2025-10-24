<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class StudentController extends AbstractController
{
    #[Route('/student', name: 'app_student')]
    public function index(): Response
    {
        return $this->render('student/index.html.twig', [
            'controller_name' => 'StudentController',
        ]);
    }



    #[Route('/list', name: 'app_list')]
    public function list()
    {
        return new Response("Salut 3A28");
    }

    #[Route('/listStudent/{var}', name: 'app_listStudent')]
    public function listStudent($var)
    {

        return new Response("Salut".$var);
    }

    #[Route('/show', name: 'app_show')]

    public function show()
    {
        return $this->render("student/show.html.twig");
    }


    #[Route('/goToIndex', name: 'app_goToIndex')]

    public function goToIndex()
    {
        return $this->redirectToRoute("app_student");
    }
}
