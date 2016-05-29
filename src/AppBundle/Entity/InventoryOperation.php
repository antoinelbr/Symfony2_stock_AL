<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * An Inventory Operation is the action of adding (IN) or removing (OUT) products
 * from the inventory
 * 
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InventoryOperationRepository")
 */
class InventoryOperation
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Quantity of the product added in the inventory
     * Always greater than 0
     * 
     * @ORM\Column(type="integer")
     * @Assert\GreaterThan(
     *     value = 0
     * )
     */
    private $quantity;

    /**
     * Price is in Rupiah so no decimal. 
     * Always greater than 0
     * 
     * @ORM\Column(type="integer")
     * @Assert\GreaterThan(
     *     value = 0
     * )
     */
    private $price;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     * 
     */
    private $description;
    
    /**
     * A type defines if it's a IN or OUT Operation
     * 
     * @ORM\Column(type="string", length=3)
     */
    private $type;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $date;


    /**
     * We use a Many to One relationship because
     * many Operations can be linked to one inventory
     * 
     * @ORM\ManyToOne(targetEntity="Inventory")
     * @ORM\JoinColumn(name="inventory_id", referencedColumnName="id")
     */
    private $inventory;


    public function __construct(Inventory $inventory){
        $this->inventory = $inventory;
        $this->date = new \DateTime();
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

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setInventory(\AppBundle\Entity\Inventory $inventory = null)
    {
        $this->inventory = $inventory;

        return $this;
    }

    public function getInventory()
    {
        return $this->inventory;
    }
    
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }
    
    //Function called when we add products in the inventory
    public function inOperation(){
        //When an Operation is created we have to adjust the price of the inventory
        //and the quantity
        //We adjust the price of the inventory based on the last In
        $this->inventory->setQuantity($this->inventory->getQuantity() + $this->getQuantity());
        $this->inventory->setPrice($this->price);
        $this->type = "IN";
    }
    
    //Function called when we remove products from the inventory
    public function outOperation(){
        $this->inventory->setQuantity($this->inventory->getQuantity() - $this->getQuantity());
        $this->type = "OUT";
    }
    
    //Function called when we remove an operation
    public function deleteOperation(){
        if($this->type == "IN"){
            $this->inventory->setQuantity($this->inventory->getQuantity() - $this->getQuantity());
        }else{
            $this->inventory->setQuantity($this->inventory->getQuantity() + $this->getQuantity());
        }
    }

}
