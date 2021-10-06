<?php

namespace App\Repository;

use App\Entity\ProjectPerson;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProjectPerson|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProjectPerson|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProjectPerson[]    findAll()
 * @method ProjectPerson[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectPersonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProjectPerson::class);
    }

      /**
    * @return ProjectPerson[] Returns an array of ProjectPerson objects
    */    
    public function findAllById($id)
    {        
        return $this->createQueryBuilder('c')
            ->where('c.project = :id')
            ->setParameter('id', $id)                      
            ->getQuery()
            ->getResult();
    }
}
