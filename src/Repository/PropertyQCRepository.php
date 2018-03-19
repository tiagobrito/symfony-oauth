<?php

namespace App\Repository;

use App\Entity\PropertyQC;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PropertyQC|null find($id, $lockMode = null, $lockVersion = null)
 * @method PropertyQC|null findOneBy(array $criteria, array $orderBy = null)
 * @method PropertyQC[]    findAll()
 * @method PropertyQC[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PropertyQCRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PropertyQC::class);
    }

//    /**
//     * @return PropertyQC[] Returns an array of PropertyQC objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PropertyQC
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
