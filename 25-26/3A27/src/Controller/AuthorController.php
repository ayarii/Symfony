<?php

namespace App\Controller;

use App\Repository\AuthorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Author;
use App\Form\AuthorType;
use Symfony\Component\HttpFoundation\Request;

final class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }


    #[Route('/listAuthor/{var}', name: 'list_author')]
    public function listAuthors($var)
    {
        $authors = array(

            array('id' => 1, 'picture' => '/images/Victor-Hugo.jpg','username' => 'Victor Hugo', 'email' =>

                'victor.hugo@gmail.com ', 'nb_books' => 100),

            array('id' => 2, 'picture' => '/images/william-shakespeare.jpg','username' => ' William Shakespeare', 'email' =>

                ' william.shakespeare@gmail.com', 'nb_books' => 200 ),

            array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg','username' => 'Taha Hussein', 'email' =>

                'taha.hussein@gmail.com', 'nb_books' => 300),

        );
        return $this->render("author/list.html.twig",array("x"=>$var,'tabAuthors'=>$authors));
    }

    #[Route('/list', name: 'list')]
    public function list(AuthorRepository $repository)
    {
        $authors= $repository->findAll();
        return $this->render("author/listAuthor.html.twig",['tabAuthors'=>$authors]);
    }

    #[Route('/show/{id}', name: 'showAuthor')]
    public function show(AuthorRepository $repository,$id)
    {
       $author=  $repository->find($id);
       return $this->render("author/show.html.twig",['author'=>$author]);
    }


    #[Route('/add', name: 'addAuthor')]
    public function add(ManagerRegistry $doctrine)
    {
        $author = new Author();
        $author->setUsername('asmayari');
        $author->setEmail('asma.ayari@esprit.tn');
        $em = $doctrine->getManager();
        $em->persist($author);
        $em->flush();
        return $this->redirectToRoute('list');
    }


    #[Route('/addForm', name: 'addAuthor_form')]
    public function addWithForm(ManagerRegistry $doctrine,Request $request)
    {
        $author = new Author();
        $formAuthor= $this->createForm(AuthorType::class,$author);
        $formAuthor->handleRequest($request);
        if($formAuthor->isSubmitted()){
            $em = $doctrine->getManager();
            $em->persist($author);
            $em->flush();
            return $this->redirectToRoute('list');
        }
        return $this->render('author/add.html.twig',
        ['formulaire'=>$formAuthor]);
    }


    #[Route('/update/{id}', name: 'updateAuthor_form')]
    public function update($id,AuthorRepository $repository,ManagerRegistry $doctrine,Request $request)
    {
        $author = $repository->find($id);
        $formAuthor= $this->createForm(AuthorType::class,$author);
        $formAuthor->handleRequest($request);
        if($formAuthor->isSubmitted()){
            $em = $doctrine->getManager();
            $em->flush();
            return $this->redirectToRoute('list');
        }
        return $this->render('author/update.html.twig',
            ['formulaire'=>$formAuthor]);
    }

    #[Route('/remove/{id}', name: 'removeAuthor_form')]

    public function delete(AuthorRepository $repository,$id,ManagerRegistry $doctrine)
    {
        $author = $repository->find($id);
        $em= $doctrine->getManager();
        $em->remove($author);
        $em->flush();
        return $this->redirectToRoute("list");
    }
}
