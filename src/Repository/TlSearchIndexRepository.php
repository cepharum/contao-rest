<?php

namespace App\Repository;

use App\Entity\TlSearchIndex;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlSearchIndex|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlSearchIndex|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlSearchIndex[]    findAll()
 * @method TlSearchIndex[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlSearchIndexRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlSearchIndex::class);
    }

    // /**
    //  * @return TlSearchIndex[] Returns an array of TlSearchIndex objects
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
    public function findOneBySomeField($value): ?TlSearchIndex
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
