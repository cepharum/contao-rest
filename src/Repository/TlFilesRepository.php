<?php

namespace App\Repository;

use App\Entity\TlFiles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlFiles|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlFiles|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlFiles[]    findAll()
 * @method TlFiles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlFilesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlFiles::class);
    }

    // /**
    //  * @return TlFiles[] Returns an array of TlFiles objects
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
    public function findOneBySomeField($value): ?TlFiles
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
