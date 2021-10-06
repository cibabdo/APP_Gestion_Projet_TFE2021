<?php

namespace App\Repository;

use App\Entity\PlanningComment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PlanningComment|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlanningComment|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlanningComment[]    findAll()
 * @method PlanningComment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlanningCommentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PlanningComment::class);
    }

      /**
    * @return PlanningComment[] Returns an array of PlanningComment objects
    */    
    public function findAllById($id)
    {        
        return $this->createQueryBuilder('c')
            ->where('c.planning = :id')
            ->setParameter('id', $id)           
            ->orderBy('c.date', 'DESC') 
            ->getQuery()
            ->getResult();
    }

      /**
    * @return PlanningComment[] Returns an array of PlanningComment objects
    */    
    public function findNewComments($date)
    {       
        return $this->createQueryBuilder('c')
            ->where('c.date >= :date')
            ->setParameter('date', $date)            
            ->getQuery()
            ->getResult();
        /*
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            "select c.* " .
            "from App\Entity\PlanningComment c " .             
            "WHERE :date >= c.date"      
        )->setParameter('date', $date);
        return $query->getResult();
        */
    }


    // /**
    //  * @return PlanningComment[] Returns an array of PlanningComment objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PlanningComment
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
