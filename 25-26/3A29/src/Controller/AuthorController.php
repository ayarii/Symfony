<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }




    #[Route('/listAuthors', name: 'list_author')]
    public function listAuthors()
    {
        $nbr= 100;
        $title= "asma";
        $authors = array(
            array('id' => 1, 'picture' => '/images/Victor-Hugo.jpg','username' => 'Victor Hugo', 'email' =>
                'victor.hugo@gmail.com ', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william-shakespeare.jpg','username' => ' William Shakespeare', 'email' =>
                ' william.shakespeare@gmail.com', 'nb_books' => 200 ),
            array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg','username' => 'Taha Hussein', 'email' =>
                'taha.hussein@gmail.com', 'nb_books' => 300),
        );
        return $this->render("author/list.html.twig",
        ['nbrAthors'=>$nbr,'fisrtName'=>$title,'tabAuthors'=>$authors]);
    }


    #[Route('/author/{id}', name: 'show_author')]
    public function showAuthor($id)
    {
        return $this->render('author/show.html.twig',['id'=>$id]);
    }

}
