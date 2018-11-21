<?php

namespace App\Repository;

use App\Entity\TlContent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlContent|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlContent|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlContent[]    findAll()
 * @method TlContent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlContentRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlContent::class);
    }

    // /**
    //  * @return TlContent[] Returns an array of TlContent objects
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
    public function findOneBySomeField($value): ?TlContent
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
