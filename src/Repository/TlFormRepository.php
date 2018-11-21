<?php

namespace App\Repository;

use App\Entity\TlForm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlForm|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlForm|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlForm[]    findAll()
 * @method TlForm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlFormRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlForm::class);
    }

    // /**
    //  * @return TlForm[] Returns an array of TlForm objects
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
    public function findOneBySomeField($value): ?TlForm
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
