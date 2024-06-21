<?php

namespace App\Repository\Car;

use App\Entity\Car\Make;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Make|null find($id, $lockMode = null, $lockVersion = null)
 * @method Make|null findOneBy(array $criteria, array $orderBy = null)
 * @method Make[]    findAll()
 * @method Make[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MakeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Make::class);
    }
}
