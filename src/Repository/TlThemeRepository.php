<?php

namespace App\Repository;

use App\Entity\TlTheme;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlTheme|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlTheme|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlTheme[]    findAll()
 * @method TlTheme[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlThemeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlTheme::class);
    }

    // /**
    //  * @return TlTheme[] Returns an array of TlTheme objects
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
    public function findOneBySomeField($value): ?TlTheme
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
