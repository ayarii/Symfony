<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Bundle\MakerBundle\Renderer\render;

class CategoyController extends AbstractController
{
    #[Route('/categoy', name: 'app_categoy')]
    public function index(): Response
    {
        return $this->render('categoy/index.html.twig', [
            'controller_name' => 'CategoyController',
        ]);
    }

    #[Route('/categoryshow/{category}', name: 'show_categoy')]
    public function showCategory($category)
    {
        return new Response("Category:".$category);
    }

    #[Route('/list', name: 'list')]
    public function listCategory()
    {
        $category= "list of category";
        return $this->render("categoy/list.html.twig",array("cat"=>$category));
    }


}
