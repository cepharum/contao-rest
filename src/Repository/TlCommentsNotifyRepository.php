<?php

namespace App\Repository;

use App\Entity\TlCommentsNotify;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlCommentsNotify|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlCommentsNotify|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlCommentsNotify[]    findAll()
 * @method TlCommentsNotify[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlCommentsNotifyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlCommentsNotify::class);
    }

    // /**
    //  * @return TlCommentsNotify[] Returns an array of TlCommentsNotify objects
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
    public function findOneBySomeField($value): ?TlCommentsNotify
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
