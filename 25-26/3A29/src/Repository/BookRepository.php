<?php

namespace App\Repository;

use App\Entity\Book;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Book>
 */
class BookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Book::class);
    }

    //    /**
    //     * @return Book[] Returns an array of Book objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('b')
    //            ->andWhere('b.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('b.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Book
    //    {
    //        return $this->createQueryBuilder('b')
    //            ->andWhere('b.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
    public function searchBookByRef(string $ref)
    {
        $qb=  $this->createQueryBuilder('b')
            ->andWhere('b.ref LIKE :ref')
            ->setParameter('ref', '%' . $ref . '%');
         return   $qb->getQuery()
            ->getResult();
    }

    public function showAllBooksByAuthor(int $authorId)
    {
        return $this->createQueryBuilder('b')
            ->join('b.author', 'a')
            ->andWhere('a.id = :x')
            ->setParameter('x', $authorId)
            ->getQuery()
            ->getResult();
    }

    public function xxx()
    {
        return $this->createQueryBuilder('b')
            ->join('b.author', 'a')
            ->where('b.publicationDate > :year')
            ->andWhere('a.nbrBooks > :minBooks')
            ->setParameter('year', 2023-01-01)
            ->setParameter('minBooks', 10)
            ->orderBy('b.publicationDate', 'ASC')
            ->getQuery()
            ->getResult();
    }

   //dql
    function NbBookCategory(){
        $em=$this->getEntityManager();
        return $em->createQuery('select count(b) from App\Entity\Book b WHERE b.category=:x')
            ->setParameter('x','Romance')->getSingleScalarResult();
    }

   //dql
    public function findBooksBetweenDatesDirect(): array
    {
        $entityManager = $this->getEntityManager();

        $dql = "SELECT b FROM App\Entity\Book b
        WHERE b.publicationDate BETWEEN :start AND :end
        ORDER BY b.publicationDate ASC";
        $query = $entityManager->createQuery($dql)
            ->setParameter('start', '2014-01-01')
            ->setParameter('end', '2018-12-31');
        return $query->getResult();
    }
}
