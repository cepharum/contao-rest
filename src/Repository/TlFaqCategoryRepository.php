<?php

namespace App\Repository;

use App\Entity\TlFaqCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlFaqCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlFaqCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlFaqCategory[]    findAll()
 * @method TlFaqCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlFaqCategoryRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlFaqCategory::class);
    }

    // /**
    //  * @return TlFaqCategory[] Returns an array of TlFaqCategory objects
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
    public function findOneBySomeField($value): ?TlFaqCategory
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
