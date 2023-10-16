<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
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
    public function addBook(ManagerRegistry $manager, Request $request): Response
    {
        $book = new Book();
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $manager->getManager();
            $book->setPublished('true');
            $nbrBook= $book->getAuthor()->getNbrBook();
           // var_dump($nbrBook).die();
            $book->getAuthor()->setNbrBook($nbrBook+1);
            $em->persist($book);
            $em->flush();
            return $this->redirectToRoute('list_book');
        }
        return $this->renderForm('book/addBook.html.twig', ['form' => $form]);
    }
    #[Route('/listBook', name: 'list_book')]
    public function listBook(BookRepository $bookrepository)
    {

        return $this->render('book/listBook.html.twig', [
            'books' => $bookrepository->findAll(),
        ]);
    }


    #[Route('/updateBook/{ref}', name: 'update_book')]
    public function updateBook($ref,BookRepository $repository,ManagerRegistry $manager, Request $request): Response
    {
        $book = $repository->find($ref);
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $manager->getManager();
            $em->flush();
            return $this->redirectToRoute('list_book');
        }
        return $this->renderForm('book/updateBook.html.twig', ['form' => $form]);
    }

    #[Route('/showBook/{ref}', name: 'show_book')]
    public function showAuthor($ref,BookRepository $repository)
    {
        return $this->render('book/show.html.twig',
            array('book'=>$repository->find($ref)));
    }

}
