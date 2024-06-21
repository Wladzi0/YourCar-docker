<?php

namespace App\Repository\Car;

use App\Entity\Car\Transmission;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Transmission|null find($id, $lockMode = null, $lockVersion = null)
 * @method Transmission|null findOneBy(array $criteria, array $orderBy = null)
 * @method Transmission[]    findAll()
 * @method Transmission[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TransmissionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Transmission::class);
    }
}
