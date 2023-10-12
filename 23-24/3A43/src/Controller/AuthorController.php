<?php

namespace App\Controller;

use App\Entity\Author;
use App\Form\AuthorType;
use App\Repository\AuthorRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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


    #[Route('/showauthor/{var}', name: 'show_author')]
    public function showAuthor($var)
    {
        return $this->render("author/show.html.twig"
            ,array('nameAuthor'=>$var));
    }

    #[Route('/listAuthors', name: 'list_author')]
    public function listAuthors()
    {
        $authors = array(
            array ('id' => 2, 'username' => 'William Shakespeare','email'=>
                'william.shakespeare@gmail.com','nb_books' => 200),
            array('id' => 3, 'username' => ' Taha Hussein','email'=> 'taha.hussein@gmail.com','nb_books' => 300),
        );
        return $this->render("author/list.html.twig",
            array("tabAuthors"=>$authors));
    }

    #[Route('/authorsList', name: 'authors_list')]
    public function list(AuthorRepository $repository)
    {
        $authors= $repository->findAll();
        return $this->render("author/listAuthors.html.twig",
            array("tabAuthors"=>$authors));
    }

    #[Route('/addAuthor', name: 'author_add')]
    public function addAuthor(ManagerRegistry $managerRegistry)
    {
        $author = new  Author();
        $author->setUsername("taha");
        $author->setEmail("taha@gmail.com");
        #$em = $this->getDoctrine()->getManager();
        $em= $managerRegistry->getManager();
        $em->persist($author);
        $em->flush();
        return $this->redirectToRoute("authors_list");
    }

    #[Route('/updateAuthor/{id}', name: 'author_add')]
    public function updateAuthor(AuthorRepository $repository,$id,ManagerRegistry $managerRegistry)
    {
        $author = $repository->find($id);
        $author->setUsername("mehdi");
        $author->setEmail("mehdi@gmail.com");
        #$em = $this->getDoctrine()->getManager();
        $em= $managerRegistry->getManager();
        $em->flush();
        return $this->redirectToRoute("authors_list");
    }

    #[Route('/removeAuthor/{id}', name: 'author_remove')]
    public function deleteAuthor($id,AuthorRepository $repository,ManagerRegistry $managerRegistry)
    {
        $author= $repository->find($id);
        $em= $managerRegistry->getManager();
        $em->remove($author);
        $em->flush();
        return $this->redirectToRoute("authors_list");

    }

    #[Route('/add', name: 'add')]
    public function  add(Request $request,ManagerRegistry $managerRegistry)
    {
        $author= new Author();
        $form= $this->createForm(AuthorType::class,$author);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $managerRegistry->getManager();
            $em->persist($author);
            $em->flush();
            return new Response("Done!");
        }
//        1methode
     /*   return $this->render("author/add.html.twig"
        ,array("formulaireAuthor"=>$form->createView()));*/
        //        2methode
        return $this->renderForm("author/add.html.twig"
            ,array("formulaireAuthor"=>$form));
    }
}
