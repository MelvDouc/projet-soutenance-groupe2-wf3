<?php

namespace App\Repository;

use App\Entity\SousCategories;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SousCategories|null find($id, $lockMode = null, $lockVersion = null)
 * @method SousCategories|null findOneBy(array $criteria, array $orderBy = null)
 * @method SousCategories[]    findAll()
 * @method SousCategories[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SousCategoriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SousCategories::class);
    }

    /**
     * @return SousCategories[] Returns an array of Categories objects
     */
    public function findByNom($value)
    {
        return $this->createQueryBuilder('fbn')
            ->andWhere('fbn.nom = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    
    /*
    public function findOneBySomeField($value): ?SousCategories
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
