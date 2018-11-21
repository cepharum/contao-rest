<?php

namespace App\Repository;

use App\Entity\TlStyle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlStyle|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlStyle|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlStyle[]    findAll()
 * @method TlStyle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlStyleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlStyle::class);
    }

    // /**
    //  * @return TlStyle[] Returns an array of TlStyle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TlStyle
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
