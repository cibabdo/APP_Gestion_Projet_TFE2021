<?php

namespace App\Repository;

use App\Entity\ProjectWork;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProjectWork|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProjectWork|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProjectWork[]    findAll()
 * @method ProjectWork[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectWorkRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProjectWork::class);
    }

        /**
    * @return ProjectWork[] Returns an array of ProjectWork objects
    */    
    public function findAllById($id)
    {        
        return $this->createQueryBuilder('c')
            ->where('c.project = :id')
            ->join('c.work', 'w')
            ->setParameter('id', $id)  
            ->orderBy('w.name', 'asc')              
            ->getQuery()
            ->getResult();
    }

      /**
    * @return ProjectWork[] Returns an array of ProjectWork objects
    */    
    public function findByNameLike($value)
    {        
        return $this->createQueryBuilder('c')
            ->join('c.work', 'w')
            ->where('w.name like :val')
            ->setParameter('val', '%'.$value.'%')    
            ->orderBy('w.name', 'asc')
            ->getQuery()
            ->getResult();
    }     

    // /**
    //  * @return ProjectWork[] Returns an array of ProjectWork objects
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
    public function findOneBySomeField($value): ?ProjectWork
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
