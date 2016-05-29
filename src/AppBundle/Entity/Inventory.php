<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The inventory keeps track of the number and the current price of a product
 * 
 * @ORM\Entity
 */
class Inventory
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * 
     */
    private $quantity;

    /**
     * @ORM\Column(type="integer")
     * 
     */
    private $price;


    /**
     * We use a OneToOne Relationship because
     * A product can have only one inventory 
     * 
     * @ORM\OneToOne(targetEntity="Product")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id",onDelete="CASCADE")
     */
    private $product;
    
    
    /**
     * An Inventory is composed of multiple InventoryOperation 
     * 
     * @ORM\OneToMany(targetEntity="InventoryOperation", mappedBy="inventory")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $inventoryOperations;


    /**
     * We always create an inventory on the creation of a product 
     * The inventory of a product always has a price of 0
     * and a quantity of 0 at its creation
     * 
     * @param \AppBundle\Entity\Product $product
     */
    public function __construct(Product $product){
        $this->price = 0;
        $this->product = $product;
        $this->quantity = 0;
        $this->inventoryOperations = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct(\AppBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    
    /**
     * Get inventoryOperations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInventoryOperations()
    {
        return $this->inventoryOperations;
    }
    
    
    /**
     * Add inventoryOperations
     *
     * @param \AppBundle\Entity\InventoryOperation $inventoryOperations
     * @return Inventory
     */
    public function addInventoryOperation(\AppBundle\Entity\InventoryOperation $inventoryOperations)
    {
        $this->inventoryOperations[] = $inventoryOperations;

        return $this;
    }

    /**
     * Remove inventoryOperations
     *
     * @param \AppBundle\Entity\InventoryOperation $inventoryOperations
     */
    public function removeInventoryOperation(\AppBundle\Entity\InventoryOperation $inventoryOperations)
    {
        $this->inventoryOperations->removeElement($inventoryOperations);
    }


}
