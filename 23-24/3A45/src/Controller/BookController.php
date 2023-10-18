<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
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
            $book->setPublished(true);
            $em= $managerRegistry->getManager();
            $em->persist($book);
            $em->flush();
            return new Response("Done!");
        }
        //1ere methode
        // return $this->render('book/add.html.twig',array("formulaireBook"=>$form->createView()));
        //2eme methode
        return $this->renderForm('book/add.html.twig',array("formulaireBook"=>$form));
    }
}
