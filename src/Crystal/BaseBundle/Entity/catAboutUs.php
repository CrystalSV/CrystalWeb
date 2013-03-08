<?php

namespace Crystal\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * catAboutUs
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class catAboutUs
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
     * @ORM\Column(name="Information", type="string", length=255)
     */
    private $Information;


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
     * Set Information
     *
     * @param string $information
     * @return catAboutUs
     */
    public function setInformation($information)
    {
        $this->Information = $information;
    
        return $this;
    }

    /**
     * Get Information
     *
     * @return string 
     */
    public function getInformation()
    {
        return $this->Information;
    }
}
