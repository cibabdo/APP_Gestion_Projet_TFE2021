<?php

namespace App\Repository;

use App\Entity\Project;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Project|null find($id, $lockMode = null, $lockVersion = null)
 * @method Project|null findOneBy(array $criteria, array $orderBy = null)
 * @method Project[]    findAll()
 * @method Project[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Project::class);
    }

    /**
    * @return Project[] Returns an array of Project objects
    */    
    public function findByNameLike($value)
    {        
        return $this->createQueryBuilder('c')
            ->where('c.title like :val')
            ->setParameter('val', '%'.$value.'%')                
            ->getQuery()
            ->getResult();
    }

     /**
    * @return Project[] Returns an array of Project objects
    */    
    public function findByNameAndId($value, $id)
    {        
        return $this->createQueryBuilder('c')
            ->where('c.id = :id')
            ->andWhere('c.title like :val')
            ->setParameter('id', $id)
            ->setParameter('val', '%'.$value.'%')                
            ->getQuery()
            ->getResult();
    }
    
    /**
    * @return Project[] Returns an array of Project objects
    */    
    public function findByState($value)
    {        
        return $this->createQueryBuilder('c')
            ->where('c.state = :val')
            ->setParameter('val', $value)                
            ->getQuery()
            ->getResult();
    }    
    
      /**
    * @return Project[] Returns an array of Project objects
    */    
    public function findByYear($value)
    {                
        return $this->createQueryBuilder('c')
            ->select("DATE_FORMAT(c.workStartDate, '%m') as month, count(c.id) as nb")
            ->where('c.year = :val')
            ->setParameter('val', $value)                   
            ->groupBy('month')
            ->orderBy('month', 'asc')            
            ->getQuery()
            ->getResult();
    } 

      /**
    * @return Project[] Returns an array of Project objects
    */    
    public function findMinMaxYear()
    {                
        return $this->createQueryBuilder('c')
            ->select("min(c.year) as min, max(c.year) as max")                       
            ->getQuery()
            ->getResult();
    } 
     
    // /**
    //  * @return Project[] Returns an array of Project objects
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
    public function findOneBySomeField($value): ?Project
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
