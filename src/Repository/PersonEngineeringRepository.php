<?php

namespace App\Repository;

use App\Entity\PersonEngineering;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PersonEngineering|null find($id, $lockMode = null, $lockVersion = null)
 * @method PersonEngineering|null findOneBy(array $criteria, array $orderBy = null)
 * @method PersonEngineering[]    findAll()
 * @method PersonEngineering[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonEngineeringRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PersonEngineering::class);
    }

    /**
    * @return PersonEngineering[] Returns an array of PersonEngineering objects
    */    
    public function findByNameLike($value)
    {        
        return $this->createQueryBuilder('c')
            ->where('c.firstname like :val1')
            ->orWhere('c.lastname like :val2')
            ->setParameter('val1', '%'.$value.'%')
            ->setParameter('val2', '%'.$value.'%')
            ->getQuery()
            ->getResult();
    }

    /**
    * @return PersonEngineering[] Returns an array of PersonEngineering objects
    */    
    public function findByRole($value)
    {        
        return $this->createQueryBuilder('c')
            /*->select("c.firstname, c.id")*/
            ->where('c.role = :val')       
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult();
    }

    /*
    public function findOneBySomeField($value): ?PersonEngineering
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
