<?php

namespace App\Repository;

use App\Entity\TlNewsletterBlacklist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlNewsletterBlacklist|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlNewsletterBlacklist|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlNewsletterBlacklist[]    findAll()
 * @method TlNewsletterBlacklist[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlNewsletterBlacklistRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlNewsletterBlacklist::class);
    }

    // /**
    //  * @return TlNewsletterBlacklist[] Returns an array of TlNewsletterBlacklist objects
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
    public function findOneBySomeField($value): ?TlNewsletterBlacklist
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
