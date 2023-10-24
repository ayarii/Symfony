<?php

namespace App\Repository;

use App\Entity\Book;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Book>
 *
 * @method Book|null find($id, $lockMode = null, $lockVersion = null)
 * @method Book|null findOneBy(array $criteria, array $orderBy = null)
 * @method Book[]    findAll()
 * @method Book[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
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

    public function listBooksByPublicationDate()
    {
        $qb= $this->createQueryBuilder('b');
        $qb->where('b.datePublication > :x')
            ->setParameter('x', '2023-01-01');
        return $qb->getQuery()->getResult();
    }

    public function listBooksByAuthor($id)
    {
        $qb= $this->createQueryBuilder('b');
        $qb->join('b.author','a')
            ->andWhere('a.id = :y')
            ->andWhere('b.datePublication > :x')
            ->setParameter('x', '2023-01-01')
            ->setParameter('y', $id);
        return $qb->getQuery()->getResult();
    }
    public function sortByUsername(): array{
        $qb= $this->createQueryBuilder('a');
        $qb->orderBy('a.username', 'DESC');
        return $qb->getQuery()->getResult();
    }

    public function searchBook($value)
    {
        return $this->createQueryBuilder('b')
            ->where('b.ref LIKE :x')
            ->setParameter('x', '%'.$value.'%')
            ->getQuery()
            ->getResult();
    }
}
