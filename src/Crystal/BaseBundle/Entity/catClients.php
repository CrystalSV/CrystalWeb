<?php

namespace Crystal\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * catClients
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class catClients
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ClientName", type="string", length=30)
     */
    private $ClientName;

    /**
     * @var string
     *
     * @ORM\Column(name="Logo", type="string", length=50)
     */
    private $Logo;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=100)
     */
    private $Description;

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
     * Set ClientName
     *
     * @param string $clientName
     * @return catClients
     */
    public function setClientName($clientName)
    {
        $this->ClientName = $clientName;
    
        return $this;
    }

    /**
     * Get ClientName
     *
     * @return string 
     */
    public function getClientName()
    {
        return $this->ClientName;
    }

    /**
     * Set Logo
     *
     * @param string $logo
     * @return catClients
     */
    public function setLogo($logo)
    {
        $this->Logo = $logo;
    
        return $this;
    }

    /**
     * Get Logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->Logo;
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return catClients
     */
    public function setDescription($description)
    {
        $this->Description = $description;
    
        return $this;
    }

    /**
     * Get Description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->Description;
    }
}