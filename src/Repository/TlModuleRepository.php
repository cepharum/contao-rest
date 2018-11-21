<?php

namespace App\Repository;

use App\Entity\TlModule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlModule|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlModule|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlModule[]    findAll()
 * @method TlModule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlModuleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlModule::class);
    }

    // /**
    //  * @return TlModule[] Returns an array of TlModule objects
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
    public function findOneBySomeField($value): ?TlModule
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
