<?php

namespace App\Repository;

use App\Entity\TlPage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlPage|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlPage|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlPage[]    findAll()
 * @method TlPage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlPageRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlPage::class);
    }

    // /**
    //  * @return TlPage[] Returns an array of TlPage objects
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
    public function findOneBySomeField($value): ?TlPage
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
