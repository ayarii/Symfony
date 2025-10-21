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


    #[Route('/msg1', name: 'msg1_author')]
    public function msg1()
    {
        return new Response("Salut 4SE2");
    }

    #[Route('/msg2/{var}', name: 'msg2_author')]
    public function msg2($var)
    {
        return new Response("Bonjour".$var);
    }


    #[Route('/msg3/{var}', name: 'msg3_author')]
    public function msg3($var)
    {
        return $this->render("author\msg3.html.twig"
            ,array("variable"=>$var));
    }


    #[Route('/goToIndex', name: 'gotoindex_author')]
    public function goToIndex()
    {
        return $this->redirectToRoute("app_author");
    }

    #[Route('/listAuthor', name: 'list_author')]
    public function listAuthors()
    {
        $authors = array(
          array('id' => 1, 'picture' => '/images/Victor-Hugo.jpg','username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com ', 'nb_books' => 100),
           array('id' => 2, 'picture' => '/images/william-shakespeare.jpg','username' => ' William Shakespeare', 'email' =>  ' william.shakespeare@gmail.com', 'nb_books' => 200 ),
            array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg','username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),
        );

        return $this->render("author/list.html.twig",
            ["tabAuthors"=>$authors]);
    }

    #[Route('/showAuthor/{id}', name: 'list_author')]

    public function showDetails($id)
    {
        $authors = array(
            array('id' => 1, 'picture' => '/images/Victor-Hugo.jpg','username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com ', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william-shakespeare.jpg','username' => ' William Shakespeare', 'email' =>  ' william.shakespeare@gmail.com', 'nb_books' => 200 ),
            array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg','username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),
        );
        $author = Null;
        foreach ( $authors as $a){
            if($a['id']==$id){
                $author= $a;
            }
        }
     return $this->render("author/show.html.twig",['author'=>$author]);
    }

    #[Route('/list', name: 'lists_author')]

    public function list(AuthorRepository $repository)
    {
        $authors= $repository->findAll();
        return $this->render("author/listAuthors.html.twig",
            ["tabAuthors"=>$authors]);
    }

}
