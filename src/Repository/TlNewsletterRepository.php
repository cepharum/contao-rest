<?php

namespace App\Repository;

use App\Entity\TlNewsletter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TlNewsletter|null find($id, $lockMode = null, $lockVersion = null)
 * @method TlNewsletter|null findOneBy(array $criteria, array $orderBy = null)
 * @method TlNewsletter[]    findAll()
 * @method TlNewsletter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TlNewsletterRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TlNewsletter::class);
    }

    // /**
    //  * @return TlNewsletter[] Returns an array of TlNewsletter objects
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
    public function findOneBySomeField($value): ?TlNewsletter
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
