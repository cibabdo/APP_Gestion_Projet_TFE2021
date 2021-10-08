<?php

namespace App\Repository;

use App\Entity\ProjectCompany;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProjectCompany|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProjectCompany|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProjectCompany[]    findAll()
 * @method ProjectCompany[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectCompanyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProjectCompany::class);
    }
    
    /**
    * @return Company[] Returns an array of ProjectCompany objects
    */    
    public function findCompanyByProject($id)
    {        
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            "select c.id, c.name " .
            "from App\Entity\Company c, App\Entity\ProjectCompany pc " .         
            "WHERE c.id = pc.company " .
            "and pc.project = :id"
        )->setParameter('id', $id);
        return $query->getResult();
    }
}
