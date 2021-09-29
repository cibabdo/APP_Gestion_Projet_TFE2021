<?php

namespace App\Repository;

use App\Entity\Planning;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Planning|null find($id, $lockMode = null, $lockVersion = null)
 * @method Planning|null findOneBy(array $criteria, array $orderBy = null)
 * @method Planning[]    findAll()
 * @method Planning[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlanningRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Planning::class);
    }

    /**
    * @return Planning[] Returns an array of Planning objects
    */    
    public function findAllByProjectId($id)
    {        
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            "select c.id, u.username, c.name, c.color, DATE_FORMAT(c.updatedAt, '%Y-%m-%d %H:%i:%s') as updatedAt, DATE_FORMAT(c.startDate, '%Y-%m-%d') as start, DATE_FORMAT(c.endDate, '%Y-%m-%d') as end, " .
            "c.percentDone as progress, coalesce(c.dependency,'') as dependencies " .
            "from App\Entity\Planning c " . 
            "join c.user u " .
            "WHERE c.project = :id"      
        )->setParameter('id', $id);
        return $query->getResult();
    }

    /**
    * @return Planning[] Returns an array of Planning objects
    */    
    public function findAllWithoutMe($id, $taskId)
    {        
        return $this->createQueryBuilder('c')
            ->select("c.id, c.name")
            ->where('c.project = :id')            
            ->andwhere('c.id <> :taskId')
            ->setParameter('id', $id)            
            ->setParameter('taskId', $taskId)            
            ->getQuery()
            ->getResult();
    }

    // /**
    //  * @return Planning[] Returns an array of Planning objects
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
    public function findOneBySomeField($value): ?Planning
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
