<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class InventoryController extends Controller
{
    /**
     * @Route("/inventory", name="inventory")
     */
    public function inventoryList()
    {
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:Inventory');
        
        // find *all* products
        $inventories = $repository->findAll();
        
        return $this->render('inventory.html.twig', array(
            'inventories' => $inventories,
        ));
        
    }
    
    
}