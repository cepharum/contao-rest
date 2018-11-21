<?php

namespace App\Repository;

use App\Entity\TlStyleSheet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlStyleSheet|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlStyleSheet|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlStyleSheet[]    findAll()
 * @method TlStyleSheet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlStyleSheetRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlStyleSheet::class);
    }

    // /**
    //  * @return TlStyleSheet[] Returns an array of TlStyleSheet objects
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
    public function findOneBySomeField($value): ?TlStyleSheet
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
