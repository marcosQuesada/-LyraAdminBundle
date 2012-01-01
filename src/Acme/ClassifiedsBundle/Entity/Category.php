<?php

namespace Acme\ClassifiedsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\ClassifiedsBundle\Entity\Category
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\ClassifiedsBundle\Repository\Entity\CategoryRepository")
 */
class Category
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $ad_title
     *
     * @ORM\Column(name="ad_title", type="string", length=255)
     */
    private $ad_title;

 
    /**
     * @var boolean $published
     *
     * @ORM\Column(name="published", type="boolean")
     */
    private $published;


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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set published
     *
     * @param boolean $published
     */
    public function setPublished($published)
    {
        $this->published = $published;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }
    
    public function __toString(){
        return $this->ad_title;
    }
}