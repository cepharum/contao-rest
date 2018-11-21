<?php

namespace App\Repository;

use App\Entity\TlCalendarEvents;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlCalendarEvents|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlCalendarEvents|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlCalendarEvents[]    findAll()
 * @method TlCalendarEvents[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlCalendarEventsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlCalendarEvents::class);
    }

    // /**
    //  * @return TlCalendarEvents[] Returns an array of TlCalendarEvents objects
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
    public function findOneBySomeField($value): ?TlCalendarEvents
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
