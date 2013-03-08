<?php

namespace Crystal\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     */
    private $Name;

    /**
     * @var string
     *
     * @ORM\Column(name="Address", type="string", length=80)
     */
    private $Address;

    /**
     * @var string
     *
     * @ORM\Column(name="Phone", type="string", length=15)
     */
    private $Phone;

    /**
     * @var string
     *
     * @ORM\Column(name="e-mail", type="string", length=25)
     */
    private $e-mail;


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
     * Set e-mail
     *
     * @param string $eMail
     * @return catContactUs
     */
    public function setEMail($eMail)
    {
        $this->e-mail = $eMail;
    
        return $this;
    }

    /**
     * Get e-mail
     *
     * @return string 
     */
    public function getEMail()
    {
        return $this->e-mail;
    }
}
