<?php

namespace App\Controller;

use App\Entity\Author;
use App\Form\AuthorType;
use App\Repository\AuthorRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

    #[Route('/addAuthor', name: 'add_author')]
    public function add(ManagerRegistry $doctrine)
    {
        $author = new Author();
        $author->setUsername("asmayari");
        $author->setNbrBooks(
            10);
        $em= $doctrine->getManager();
        $em->persist($author);
        $em->flush();
        return $this->redirectToRoute("lists_author");
    }


    #[Route('/addAuthorForm', name: 'addForm_author')]
    public function addWithForm(Request $request,ManagerRegistry $doctrine)
    {
        $author = new Author();
        //$author->setUsername("asmayari");
       // $author->setNbrBooks(10);
        $form= $this->createForm(AuthorType::class,$author);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em= $doctrine->getManager();
          $em->persist($author);
          $em->flush();
          return $this->redirectToRoute("lists_author");
        }
        return $this->render("author/add.html.twig",
        array("formAuthor"=>$form));
    }

    #[Route('/update/{id}', name: 'update_author')]
    public function update($id,AuthorRepository $repository,Request $request,ManagerRegistry $doctrine)
    {
        $author = $repository->find($id);
        $form= $this->createForm(AuthorType::class,$author);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $doctrine->getManager();
            $em->flush();
            return $this->redirectToRoute("lists_author");
        }
        return $this->render("author/update.html.twig",
            array("formAuthor"=>$form));
    }

    #[Route('/remove/{id}', name: 'remove_author')]

    public function deleteAuthor(ManagerRegistry $doctrine,$id,AuthorRepository $repository)
    {
        $author = $repository->find($id);
        $em= $doctrine->getManager();
        $em->remove($author);
        $em->flush();
        return $this->redirectToRoute("lists_author");
    }
}
