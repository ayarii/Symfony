<?php

namespace App\Controller;

use App\Entity\Author;
use App\Form\AuthorType;
use App\Repository\AuthorRepository;
use App\Service\BookManagerService;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }


    #[Route('/listAuthors', name: 'list_author')]
    public function listAuthors()
    {
        $nbr = 100;
        $title = "asma";
        $authors = array(
            array('id' => 1, 'picture' => '/images/Victor-Hugo.jpg', 'username' => 'Victor Hugo', 'email' =>
                'victor.hugo@gmail.com ', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william-shakespeare.jpg', 'username' => ' William Shakespeare', 'email' =>
                ' william.shakespeare@gmail.com', 'nb_books' => 200),
            array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg', 'username' => 'Taha Hussein', 'email' =>
                'taha.hussein@gmail.com', 'nb_books' => 300),
        );
        return $this->render("author/list.html.twig",
            ['nbrAthors' => $nbr, 'fisrtName' => $title, 'tabAuthors' => $authors]);
    }


    #[Route('/author/{id}', name: 'show_author')]
    public function showAuthor($id)
    {
        return $this->render('author/show.html.twig', ['id' => $id]);
    }

    #[Route('/listofauthors', name: 'listofauthors')]
    public function list(AuthorRepository $repository)
    {
        $authors = $repository->findAll();
        $authorsByEmail = $repository->listAuthorByEmail();
        return $this->render("author/listAuthors.html.twig",
            ['tabAuthors' => $authors,
                'tabAuthorsByEmail' => $authorsByEmail]);
    }

    #[Route('/addAuthor', name: 'addauthor')]
    public function add(ManagerRegistry $doctrine)
    {
        $author = new Author();
        $author->setUsername("mariem");
        $author->setEmail("mariem@esproit.tn");
        $author->setNbrBooks(10);
        $em = $doctrine->getManager();
        $em->persist($author);
        $em->flush();
        return $this->redirectToRoute("listauthor");
    }

    #[Route('/removeAuthor/{id}', name: 'removeauthor')]
    public function delete(AuthorRepository $repository, $id, ManagerRegistry $doctrine)
    {
        $author = $repository->find($id);
        $em = $doctrine->getManager();
        $em->remove($author);
        $em->flush();
        return $this->redirectToRoute("listauthor");
    }


    #[Route('/ajoutAuteur', name: 'ajout')]
    public function addWithForm(Request $request, ManagerRegistry $doctrine)
    {
        $author = new Author();
        $form = $this->createForm(AuthorType::class, $author);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $doctrine->getManager();
            $em->persist($author);
            $em->flush();
            return $this->redirectToRoute("listauthor");
        }
        return $this->render("author/add.html.twig",
            ['authorformulaire' => $form]);
    }


    #[Route('/updateAuteur/{id}', name: 'update')]
    public function update($id, AuthorRepository $repository, Request $request, ManagerRegistry $doctrine)
    {
        $author = $repository->find($id);
        $form = $this->createForm(AuthorType::class, $author);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $doctrine->getManager();
            $em->flush();
            return $this->redirectToRoute("listauthor");
        }
        return $this->render("author/update.html.twig",
            ['authorformulaire' => $form]);
    }

    #[Route('/authorlistByEmail', name: 'listauthor')]
    public function orderByMail(AuthorRepository $repository)
    {
        $authors = $repository->listAuthorByEmail();
        return $this->render("author/listAuthorsByMail.html.twig",
            ['tabAuthors' => $authors]);
    }

    #[Route('/authors', name: 'author')]
    public function Author(BookManagerService $service, AuthorRepository $repo): Response
    {
        $authors = $repo->findAll();
        $bestAuthors = $service->bestAuthors(2);
        return $this->render('author/index.html.twig', [
            'authors' => $authors,
            'theBest' => $bestAuthors
        ]);

    }

}
