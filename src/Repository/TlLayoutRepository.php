<?php

namespace App\Repository;

use App\Entity\TlLayout;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlLayout|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlLayout|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlLayout[]    findAll()
 * @method TlLayout[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlLayoutRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlLayout::class);
    }

    // /**
    //  * @return TlLayout[] Returns an array of TlLayout objects
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
    public function findOneBySomeField($value): ?TlLayout
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
