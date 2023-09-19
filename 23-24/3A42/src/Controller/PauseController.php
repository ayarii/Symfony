<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PauseController extends AbstractController
{
    #[Route('/pause', name: 'app_pause')]
    public function index(): Response
    {
        return $this->render('pause/index.html.twig', [
            'controller_name' => 'PauseController',
        ]);
    }

    #[Route('/listStudent', name: 'student_pause')]
    public function listStudent()
    {
        return $this->render("pause/listStudent.html.twig");
    }
}
