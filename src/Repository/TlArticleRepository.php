<?php

namespace App\Repository;

use App\Entity\TlArticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlArticle|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlArticle|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlArticle[]    findAll()
 * @method TlArticle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlArticleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlArticle::class);
    }

    // /**
    //  * @return TlArticle[] Returns an array of TlArticle objects
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
    public function findOneBySomeField($value): ?TlArticle
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
