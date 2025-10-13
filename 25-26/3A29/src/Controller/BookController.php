<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use App\Repository\BookRepository;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BookController extends AbstractController
{
    #[Route('/book', name: 'app_book')]
    public function index(): Response
    {
        return $this->render('book/index.html.twig', [
            'controller_name' => 'BookController',
        ]);
    }

    #[Route('/addBook', name: 'add_book')]

    public function add(\Doctrine\Persistence\ManagerRegistry $doctrine,Request $request)
    {
        $book = new Book();

        $form = $this->createForm(BookType::class,$book);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $doctrine->getManager();
            $em->persist($book);
            $em->flush();
            return  $this->redirectToRoute("add_book");
        }
        return $this->render("book/add.html.twig",
        ['formulaire'=>$form]);

    }

    #[Route('/listBook', name: 'list_book')]

    public function list(BookRepository $repository)
    {
        $books= $repository->findAll();
        return $this->render("book/list.html.twig",
            ['tabBooks'=>$books]);
    }

}
