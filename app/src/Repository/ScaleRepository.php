<?php

namespace App\Repository;

use App\Entity\Scale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Scale|null find($id, $lockMode = null, $lockVersion = null)
 * @method Scale|null findOneBy(array $criteria, array $orderBy = null)
 * @method Scale[]    findAll()
 * @method Scale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ScaleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Scale::class);
    }
}
