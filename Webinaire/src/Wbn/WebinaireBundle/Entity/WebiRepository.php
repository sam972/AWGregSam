<?php

namespace Wbn\WebinaireBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * WebiRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class WebiRepository extends EntityRepository
{
	public function getTotal()
    {
        $qb = $this->createQueryBuilder('a')
                   ->select('COUNT(a)');     // On sélectionne simplement COUNT(a)

        return (int) $qb->getQuery()
                        ->getSingleScalarResult(); // Utilisation de getSingleScalarResult pour avoir directement le résultat du COUNT
    }
}
