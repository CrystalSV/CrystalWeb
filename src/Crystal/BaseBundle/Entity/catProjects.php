<?php

namespace Crystal\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * catProjects
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class catProjects
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
     * @ORM\Column(name="ProjectName", type="string", length=30)
     * @Assert\NotNull
     */
    private $ProjectName;

    /**
     * @var string
     *
     * @ORM\Column(name="Img", type="string", length=50)
     * @Assert\NotNull
     */
    private $Img;

    /**
     * @var string
     *
     * @ORM\Column(name="URL", type="string", length=80)
     * @Assert\NotNull
     */
    private $URL;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=10)
     * @Assert\NotNull
     */
    private $date;


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
     * Set ProjectName
     *
     * @param string $projectName
     * @return catProjects
     */
    public function setProjectName($projectName)
    {
        $this->ProjectName = $projectName;
    
        return $this;
    }

    /**
     * Get ProjectName
     *
     * @return string 
     */
    public function getProjectName()
    {
        return $this->ProjectName;
    }

    /**
     * Set Img
     *
     * @param string $img
     * @return catProjects
     */
    public function setImg($img)
    {
        $this->Img = $img;
    
        return $this;
    }

    /**
     * Get Img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->Img;
    }

    /**
     * Set URL
     *
     * @param string $uRL
     * @return catProjects
     */
    public function setURL($uRL)
    {
        $this->URL = $uRL;
    
        return $this;
    }

    /**
     * Get URL
     *
     * @return string 
     */
    public function getURL()
    {
        return $this->URL;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return catProjects
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     *@ORM\OneToOne(targetEntity="catClients")
     * @ORM\JoinColumn(name="idclient", referencedColumnName="id")
     **/
    public $idclient;

    public function setidclient(\Crystal\BaseBundle\Entity\catClients $idclient)
    {
        $this->idclient = $idclient;
    }

    public function getnidclient()
    {
        return $this->idclient;
    }
}
