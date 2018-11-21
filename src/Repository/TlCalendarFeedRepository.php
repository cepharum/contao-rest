<?php

namespace App\Repository;

use App\Entity\TlCalendarFeed;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlCalendarFeed|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlCalendarFeed|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlCalendarFeed[]    findAll()
 * @method TlCalendarFeed[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlCalendarFeedRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlCalendarFeed::class);
    }

    // /**
    //  * @return TlCalendarFeed[] Returns an array of TlCalendarFeed objects
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
    public function findOneBySomeField($value): ?TlCalendarFeed
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
