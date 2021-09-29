<?php

namespace App\Repository;

use App\Entity\PersonContact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PersonContact|null find($id, $lockMode = null, $lockVersion = null)
 * @method PersonContact|null findOneBy(array $criteria, array $orderBy = null)
 * @method PersonContact[]    findAll()
 * @method PersonContact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonContactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PersonContact::class);
    }

    /**
    * @return PersonContact[] Returns an array of PersonContact objects
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
}
