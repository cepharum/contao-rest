<?php

namespace App\Repository;

use App\Entity\TlLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlLog[]    findAll()
 * @method TlLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlLogRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlLog::class);
    }

    // /**
    //  * @return TlLog[] Returns an array of TlLog objects
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
    public function findOneBySomeField($value): ?TlLog
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
