<?php

namespace App\Repository;

use App\Entity\TlNews;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlNews|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlNews|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlNews[]    findAll()
 * @method TlNews[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlNewsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlNews::class);
    }

    // /**
    //  * @return TlNews[] Returns an array of TlNews objects
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
    public function findOneBySomeField($value): ?TlNews
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
