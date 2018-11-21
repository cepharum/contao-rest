<?php

namespace App\Repository;

use App\Entity\TlNewsletterChannel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlNewsletterChannel|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlNewsletterChannel|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlNewsletterChannel[]    findAll()
 * @method TlNewsletterChannel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlNewsletterChannelRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlNewsletterChannel::class);
    }

    // /**
    //  * @return TlNewsletterChannel[] Returns an array of TlNewsletterChannel objects
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
    public function findOneBySomeField($value): ?TlNewsletterChannel
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
