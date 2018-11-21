<?php

namespace App\Repository;

use App\Entity\TlMemberGroup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlMemberGroup|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlMemberGroup|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlMemberGroup[]    findAll()
 * @method TlMemberGroup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlMemberGroupRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlMemberGroup::class);
    }

    // /**
    //  * @return TlMemberGroup[] Returns an array of TlMemberGroup objects
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
    public function findOneBySomeField($value): ?TlMemberGroup
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
