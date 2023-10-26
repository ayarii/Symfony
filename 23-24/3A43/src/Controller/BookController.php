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
    public function addBook(Request  $request,ManagerRegistry  $managerRegistry)
    {
        $book = new Book();
        $form= $this->createForm(BookType::class,$book);
        $form->handleRequest($request);
        $book->setPublished(true);
        if($form->isSubmitted()){
            $em= $managerRegistry->getManager();
            $nbBooks= $book->getAuthor()->getNbBooks();
            $book->getAuthor()->setNbBooks($nbBooks+1);
            $em->persist($book);
            $em->flush();
            //var_dump($nbBooks).die();
            return  new Response("Done!");
        }
        return $this->renderForm("book/add.html.twig",
        array('formulaireBook'=>$form));
    }

    #[Route('/listBooks', name: 'list_book')]
    public function listBook(BookRepository  $repository,Request $request)
    {
        $form= $this->createForm(SearchBookType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()){
           $value=  $form->getData()->getRef();
           return $this->render("book/list.html.twig",
               array('tabBooks'=>$repository->searchBook($value),
                   'formSearch'=>$form->createView())
           );
       }
        return $this->render("book/list.html.twig",
            array('tabBooks'=>$repository->findAll(),
                     'formSearch'=>$form->createView())
        );
    }

    #[Route('/listBookByAuthors/{id}', name: 'list_books')]
    public function listBookByAuthors(BookRepository  $repository,$id)
    {
        return $this->render("book/listBookByAuthors.html.twig",
            array('tabBooks'=>$repository->findBooksByAuthor($id))
        );
    }
}
