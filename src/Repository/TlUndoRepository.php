<?php

namespace App\Repository;

use App\Entity\TlUndo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlUndo|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlUndo|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlUndo[]    findAll()
 * @method TlUndo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlUndoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlUndo::class);
    }

    // /**
    //  * @return TlUndo[] Returns an array of TlUndo objects
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
    public function findOneBySomeField($value): ?TlUndo
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
