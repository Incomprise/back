<?php

namespace App\Repository;

use App\Entity\Billetterie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Billetterie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Billetterie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Billetterie[]    findAll()
 * @method Billetterie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BilletterieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Billetterie::class);
    }

    // /**
    //  * @return Billetterie[] Returns an array of Billetterie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Billetterie
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
