<?php

namespace App\Repository\Car;

use App\Entity\Car\CarDetails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CarDetails|null find($id, $lockMode = null, $lockVersion = null)
 * @method CarDetails|null findOneBy(array $criteria, array $orderBy = null)
 * @method CarDetails[]    findAll()
 * @method CarDetails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarDetailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CarDetails::class);
    }
}
