<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class InventoryRepository extends EntityRepository
{
    /*
     * Find the list of Inventory which have a published Product
     */
    public function findByProductPublished($published)
    {
        $query = $this->createQueryBuilder('i')
                ->join('i.product', 'p')
                ->where('p.published = :published')
                ->setParameter('published', $published)
                ->getQuery()
        ;
        return $query->getResult();
    }
    
    
}
