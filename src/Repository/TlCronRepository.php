<?php

namespace App\Repository;

use App\Entity\TlCron;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlCron|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlCron|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlCron[]    findAll()
 * @method TlCron[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlCronRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlCron::class);
    }

    // /**
    //  * @return TlCron[] Returns an array of TlCron objects
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
    public function findOneBySomeField($value): ?TlCron
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
