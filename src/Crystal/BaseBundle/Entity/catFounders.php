<?php

namespace Crystal\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert

/**
 * catFounders
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class catFounders
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
     * @ORM\Column(name="FounderName", type="string", length=45)
     */
    private $FounderName;

    /**
     * @var string
     *
     * @ORM\Column(name="Photo", type="string", length=50)
     * @Assert\NotNull(message="Debe de escribir un Nombre")
     */
    private $Photo;

    /**
     * @var string
     *
     * @ORM\Column(name="Position", type="string", length=25)
     * @Assert\NotNull
     */
    private $Position;

    /**
     * @var string
     *
     * @ORM\Column(name="Biography", type="string", length=255)
     * @Assert\NotNull
     */
    private $Biography;


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
     * Set FounderName
     *
     * @param string $founderName
     * @return catFounders
     */
    public function setFounderName($founderName)
    {
        $this->FounderName = $founderName;
    
        return $this;
    }

    /**
     * Get FounderName
     *
     * @return string 
     */
    public function getFounderName()
    {
        return $this->FounderName;
    }

    /**
     * Set Photo
     *
     * @param string $photo
     * @return catFounders
     */
    public function setPhoto($photo)
    {
        $this->Photo = $photo;
    
        return $this;
    }

    /**
     * Get Photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->Photo;
    }

    /**
     * Set Position
     *
     * @param string $position
     * @return catFounders
     */
    public function setPosition($position)
    {
        $this->Position = $position;
    
        return $this;
    }

    /**
     * Get Position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->Position;
    }

    /**
     * Set Biography
     *
     * @param string $biography
     * @return catFounders
     */
    public function setBiography($biography)
    {
        $this->Biography = $biography;
    
        return $this;
    }

    /**
     * Get Biography
     *
     * @return string 
     */
    public function getBiography()
    {
        return $this->Biography;
    }
}
