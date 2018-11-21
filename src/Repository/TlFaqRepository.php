<?php

namespace App\Repository;

use App\Entity\TlFaq;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlFaq|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlFaq|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlFaq[]    findAll()
 * @method TlFaq[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlFaqRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlFaq::class);
    }

    // /**
    //  * @return TlFaq[] Returns an array of TlFaq objects
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
    public function findOneBySomeField($value): ?TlFaq
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
