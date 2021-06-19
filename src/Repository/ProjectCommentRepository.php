<?php

namespace App\Repository;

use App\Entity\ProjectComment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProjectComment|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProjectComment|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProjectComment[]    findAll()
 * @method ProjectComment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectCommentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProjectComment::class);
    }

      /**
    * @return ProjectComment[] Returns an array of ProjectComment objects
    */    
    public function findAllById($id)
    {        
        return $this->createQueryBuilder('c')
            ->where('c.project = :id')
            ->setParameter('id', $id)                
            ->getQuery()
            ->getResult();
    }

    // /**
    //  * @return ProjectComment[] Returns an array of ProjectComment objects
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
    public function findOneBySomeField($value): ?ProjectComment
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
