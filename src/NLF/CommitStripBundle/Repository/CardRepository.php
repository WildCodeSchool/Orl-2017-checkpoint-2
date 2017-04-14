<?php

namespace NLF\CommitStripBundle\Repository;

/**
 * CardRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CardRepository extends \Doctrine\ORM\EntityRepository
{
    public function nombreArticles()
    {
        $qb = $this->createQueryBuilder('a');

        $qb->select('COUNT(o.id)')
            ->groupBy('o.name');

        return $qb->getQuery()->getSingleScalarResult();
    }
}
