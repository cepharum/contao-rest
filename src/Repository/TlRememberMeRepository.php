<?php

namespace App\Repository;

use App\Entity\TlRememberMe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlRememberMe|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlRememberMe|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlRememberMe[]    findAll()
 * @method TlRememberMe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlRememberMeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlRememberMe::class);
    }

    // /**
    //  * @return TlRememberMe[] Returns an array of TlRememberMe objects
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
    public function findOneBySomeField($value): ?TlRememberMe
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
