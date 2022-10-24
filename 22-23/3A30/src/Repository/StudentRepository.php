<?php

namespace App\Repository;

use App\Entity\Student;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Student>
 *
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

    public function add(Student $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Student $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Student[] Returns an array of Student objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Student
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

    public function getStudentsByClassroom($id)  {
        $qb= $this->createQueryBuilder('s')
            ->join('s.classroom','c')
            ->addSelect('c')
            ->where('c.id=:id')
            ->setParameter('id',$id);
           return $qb->getQuery()
            ->getResult();
    }



    public function getStudentsOrdredByMoyenne() {
        $qb=  $this->createQueryBuilder('x')
            ->orderBy('x.moyenne','DESC');
        return $qb ->getQuery()
            ->getResult();
    }


    public function searchStudent($username) {
        $qb=  $this->createQueryBuilder('s')
            ->where('s.username LIKE :x')
            ->setParameter('x',$username);
        return $qb->getQuery()
            ->getResult();
    }

    public function searchByMoyenne($min,$max) :array {
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT s FROM App\Entity\Student s WHERE s.moyenne BETWEEN :min AND :max')
            ->setParameter('min',$min)
            ->setParameter('max',$max);
        return $query->getResult();
    }

    public function topStudent(){
        $entityManager=$this->getEntityManager();
        $query=$entityManager
            ->createQuery("SELECT s FROM APP\Entity\Student s WHERE s.moyenne >= 15");
        return $query->getResult();
    }
}
