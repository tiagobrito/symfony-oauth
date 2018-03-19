<?php

namespace App\Repository;

use App\Entity\OfferQC;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method OfferQC|null find($id, $lockMode = null, $lockVersion = null)
 * @method OfferQC|null findOneBy(array $criteria, array $orderBy = null)
 * @method OfferQC[]    findAll()
 * @method OfferQC[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OfferQCRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, OfferQC::class);
    }

//    /**
//     * @return OfferQC[] Returns an array of OfferQC objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OfferQC
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
