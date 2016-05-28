<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\InventoryOperation;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\InventoryOperationType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class InventoryOperationController extends Controller
{

    
    /**
     * @Route("/operations", name="inventory_operations")
     */
    public function operationList()
    {
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:InventoryOperation');
        
        // find *all* products
        $operations = $repository->findAll();
        
        return $this->render('inventory_operations.html.twig', array(
            'operations' => $operations,
        ));
        
    }
    
    /**
     * @Route("/operation/in/{inventoryId}",name="inventory_operation_in")
     */
    public function operationInAction($inventoryId, Request $request)
    {
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:Inventory');
        
        //find the right Inventory
        $inventory = $repository->find($inventoryId);
        
        $operation = new InventoryOperation($inventory);
        
        $form = $this->createForm(InventoryOperationType::class, $operation);
        $form->add('submit', SubmitType::class, array(
            'label' => 'Create',
            'attr'  => array('class' => 'btn btn-default pull-left')
        ));
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $operation->operationIn();
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($operation);
            
            $entityManager->flush();
            return $this->redirectToRoute('inventory_operations');
        }
        
        return $this->render('inventory_operation_form.html.twig', array(
            'form' => $form->createView(),
            'inventory' => $inventory,
            'operation' => 'in'
        ));
        

    }
    
    /**
     * @Route("/operation/out/{inventoryId}",name="inventory_operation_out")
     */
    public function operationOutAction($inventoryId, Request $request)
    {
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:Inventory');
        
        //find the right Inventory
        $inventory = $repository->find($inventoryId);
        
        $operation = new InventoryOperation($inventory);
        
        $form = $this->createForm(InventoryOperationType::class, $operation);
        $form->add('submit', SubmitType::class, array(
            'label' => 'Create',
            'attr'  => array('class' => 'btn btn-default pull-left')
        ));
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $operation->operationOut();
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($operation);
            
            $entityManager->flush();
            return $this->redirectToRoute('inventory_operations');
        }
        
        return $this->render('inventory_operation_form.html.twig', array(
            'form' => $form->createView(),
            'inventory' => $inventory,
            'operation' => 'out'
        ));

    }
    
    /**
     * @Route("/operation/delete/{operationId}",name="inventory_operation_delete")
     */
    public function operationDeleteAction($operationId)
    {
        
        $em = $this->getDoctrine()->getManager();
        $operation = $em->getRepository('AppBundle:InventoryOperation')->find($operationId);
        
        if (!$operation) {
            throw $this->createNotFoundException(
                'No Operation found for id '.$operationId
            );
        }
        //$inventory = $em->getRepository('AppBundle:Inventory')->findOneByProduct($productId);
        
        $em->remove($operation);
        $em->flush();
        
        return $this->redirectToRoute('inventory_operations');
        

    }
    
    
    
}