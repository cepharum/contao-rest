<?php

namespace App\Repository;

use App\Entity\TlMember;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlMember|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlMember|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlMember[]    findAll()
 * @method TlMember[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlMemberRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlMember::class);
    }

    // /**
    //  * @return TlMember[] Returns an array of TlMember objects
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
    public function findOneBySomeField($value): ?TlMember
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
