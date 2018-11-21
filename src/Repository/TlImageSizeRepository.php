<?php

namespace App\Repository;

use App\Entity\TlImageSize;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlImageSize|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlImageSize|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlImageSize[]    findAll()
 * @method TlImageSize[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlImageSizeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlImageSize::class);
    }

    // /**
    //  * @return TlImageSize[] Returns an array of TlImageSize objects
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
    public function findOneBySomeField($value): ?TlImageSize
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
