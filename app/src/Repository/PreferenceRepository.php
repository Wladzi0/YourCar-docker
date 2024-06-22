<?php

namespace App\Repository;

use App\Entity\Preference;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Preference|null find($id, $lockMode = null, $lockVersion = null)
 * @method Preference|null findOneBy(array $criteria, array $orderBy = null)
 * @method Preference[]    findAll()
 * @method Preference[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PreferenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Preference::class);
    }
}
