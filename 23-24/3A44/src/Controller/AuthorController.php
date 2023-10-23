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

    #[Route('/showauthor/{name}', name: 'show_author')]
    public function show($name)
    {
        return $this->render("author/show.html.twig",
            array('nameAuthor'=>$name));
    }

    #[Route('/listauthor', name: 'list_author')]
    public function list()
    {
        $authors = array(
            array('id' => 1, 'username' => ' Victor Hugo','email'=> 'victor.hugo@gmail.com', 'nb_books'=> 100),
    array ('id' => 2, 'username' => 'William Shakespeare','email'=>
'william.shakespeare@gmail.com','nb_books' => 200),
    array('id' => 3, 'username' => ' Taha Hussein','email'=> 'taha.hussein@gmail.com','nb_books' => 300),
);
        return $this->render("author/list.html.twig",
            array('tabAuthors'=>$authors));
    }


    #[Route('/listauthors', name: 'list_authors')]
    public function listAuthor(AuthorRepository $repository)
    {
        $authors= $repository->findAll();
        $authorsByUsername= $repository->sortByUsername();
        return $this->render("author/authors.html.twig"
            ,array('tabAuthors'=>$authors,
                      'tabauthorsByUsername'=>$authorsByUsername,
            ));
    }

    #[Route('/addauthor', name: 'add_author')]
    public function addAuthor(ManagerRegistry $managerRegistry)
    {
        $author= new Author();
        $author->setUsername("author4");
        $author->setEmail("author4@gmail.com");
        $author->setDescriptions("test");
        #1ere method
        #$em= $this->getDoctrine()->getManager();
        #2methode
        $em= $managerRegistry->getManager();
        $em->persist($author);
        $em->flush();
        return $this->redirectToRoute("list_authors");
    }

    #[Route('/add', name: 'add')]
    public function add(Request $request,ManagerRegistry $managerRegistry)
    {
        $author= new Author();
        $form = $this->createForm(AuthorType::class,$author);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $managerRegistry->getManager();
            $em->persist($author);
            $em->flush();
            return $this->redirectToRoute("list_authors");
        }
        //     1ère methode
        /*        return $this->render("author/add.html.twig",
                    array('authorForm'=>$form->createView()));*/
//        2ème méthode
        return $this->renderForm("author/add.html.twig",
            array('authorForm'=>$form));
    }

    #[Route('/delete/{id}', name: 'delete')]
    public function deleteAuthor($id,AuthorRepository $repository,ManagerRegistry $managerRegistry)
    {
        $author= $repository->find($id);
        $em= $managerRegistry->getManager();
        if($author->getNbrBook()==0){
            $em->remove($author);
            $em->flush() ;
        }
        else{
            return new  Response("error");
        }
        return $this->redirectToRoute("list_authors");
    }

    #[Route('/update/{id}', name: 'update_author')]
    public function update(ManagerRegistry $managerRegistry,$id,AuthorRepository $repository)
    {
        $author=$repository->find($id);
        $author->setUsername("omar");
        $author->setEmail("omar@esprit.tn");
        $author->setDescriptions("test");
        $em= $managerRegistry->getManager();
        $em->flush();
        return $this->redirectToRoute("list_authors");
    }

}
