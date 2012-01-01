<?php

namespace Acme\ClassifiedsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\ClassifiedsBundle\Entity\Listing
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\ClassifiedsBundle\Repository\Entity\LocationRepository")
 */
class Location
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */    
    protected $id;
    
    /**
     * @ORM\Column(type="string", length="7", name="title")
     */
    protected $title;    
    
    /**
     * @ORM\Column(type="string", length="7", name="zip_code")
     */
    protected $address;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $zip;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $city;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $country;
    
    /**
    * @ORM\Column(type="text", nullable="true")
    */
    protected $localization;
 
  

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
     * Set address
     *
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set zip
     *
     * @param string $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * Get zip
     *
     * @return string 
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set city
     *
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set localization
     *
     * @param text $localization
     */
    public function setLocalization($localization)
    {
        $this->localization = $localization;
    }

    /**
     * Get localization
     *
     * @return text 
     */
    public function getLocalization()
    {
        return $this->localization;
    }
}