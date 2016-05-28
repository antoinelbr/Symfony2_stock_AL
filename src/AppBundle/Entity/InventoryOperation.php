<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
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
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @ORM\Column(type="integer")
     * @Assert\GreaterThan(
     *     value = 0
     * )
     */
    private $price;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $description;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    //We use a Many to One relationship because
    //many Operations can be linked to one inventory
    /**
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

    /**
     * Set description
     *
     * @param string $description
     * @return InventoryOperation
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return InventoryOperation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set inventory
     *
     * @param \AppBundle\Entity\Inventory $inventory
     * @return InventoryOperation
     */
    public function setInventory(\AppBundle\Entity\Inventory $inventory = null)
    {
        $this->inventory = $inventory;

        return $this;
    }

    /**
     * Get inventory
     *
     * @return \AppBundle\Entity\Inventory 
     */
    public function getInventory()
    {
        return $this->inventory;
    }
    
    public function operationIn(){
        //When an Operation is created we have to adjust the price of the inventory
        //and the quantity
        //We adjust the price of the inventory based on the last In
        $this->inventory->setQuantity($this->inventory->getQuantity() + $this->getQuantity());
        $this->inventory->setPrice($this->price);
    }
    
    public function operationOut(){
        $this->inventory->setQuantity($this->inventory->getQuantity() - $this->getQuantity());
    }
}
