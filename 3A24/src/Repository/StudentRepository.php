<?php

namespace App\Repository;

use App\Entity\Student;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Student|null find($id, $lockMode = null, $lockVersion = null)
 * @method Student|null findOneBy(array $criteria, array $orderBy = null)
 * @method Student[]    findAll()
 * @method Student[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Student::class);
    }

    // /**
    //  * @return Student[] Returns an array of Student objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Student
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function orderByMail()
    {
        $qb = $this->createQueryBuilder('s')
            ->orderBy('s.email', 'ASC')
            ->setMaxResults(2);
        return $qb->getQuery()
            ->getResult();
    }

    public function findExcellentStudent(){
        $entityManager=$this->getEntityManager();
        $query=$entityManager
            ->createQuery("SELECT s FROM APP\Entity\Student s
             WHERE s.moyenne >= 18");
        return $query->getResult();
    }

    public function searchStudent($nce)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.nce LIKE :x')
            ->setParameter('x', '%'.$nce.'%')
            ->getQuery()
            ->execute();
    }
}
