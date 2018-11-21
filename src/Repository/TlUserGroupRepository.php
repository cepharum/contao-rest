<?php

namespace App\Repository;

use App\Entity\TlUserGroup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlUserGroup|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlUserGroup|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlUserGroup[]    findAll()
 * @method TlUserGroup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlUserGroupRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlUserGroup::class);
    }

    // /**
    //  * @return TlUserGroup[] Returns an array of TlUserGroup objects
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
    public function findOneBySomeField($value): ?TlUserGroup
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
