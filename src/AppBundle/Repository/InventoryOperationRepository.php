<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class InventoryOperationRepository extends EntityRepository
{
    /*
     * Find the latest Operation for a specific inventory and specific type
     */
    public function findByLatestByInventoryIdAndType($inventoryId, $type, $limit = 2)
    {
        $query = $this->getEntityManager()
            ->createQuery('    
                SELECT o
                FROM AppBundle:InventoryOperation o
                WHERE o.inventory = :inventoryId
                AND o.type = :type
                ORDER BY o.date DESC
            ')
            ->setMaxResults($limit)
            ->setParameter('inventoryId', $inventoryId)
            ->setParameter('type', $type)
        ;
        return $query->getResult();
    }
    
    
}
