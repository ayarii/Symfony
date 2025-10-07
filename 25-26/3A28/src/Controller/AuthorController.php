<?php

namespace App\Controller;

use App\Repository\AuthorRepository;
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

    #[Route('/list', name: 'list_author')]
    public function listAuthors()
    {   $var = "3A28";
        $authors = array(
            array('id' => 1, 'picture' => '/images/Victor-Hugo.jpg','username' => 'Victor Hugo', 'email' =>
                'victor.hugo@gmail.com ', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william-shakespeare.jpg','username' => ' William Shakespeare', 'email' =>
                ' william.shakespeare@gmail.com', 'nb_books' => 200 ),
            array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg','username' => 'Taha Hussein', 'email' =>
                'taha.hussein@gmail.com', 'nb_books' => 300),
        );
        return $this->render("author/list.html.twig",
            array('x'=>$var,'tabAuthors'=>$authors));
    }


    #[Route('/listAuthor', name: 'list_authors')]
    public function list(AuthorRepository $repository)
    {
        $authors= $repository->findAll();
        //var_dump($authors).die();
        return $this->render("author/listAuthors.html.twig",
            array('tab'=>$authors));
     }

    #[Route('/showAuthor/{id}', name: 'list_auth')]
    public function show(AuthorRepository $repository,$id)
    {
        $author= $repository->find($id);
        return $this->render("author/showAuthor.html.twig",
            array('author'=>$author));
     }
}
