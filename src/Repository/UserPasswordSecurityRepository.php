<?php

namespace App\Repository;

use App\Entity\UserPasswordSecurity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserPasswordSecurity|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserPasswordSecurity|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserPasswordSecurity[]    findAll()
 * @method UserPasswordSecurity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserPasswordSecurityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserPasswordSecurity::class);
    }
}
