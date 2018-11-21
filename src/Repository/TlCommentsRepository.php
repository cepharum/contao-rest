<?php

namespace App\Repository;

use App\Entity\TlComments;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlComments|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlComments|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlComments[]    findAll()
 * @method TlComments[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlCommentsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlComments::class);
    }

    // /**
    //  * @return TlComments[] Returns an array of TlComments objects
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
    public function findOneBySomeField($value): ?TlComments
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
