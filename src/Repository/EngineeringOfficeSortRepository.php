<?php

namespace App\Repository;

use App\Entity\EngineeringOfficeSort;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EngineeringOfficeSort|null find($id, $lockMode = null, $lockVersion = null)
 * @method EngineeringOfficeSort|null findOneBy(array $criteria, array $orderBy = null)
 * @method EngineeringOfficeSort[]    findAll()
 * @method EngineeringOfficeSort[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EngineeringOfficeSortRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EngineeringOfficeSort::class);
    }

     /**
     * @return EngineeringOfficeSort[] Returns an array of EngineeringOfficeSort objects
     */
    
    public function findByNameLike($value)
    {        
        return $this->createQueryBuilder('c')
            ->where('c.name like :val')
            ->setParameter('val', '%'.$value.'%')                
            ->getQuery()
            ->getResult();
    }

    // /**
    //  * @return EngineeringOfficeSort[] Returns an array of EngineeringOfficeSort objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EngineeringOfficeSort
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
