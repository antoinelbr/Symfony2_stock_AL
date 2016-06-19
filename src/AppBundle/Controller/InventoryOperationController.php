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
        
        // find *all* operations for the published products
        $operations = $repository->findByProductPublished(true);
        
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
            
            $operation->inOperation();
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($operation);
            
            $em->flush();
            return $this->redirectToRoute('inventory_operations');
        }
        
        return $this->render('inventory_operation_form.html.twig', array(
            'form' => $form->createView(),
            'inventory' => $inventory,
            'operation' => 'in'
        ));
        

    }
    
    /**
     * Add products in the Inventory
     * 
     * @Route("/operation/out/{inventoryId}",name="inventory_operation_out")
     */
    public function operationOutAction($inventoryId, Request $request)
    {
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:Inventory');
        
        //find the right Inventory
        $inventory = $repository->find($inventoryId);
        
        $operation = new InventoryOperation($inventory);
        $operation->setPrice($inventory->getPrice());
        
        $form = $this->createForm(InventoryOperationType::class, $operation);
        $form->add('submit', SubmitType::class, array(
            'label' => 'Create',
            'attr'  => array('class' => 'btn btn-default pull-left')
        ));
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            //Now we do the validation to see if the number of product in the inventory is sufficient
            //I would have prefered to send an error in the form on the quantity field but I
            //did not find the way to do it yet
            if(($inventory->getQuantity() - $operation->getQuantity())<0){
                $request->getSession()
                ->getFlashBag()
                ->add('error', "The number of product OUT must be inferior "
                        . "or equal to the number of the product in the inventory");
            
                return $this->render('inventory_operation_form.html.twig', array(
                    'form' => $form->createView(),
                    'inventory' => $inventory,
                    'operation' => 'out'
                ));
                
            }

            //If everything is ok then we create the operation
            $operation->outOperation();
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($operation);
            
            $em->flush();
            return $this->redirectToRoute('inventory_operations');
        }
        
        //Render the form
        return $this->render('inventory_operation_form.html.twig', array(
            'form' => $form->createView(),
            'inventory' => $inventory,
            'operation' => 'out'
        ));

    }
    
    /**
     * Function called to delete an Operation
     * It will adapt the price of the inventory based on the type of the operation
     * 
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
        
        $inventory =  $operation->getInventory();
        
        $operation->deleteOperation();
        $em->remove($operation);
        $em->flush();
        
        //If it was a IN operation then we adjust the price based on the previous IN
        if($operation->getType() == "IN"){
            //get the last inventory
            $lastOperation = $this->getDoctrine()
                    ->getRepository('AppBundle:InventoryOperation')
                    ->findByLatestByInventoryIdAnType($operation->getInventory(),"IN",1);
            
            //we Adjust the price only if there was a IN operation
            if($lastOperation){
                $inventory->setPrice($lastOperation->getPrice());
            }else{
                $inventory->setPrice(0);
            }
            $em->flush();
        }
        
        //Return to the Inventory page
        return $this->redirectToRoute('inventory_operations');
        

    }
    
    
    
}