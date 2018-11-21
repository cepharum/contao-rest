<?php

namespace App\Repository;

use App\Entity\TlUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlUser[]    findAll()
 * @method TlUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlUserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlUser::class);
    }

    // /**
    //  * @return TlUser[] Returns an array of TlUser objects
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
    public function findOneBySomeField($value): ?TlUser
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
