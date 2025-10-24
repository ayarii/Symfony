<?php

namespace App\Service;

use App\Entity\Author;
use App\Entity\Book;
use Doctrine\ORM\EntityManagerInterface;

class BookManagerService
{
    public function __construct(private EntityManagerInterface $em)
    {

    }

    /**
     * Compte le nombre de livres d'un auteur
     */
    public function countBooksByAuthor(Author $author)
    {
        return $this->em->getRepository(Book::class)
            ->count(['author' => $author]);
    }

    //Best Author:
    public function bestAuthors(int $minBooks = 10): array
    {
        $authors = $this->em->getRepository(Author::class)->findAll();
        $bestAuthors = [];
        foreach ($authors as $author) {
            if ($author->getBooks()->count() > $minBooks) {
                $bestAuthors[] = $author;
            }
        }
        return $bestAuthors;
    }

}