<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use App\Form\SearchBookType;
use App\Repository\BookRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    #[Route('/book', name: 'app_book')]
    public function index(): Response
    {
        return $this->render('book/index.html.twig', [
            'controller_name' => 'BookController',
        ]);
    }

    #[Route('/addBook', name: 'add_book')]
    public function addBook(Request $request,ManagerRegistry $managerRegistry)
    {
        $book= new Book();
        $form= $this->createForm(BookType::class,$book);
       $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $managerRegistry->getManager();
            $book->setPublished(True);
            $nbBooks= $book->getAuthor()->getNbrBooks();
            $book->getAuthor()->setNbrBooks($nbBooks+1);
            $em->persist($book);
            $em->flush();
           // var_dump($nbBooks).die();
            return new Response("Done!");
        }
        return $this->renderForm("book/add.html.twig",["formulaireBook"=>$form]);
    }

    #[Route('/listBook', name: 'list_book')]
    public function listBook(Request $request,BookRepository $repository)
    {
        $form = $this->createForm(SearchBookType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $ref= $form->getData()->getRef();
            //var_dump($ref).die();
            return $this->render('book/list.html.twig',array(
                'books'=>$repository->searchBook($ref),
                'formSearch'=>$form->createView(),
                'BooksByPublicationDate'=>$repository->listBooksByPublicationDate()
                //'books'=>$repository->findBy(['published'=>'true'])
            ));
        }
        return $this->render('book/list.html.twig',array(
            'books'=>$repository->findAll(),
            'formSearch'=>$form->createView(),
                'BooksByPublicationDate'=>$repository->listBooksByPublicationDate()
        //'books'=>$repository->findBy(['published'=>'true'])
        ));
    }



    #[Route('/updateBook/{ref}', name: 'book_edit')]
    public function updateBook($ref,BookRepository $repository,Request $request,ManagerRegistry $managerRegistry)
    {
        $book= $repository->find($ref);
        $form= $this->createForm(BookType::class,$book);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $managerRegistry->getManager();
            $book->setPublished(True);
            $em->flush();
            return $this->redirectToRoute("list_book");
        }
        return $this->renderForm("book/update.html.twig",["formulaireBook"=>$form]);
    }

    #[Route('/books/{id}', name: 'show_book')]
    public function findBooksByAuthor($id,BookRepository  $repository)
    {
        return $this->render("book/booksByAuthor.html.twig",array(
            'books'=>$repository->listBooksByAuthor($id)
        ));
    }
}
