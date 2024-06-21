<?php

namespace App\Repository;

use App\Entity\Fault;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Fault|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fault|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fault[]    findAll()
 * @method Fault[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FaultRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fault::class);
    }
}
