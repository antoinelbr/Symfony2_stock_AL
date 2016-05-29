<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Form\ProductType;
use AppBundle\Entity\Product;
use AppBundle\Entity\Inventory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    
    /**
     * @Route("/products", name="products")
     */
    public function productListAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');
        
        // find *all* products
        $products = $repository->findAll();
        
        return $this->render('products.html.twig', array(
            'products' => $products,
        ));

    }
    
    /**
     * @Route("/product/add", name="product_add")
     */
    public function productAddAction(Request $request)
    {
        //Create the Product form to add it to the view
        $product = new Product();

        $form = $this->createForm(ProductType::class, $product);
        $form->add('submit', SubmitType::class, array(
            'label' => 'Create',
            'attr'  => array('class' => 'btn btn-default pull-left')
        ));


        //handle the form submition
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);            
            
            //We create an inventory for this new product
            $inventory = new Inventory($product);
            $entityManager->persist($inventory);
            
            $entityManager->flush();
            
            return $this->redirectToRoute('inventory');
        }


        return $this->render('add_product_form.html.twig', array(
            'form' => $form->createView(),
        ));

    }
    
    /**
     * @Route("/product/edit/{productId}", name="product_edit")
     */
    public function productEditAction($productId, Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');
        $product = $repository->find($productId);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$productId
            );
        }

        $form = $this->createForm(ProductType::class, $product);
        $form->add('submit', SubmitType::class, array(
            'label' => 'Update',
            'attr'  => array('class' => 'btn btn-default pull-left')
        ));


        //handle the form submition
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->flush();
            
            return $this->redirectToRoute('products');
        }


        return $this->render('add_product_form.html.twig', array(
            'form' => $form->createView(),
        ));

    }
    
    /**
     * @Route("/product/delete/{productId}",name="product_delete")
     */
    public function productDeleteAction($productId)
    {
        
        $em = $this->getDoctrine()->getManager();
//        $product = $em->getRepository('AppBundle:Product')->find($productId);
        
        //The inventory is related to a Product and its operations so we remove the inventory
        //related to a product. With on deletion cascade is should remove the product and the operations
        $inventory = $em->getRepository('AppBundle:Inventory')->findOneBy(array('product' => $product->getId()));
        
        if (!$inventory) {
            throw $this->createNotFoundException(
                'No product found for id '.$productId
            );
        }
        
        
        $em->remove($inventory);
        $em->flush();
        
        return $this->redirectToRoute('products');
        

    }


}