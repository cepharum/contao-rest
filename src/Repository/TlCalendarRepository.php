<?php

namespace App\Repository;

use App\Entity\TlCalendar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlCalendar|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlCalendar|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlCalendar[]    findAll()
 * @method TlCalendar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlCalendarRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlCalendar::class);
    }

    // /**
    //  * @return TlCalendar[] Returns an array of TlCalendar objects
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
    public function findOneBySomeField($value): ?TlCalendar
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
