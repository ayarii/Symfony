<?php

namespace App\Controller;

use App\Entity\Author;
use App\Repository\AuthorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }

    #[Route('/listAuthor/{name}', name: 'app_authors')]
   public function list($name){

        return new Response("Bonjour".$name);
    }

    #[Route('/list/{var}', name: 'list_author')]
    public function listAuthor($var){
        $var2="10";
        $authors = array(
            array('id' => 1, 'username' => ' Victor Hugo','email'=> 'victor.hugo@gmail.com', 'nb_books'=> 100),
            array ('id' => 2, 'username' => 'William Shakespeare','email'=>
                'william.shakespeare@gmail.com','nb_books' => 200),
            array('id' => 3, 'username' => ' Taha Hussein','email'=> 'taha.hussein@gmail.com','nb_books' => 300),
        );
        return $this->render("author/list.html.twig",
            array("variable1"=>$var,
                'variable2'=>$var2,
                "tabAuthors"=>$authors));
    }

    #[Route('/listAuthors', name: 'list_authors')]
    public  function listAuthors(AuthorRepository $repository){
        $authors= $repository->findAll();
        return $this->render("author/listAuthor.html.twig",
            array("tabAuthors"=>$authors));
    }

    #[Route('/addAuthor', name: 'add_authors')]
    public function addAuthor()
    {
        $author= new Author();
        $author->setUsername("aziz");
        $author->setEmail("aziz@gmail.com");
        $em = $this->getDoctrine()->getManager();
        $em->persist($author);
        $em->flush();
        return $this->redirectToRoute("list_authors");
    }
}
