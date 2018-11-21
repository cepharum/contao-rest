<?php

namespace App\Repository;

use App\Entity\TlNewsArchive;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlNewsArchive|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlNewsArchive|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlNewsArchive[]    findAll()
 * @method TlNewsArchive[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlNewsArchiveRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlNewsArchive::class);
    }

    // /**
    //  * @return TlNewsArchive[] Returns an array of TlNewsArchive objects
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
    public function findOneBySomeField($value): ?TlNewsArchive
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
