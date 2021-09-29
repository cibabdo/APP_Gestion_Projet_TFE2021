<?php

namespace App\Repository;

use App\Entity\UserSigninSecurity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserSigninSecurity|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserSigninSecurity|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserSigninSecurity[]    findAll()
 * @method UserSigninSecurity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserSigninSecurityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserSigninSecurity::class);
    }
}
