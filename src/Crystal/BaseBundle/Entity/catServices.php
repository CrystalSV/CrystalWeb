<?php

namespace Crystal\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * catServices
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class catServices
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
     * @ORM\Column(name="ServiceName", type="string", length=35)
     * @Assert\NotNull
     */
    private $ServiceName;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=200)
     * @Assert\NotNull
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
     * Set ServiceName
     *
     * @param string $serviceName
     * @return catServices
     */
    public function setServiceName($serviceName)
    {
        $this->ServiceName = $serviceName;
    
        return $this;
    }

    /**
     * Get ServiceName
     *
     * @return string 
     */
    public function getServiceName()
    {
        return $this->ServiceName;
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return catServices
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
