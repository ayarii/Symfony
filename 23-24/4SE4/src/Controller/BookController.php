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

    #[Route('/addbook', name: 'add_book')]
    public function addBook(Request $request,ManagerRegistry $managerRegistry)
    {
        $book = new Book();
        //  $book->setTitle("book1");
        //   $book->setPublished(true);
        //    $book->setRef("1234");
        //    $book->setCategory("category1");
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            /*1ere methode*/
            // $em= $this->getDoctrine()->getManager();
            /*2eme methode*/
            $nbBooks=$book->getAuthor()->getNbBooks();
            $nbBooks=$book->getAuthor()->setNbrBooks($nbBooks+1);
            $em = $managerRegistry->getManager();
            $em->persist($book);
            $em->flush();
            return  $this->redirectToRoute("list_book");
        }
        //1ere methode
        /*    return $this->render("book/add.html.twig",
             array("formBook"=>$form->createView()));*/
        //2eme methode
        return $this->renderForm("book/add.html.twig",
            array("formBook" => $form));
    }

    #[Route('/updateBook/{ref}', name: 'update_book')]
    public function updateBook($ref,BookRepository $repository,Request $request,ManagerRegistry $managerRegistry)
    {
        $book = $repository->find($ref) ;
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $managerRegistry->getManager();
            $em->flush();
            return  $this->redirectToRoute("list_book");
        }
        return $this->renderForm("book/update.html.twig",
            array("formBook" => $form));
    }

    #[Route('/listbook', name: 'list_book')]
    public function listBook(BookRepository $repository,Request $request)
    {
        $form= $this->createForm(SearchBookType::class);
         $form->handleRequest($request);
        if($form->isSubmitted()){
            $ref= $form->getData()->getRef();
            //var_dump($ref).die();
            return $this->render("book/list.html.twig",
                array("tabBooks"=>$repository->searchBook($ref),
                    "searchForm"=>$form->createView()
                ));
        }
        return $this->render("book/list.html.twig",
            array("tabBooks"=>$repository->findAll(),
                   "searchForm"=>$form->createView()
                ));
    }

    #[Route('/deleteBook/{ref}', name: 'delete_book')]
    public function deleteBook(BookRepository $repository,$ref,ManagerRegistry $managerRegistry)
    {
        $book = $repository->find($ref) ;
        $em= $managerRegistry->getManager();
        $em->remove($book);
        $em->flush();
        //return new Response( "Done");
        return  $this->redirectToRoute("list_book");

    }


    #[Route('/listBooksByAuthors/{id}', name: 'list_books_byAuthors')]
    public function listBooksByAuthors($id,BookRepository  $repository){
        return $this->render("book/listBooksByAuthors.html.twig",
        array("tabBooks"=>$repository->findBooksByAuthor($id)));
    }
}
