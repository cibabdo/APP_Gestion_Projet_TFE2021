<?php

namespace App\Repository;

use App\Entity\Ati;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ati|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ati|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ati[]    findAll()
 * @method Ati[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AtiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ati::class);
    }

    // /**
    //  * @return Ati[] Returns an array of Ati objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ati
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
