<?php

namespace App\Repository;

use App\Entity\TlNewsFeed;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlNewsFeed|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlNewsFeed|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlNewsFeed[]    findAll()
 * @method TlNewsFeed[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlNewsFeedRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlNewsFeed::class);
    }

    // /**
    //  * @return TlNewsFeed[] Returns an array of TlNewsFeed objects
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
    public function findOneBySomeField($value): ?TlNewsFeed
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
