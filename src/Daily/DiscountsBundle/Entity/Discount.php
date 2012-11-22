<?php
//src/Daily/DiscountsBundle/Entity/Discount.php

namespace Daily\DiscountsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="discount")
 */
class Discount
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     *@ORM\Column(type="string", length=100)
     */
    protected $name;
    
    /**
     *@ORM\Column(type="string", length=100)
     */
    protected $brand;
    
    /**
     *@ORM\Column(type="integer")
     */
    protected $price;
    
    /**
     *@ORM\Column(type="integer")
     */
    protected $orignialPrice;
    
    /**
     *@ORM\Column(type="datetime")
     */
    protected $endingDate;
   
    /**
     *@ORM\Column(type="string", length=256)
     */
    protected $caption;
    
    /**
     *@ORM\Column(type="string", length=256)
     */
    protected $picture;
    
    /**
     *@ORM\Column(type="string", length=1024)
     */
    protected $description;
    
    /**
     * @ORM\ManyToMany(targetEntity="Category")
     */
    protected $categories;
    //protected $user;
    
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Discount
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set brand
     *
     * @param string $brand
     * @return Discount
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    
        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return Discount
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set orignialPrice
     *
     * @param integer $orignialPrice
     * @return Discount
     */
    public function setOrignialPrice($orignialPrice)
    {
        $this->orignialPrice = $orignialPrice;
    
        return $this;
    }

    /**
     * Get orignialPrice
     *
     * @return integer 
     */
    public function getOrignialPrice()
    {
        return $this->orignialPrice;
    }

    /**
     * Set endingDate
     *
     * @param \DateTime $endingDate
     * @return Discount
     */
    public function setEndingDate($endingDate)
    {
        $this->endingDate = $endingDate;
    
        return $this;
    }

    /**
     * Get endingDate
     *
     * @return \DateTime 
     */
    public function getEndingDate()
    {
        return $this->endingDate;
    }

    /**
     * Set caption
     *
     * @param string $caption
     * @return Discount
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
    
        return $this;
    }

    /**
     * Get caption
     *
     * @return string 
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Discount
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    
        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Discount
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
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add categories
     *
     * @param Daily\DiscountsBundle\Entity\Category $categories
     * @return Discount
     */
    public function addCategorie(\Daily\DiscountsBundle\Entity\Category $categories)
    {
        $this->categories[] = $categories;
    
        return $this;
    }

    /**
     * Remove categories
     *
     * @param Daily\DiscountsBundle\Entity\Category $categories
     */
    public function removeCategorie(\Daily\DiscountsBundle\Entity\Category $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }
}