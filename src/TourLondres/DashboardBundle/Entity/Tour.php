<?php

namespace TourLondres\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tour
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TourLondres\DashboardBundle\Entity\TourRepository")
 */
class Tour
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
     * @ORM\Column(name="es_nav", type="string", length=255)
     */
    private $esnav;

    /**
     * @var string
     *
     * @ORM\Column(name="en_nav", type="string", length=255)
     */
    private $ennav;

    /**
     * @var string
     *
     * @ORM\Column(name="es_name", type="string", length=255)
     */
    private $esname;

    /**
     * @var string
     *
     * @ORM\Column(name="en_name", type="string", length=255)
     */
    private $enname;

    /**
     * @var string
     *
     * @ORM\Column(name="es_description", type="string", length=255)
     */
    private $esdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="en_description", type="string", length=255)
     */
    private $endescription;

    /**
     * @var string
     *
     * @ORM\Column(name="es_body", type="text")
     */
    private $esbody;

    /**
     * @var string
     *
     * @ORM\Column(name="en_body", type="text")
     */
    private $enbody;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=255, nullable=true)
     */
    private $icon;

    /**
     * @var string
     *
     * @ORM\Column(name="banner", type="string", length=255, nullable=true)
     */
    private $banner;

    /**
     * @var string
     *
     * @ORM\Column(name="es_type", type="string", length=255)
     */
    private $estype;

    /**
     * @var string
     *
     * @ORM\Column(name="es_time", type="string", length=45, nullable=true)
     */
    private $estime;

    /**
     * @var string
     *
     * @ORM\Column(name="en_time", type="string", length=45, nullable=true)
     */
    private $entime;

    /**
     * @var string
     *
     * @ORM\Column(name="es_day", type="string", length=45, nullable=true)
     */
    private $esday;

    /**
     * @var string
     *
     * @ORM\Column(name="en_day", type="string", length=45, nullable=true)
     */
    private $enday;

    /**
     * @var string
     *
     * @ORM\Column(name="es_place", type="string", length=255, nullable=true)
     */
    private $esplace;

    /**
     * @var string
     *
     * @ORM\Column(name="en_place", type="string", length=255, nullable=true)
     */
    private $enplace;

    /**
     * @var boolean
     *
     * @ORM\Column(name="available", type="boolean", nullable=true)
     */
    private $available;


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
     * Set esnav
     *
     * @param string $esnav
     * @return Tour
     */
    public function setEsnav($esnav)
    {
        $this->esnav = $esnav;

        return $this;
    }

    /**
     * Get esnav
     *
     * @return string 
     */
    public function getEsnav()
    {
        return $this->esnav;
    }

    /**
     * Set ennav
     *
     * @param string $ennav
     * @return Tour
     */
    public function setEnnav($ennav)
    {
        $this->ennav = $ennav;

        return $this;
    }

    /**
     * Get ennav
     *
     * @return string 
     */
    public function getEnnav()
    {
        return $this->ennav;
    }

    /**
     * Set esname
     *
     * @param string $esname
     * @return Tour
     */
    public function setEsname($esname)
    {
        $this->esname = $esname;

        return $this;
    }

    /**
     * Get esname
     *
     * @return string 
     */
    public function getEsname()
    {
        return $this->esname;
    }

    /**
     * Set enname
     *
     * @param string $enname
     * @return Tour
     */
    public function setEnname($enname)
    {
        $this->enname = $enname;

        return $this;
    }

    /**
     * Get enname
     *
     * @return string 
     */
    public function getEnname()
    {
        return $this->enname;
    }

    /**
     * Set esdescription
     *
     * @param string $esdescription
     * @return Tour
     */
    public function setEsdescription($esdescription)
    {
        $this->esdescription = $esdescription;

        return $this;
    }

    /**
     * Get esdescription
     *
     * @return string 
     */
    public function getEsdescription()
    {
        return $this->esdescription;
    }

    /**
     * Set endescription
     *
     * @param string $endescription
     * @return Tour
     */
    public function setEndescription($endescription)
    {
        $this->endescription = $endescription;

        return $this;
    }

    /**
     * Get endescription
     *
     * @return string 
     */
    public function getEndescription()
    {
        return $this->endescription;
    }

    /**
     * Set esbody
     *
     * @param string $esbody
     * @return Tour
     */
    public function setEsbody($esbody)
    {
        $this->esbody = $esbody;

        return $this;
    }

    /**
     * Get esbody
     *
     * @return string 
     */
    public function getEsbody()
    {
        return $this->esbody;
    }

    /**
     * Set enbody
     *
     * @param string $enbody
     * @return Tour
     */
    public function setEnbody($enbody)
    {
        $this->enbody = $enbody;

        return $this;
    }

    /**
     * Get enbody
     *
     * @return string 
     */
    public function getEnbody()
    {
        return $this->enbody;
    }

    /**
     * Set icon
     *
     * @param string $icon
     * @return Tour
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string 
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set banner
     *
     * @param string $banner
     * @return Tour
     */
    public function setBanner($banner)
    {
        $this->banner = $banner;

        return $this;
    }

    /**
     * Get banner
     *
     * @return string 
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * Set estype
     *
     * @param string $estype
     * @return Tour
     */
    public function setEstype($estype)
    {
        $this->estype = $estype;

        return $this;
    }

    /**
     * Get estype
     *
     * @return string 
     */
    public function getEstype()
    {
        return $this->estype;
    }

    /**
     * Set estime
     *
     * @param string $estime
     * @return Tour
     */
    public function setEstime($estime)
    {
        $this->estime = $estime;

        return $this;
    }

    /**
     * Get estime
     *
     * @return string 
     */
    public function getEstime()
    {
        return $this->estime;
    }

    /**
     * Set entime
     *
     * @param string $entime
     * @return Tour
     */
    public function setEntime($entime)
    {
        $this->entime = $entime;

        return $this;
    }

    /**
     * Get entime
     *
     * @return string 
     */
    public function getEntime()
    {
        return $this->entime;
    }

    /**
     * Set esday
     *
     * @param string $esday
     * @return Tour
     */
    public function setEsday($esday)
    {
        $this->esday = $esday;

        return $this;
    }

    /**
     * Get esday
     *
     * @return string 
     */
    public function getEsday()
    {
        return $this->esday;
    }

    /**
     * Set enday
     *
     * @param string $enday
     * @return Tour
     */
    public function setEnday($enday)
    {
        $this->enday = $enday;

        return $this;
    }

    /**
     * Get enday
     *
     * @return string 
     */
    public function getEnday()
    {
        return $this->enday;
    }

    /**
     * Set esplace
     *
     * @param string $esplace
     * @return Tour
     */
    public function setEsplace($esplace)
    {
        $this->esplace = $esplace;

        return $this;
    }

    /**
     * Get esplace
     *
     * @return string 
     */
    public function getEsplace()
    {
        return $this->esplace;
    }

    /**
     * Set enplace
     *
     * @param string $enplace
     * @return Tour
     */
    public function setEnplace($enplace)
    {
        $this->enplace = $enplace;

        return $this;
    }

    /**
     * Get enplace
     *
     * @return string 
     */
    public function getEnplace()
    {
        return $this->enplace;
    }

    /**
     * Set available
     *
     * @param boolean $available
     * @return Tour
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Get available
     *
     * @return boolean 
     */
    public function getAvailable()
    {
        return $this->available;
    }
}
