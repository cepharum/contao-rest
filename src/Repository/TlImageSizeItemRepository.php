<?php

namespace App\Repository;

use App\Entity\TlImageSizeItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlImageSizeItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlImageSizeItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlImageSizeItem[]    findAll()
 * @method TlImageSizeItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlImageSizeItemRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlImageSizeItem::class);
    }

    // /**
    //  * @return TlImageSizeItem[] Returns an array of TlImageSizeItem objects
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
    public function findOneBySomeField($value): ?TlImageSizeItem
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
