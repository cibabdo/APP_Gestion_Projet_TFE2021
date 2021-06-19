<?php

namespace App\Repository;

use App\Entity\EngineeringOffice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EngineeringOffice|null find($id, $lockMode = null, $lockVersion = null)
 * @method EngineeringOffice|null findOneBy(array $criteria, array $orderBy = null)
 * @method EngineeringOffice[]    findAll()
 * @method EngineeringOffice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EngineeringOfficeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EngineeringOffice::class);
    }

     /**
     * @return EngineeringOffice[] Returns an array of EngineeringOffice objects
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
    //  * @return EngineeringOffice[] Returns an array of EngineeringOffice objects
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
    public function findOneBySomeField($value): ?EngineeringOffice
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
