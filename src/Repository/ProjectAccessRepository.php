<?php

namespace App\Repository;

use App\Entity\ProjectAccess;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProjectAccess|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProjectAccess|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProjectAccess[]    findAll()
 * @method ProjectAccess[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectAccessRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProjectAccess::class);
    }

     /**
    * @return ProjectAccess[] Returns an array of Project objects
    */    
    public function findAllWithAccess($value)
    {        
        return $this->createQueryBuilder('c')
        ->andWhere('c.user_id = :val')
        ->setParameter('val', $value)        
        ->getQuery()
        ->getResult();
    } 

    // /**
    //  * @return ProjectAccess[] Returns an array of ProjectAccess objects
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
    public function findOneBySomeField($value): ?ProjectAccess
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
