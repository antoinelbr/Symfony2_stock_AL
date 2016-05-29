<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class InventoryOperationRepository extends EntityRepository
{
    /*
     * Find the latest Operation for a specific inventory
     */
    public function findByLatestByInventoryId($inventoryId, $limit = 2)
    {
        $query = $this->getEntityManager()
            ->createQuery('    
                SELECT o
                FROM AppBundle:InventoryOperation o
                WHERE o.inventory = :inventoryId
                ORDER BY o.date DESC
            ')
            ->setMaxResults($limit)
            ->setParameter('inventoryId', $inventoryId)
        ;
        return $query->getResult();
    }
    
    
}
