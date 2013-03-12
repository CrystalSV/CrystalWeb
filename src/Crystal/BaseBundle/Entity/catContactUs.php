<?php

namespace Crystal\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert

/**
 * catContactUs
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class catContactUs
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
     * @ORM\Column(name="Name", type="string", length=20)
     * @Assert\NotNull
     */
    private $Name;

    /**
     * @var string
     *
     * @ORM\Column(name="Address", type="string", length=80)
     * @Assert\NotNull
     */
    private $Address;

    /**
     * @var string
     *
     * @ORM\Column(name="Phone", type="string", length=15)
     * @Assert\NotNull
     */
    private $Phone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=40)
     * @Assert\NotNull
     */
    private $email;


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
     * Set Name
     *
     * @param string $name
     * @return catContactUs
     */
    public function setName($name)
    {
        $this->Name = $name;
    
        return $this;
    }

    /**
     * Get Name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Set Address
     *
     * @param string $address
     * @return catContactUs
     */
    public function setAddress($address)
    {
        $this->Address = $address;
    
        return $this;
    }

    /**
     * Get Address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * Set Phone
     *
     * @param string $phone
     * @return catContactUs
     */
    public function setPhone($phone)
    {
        $this->Phone = $phone;
    
        return $this;
    }

    /**
     * Get Phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * Set email
     *
     * @param string $eMail
     * @return catContactUs
     */
    public function setEMail($eMail)
    {
        $this->email = $eMail;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEMail()
    {
        return $this->email;
    }
}
