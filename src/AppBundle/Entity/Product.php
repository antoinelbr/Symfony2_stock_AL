<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * a Product is an item stored in the inventory
 * 
 * @ORM\Entity
 */
class Product
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $name;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $description;
    
    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $published;
    
    public function __construct(){}

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    public function isPublished()
    {
        return $this->published;
    }

    public function setPublished($published)
    {
        $this->published = $published;
    }

}
