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
    public function orderByMail()
    {
        $qb=  $this->createQueryBuilder('s')
            ->orderBy('s.email', 'DESC')
            ->setMaxResults(3);
        return $qb->getQuery()
            ->getResult();
    }

    public function findExcellentStudent()
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager
            ->createQuery("SELECT s FROM APP\Entity\Student s WHERE s.moyenne >= 18");
        return $query->getResult();
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

    public function listStudentByClass($id)
    {
        return $this->createQueryBuilder('s')
            ->join('s.classroom', 'c')
            ->addSelect('c')
            ->where('c.id=:id')
            ->setParameter('id',$id)
            ->getQuery()
            ->getResult();
    }

    public function searchStudent($nsc)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.nce LIKE :x')
            ->setParameter('x', '%'.$nsc.'%')
            ->getQuery()
            ->execute();
    }

    public function orderByDate()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.creationDate', 'DESC')
            ->setMaxResults(3)
            ->getQuery()->getResult();
    }

    public function findEnabledStudent()
    {
        $qb = $this->createQueryBuilder('s');
        $qb->where('s.enabled=:enabled');
        $qb->setParameter('enabled', true);
        return $qb->getQuery()->getResult();
    }


    //Question 3-DQL
    public function findStudentByAVG($min,$max){
        $entityManager=$this->getEntityManager();
        $query=$entityManager
            ->createQuery("SELECT s FROM APP\Entity\Student s WHERE s.moyenne BETWEEN :min AND :max")
            ->setParameter('min',$min)
            ->setParameter('max',$max)
        ;
        return $query->getResult();
    }

    //Question 4-DQL
    public function findExcellentStudent(){
        $entityManager=$this->getEntityManager();
        $query=$entityManager
            ->createQuery("SELECT s FROM APP\Entity\Student s WHERE s.moyenne >= 18");
        return $query->getResult();

    */


    public function searchStudent($username)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.username LIKE :x')
            ->setParameter('x', '%'.$username.'%')
            ->getQuery()
            ->execute();
    }


    public function listStudentByClass($id)
    {
        return $this->createQueryBuilder('s')
            ->join('s.classroom', 'c')
            ->addSelect('c')
            ->where('c.id=:id')
            ->setParameter('id',$id)
            ->getQuery()
            ->getResult();
    }
}
