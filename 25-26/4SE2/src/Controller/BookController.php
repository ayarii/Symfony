<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use Doctrine\Persistence\ManagerRegistry;
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
    public function addBook(Request $request,ManagerRegistry $doctrine)
    {
        $book = new Book();
        $form= $this->createForm(BookType::class,$book);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $doctrine->getManager();
            $em->persist($book);
            $em->flush();
            return $this->redirectToRoute("add_book");
        }
        return $this->render("book/add.html.twig",
        ["formBook"=>$form]);
    }


}
