<?php

namespace App\Repository\Car;

use App\Entity\Car\Rim;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Rim|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rim|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rim[]    findAll()
 * @method Rim[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RimRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rim::class);
    }
}
