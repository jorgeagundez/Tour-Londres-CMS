<?php

namespace TourLondres\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreciosTour
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PreciosTour
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
     * @ORM\Column(name="es_aa", type="string", length=255)
     */
    private $esaa;

    /**
     * @var string
     *
     * @ORM\Column(name="es_ab", type="string", length=255)
     */
    private $esab;

    /**
     * @var string
     *
     * @ORM\Column(name="es_ba", type="string", length=255)
     */
    private $esba;

    /**
     * @var string
     *
     * @ORM\Column(name="es_bb", type="string", length=255)
     */
    private $esbb;

    /**
     * @var string
     *
     * @ORM\Column(name="es_ca", type="string", length=255)
     */
    private $esca;

    /**
     * @var string
     *
     * @ORM\Column(name="es_cb", type="string", length=255)
     */
    private $escb;

    /**
     * @var string
     *
     * @ORM\Column(name="es_da", type="string", length=255)
     */
    private $esda;

    /**
     * @var string
     *
     * @ORM\Column(name="es_db", type="string", length=255)
     */
    private $esdb;

    /**
     * @var string
     *
     * @ORM\Column(name="es_ea", type="string", length=255)
     */
    private $esea;

    /**
     * @var string
     *
     * @ORM\Column(name="es_eb", type="string", length=255)
     */
    private $eseb;

    /**
     * @var string
     *
     * @ORM\Column(name="en_aa", type="string", length=255)
     */
    private $enaa;

    /**
     * @var string
     *
     * @ORM\Column(name="en_ab", type="string", length=255)
     */
    private $enab;

    /**
     * @var string
     *
     * @ORM\Column(name="en_ba", type="string", length=255)
     */
    private $enba;

    /**
     * @var string
     *
     * @ORM\Column(name="en_bb", type="string", length=255)
     */
    private $enbb;

    /**
     * @var string
     *
     * @ORM\Column(name="en_ca", type="string", length=255)
     */
    private $enca;

    /**
     * @var string
     *
     * @ORM\Column(name="en_cb", type="string", length=255)
     */
    private $encb;

    /**
     * @var string
     *
     * @ORM\Column(name="en_da", type="string", length=255)
     */
    private $enda;

    /**
     * @var string
     *
     * @ORM\Column(name="en_db", type="string", length=255)
     */
    private $endb;

    /**
     * @var string
     *
     * @ORM\Column(name="en_ea", type="string", length=255)
     */
    private $enea;

    /**
     * @var string
     *
     * @ORM\Column(name="en_eb", type="string", length=255)
     */
    private $eneb;


   

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
     * Set esbody
     *
     * @param string $esbody
     * @return PreciosTour
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
     * @return PreciosTour
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
     * Set esaa
     *
     * @param string $esaa
     * @return PreciosTour
     */
    public function setEsaa($esaa)
    {
        $this->esaa = $esaa;

        return $this;
    }

    /**
     * Get esaa
     *
     * @return string 
     */
    public function getEsaa()
    {
        return $this->esaa;
    }

    /**
     * Set esab
     *
     * @param string $esab
     * @return PreciosTour
     */
    public function setEsab($esab)
    {
        $this->esab = $esab;

        return $this;
    }

    /**
     * Get esab
     *
     * @return string 
     */
    public function getEsab()
    {
        return $this->esab;
    }

    /**
     * Set esba
     *
     * @param string $esba
     * @return PreciosTour
     */
    public function setEsba($esba)
    {
        $this->esba = $esba;

        return $this;
    }

    /**
     * Get esba
     *
     * @return string 
     */
    public function getEsba()
    {
        return $this->esba;
    }

    /**
     * Set esbb
     *
     * @param string $esbb
     * @return PreciosTour
     */
    public function setEsbb($esbb)
    {
        $this->esbb = $esbb;

        return $this;
    }

    /**
     * Get esbb
     *
     * @return string 
     */
    public function getEsbb()
    {
        return $this->esbb;
    }

    /**
     * Set esca
     *
     * @param string $esca
     * @return PreciosTour
     */
    public function setEsca($esca)
    {
        $this->esca = $esca;

        return $this;
    }

    /**
     * Get esca
     *
     * @return string 
     */
    public function getEsca()
    {
        return $this->esca;
    }

    /**
     * Set escb
     *
     * @param string $escb
     * @return PreciosTour
     */
    public function setEscb($escb)
    {
        $this->escb = $escb;

        return $this;
    }

    /**
     * Get escb
     *
     * @return string 
     */
    public function getEscb()
    {
        return $this->escb;
    }

    /**
     * Set esda
     *
     * @param string $esda
     * @return PreciosTour
     */
    public function setEsda($esda)
    {
        $this->esda = $esda;

        return $this;
    }

    /**
     * Get esda
     *
     * @return string 
     */
    public function getEsda()
    {
        return $this->esda;
    }

    /**
     * Set esdb
     *
     * @param string $esdb
     * @return PreciosTour
     */
    public function setEsdb($esdb)
    {
        $this->esdb = $esdb;

        return $this;
    }

    /**
     * Get esdb
     *
     * @return string 
     */
    public function getEsdb()
    {
        return $this->esdb;
    }

    /**
     * Set esea
     *
     * @param string $esea
     * @return PreciosTour
     */
    public function setEsea($esea)
    {
        $this->esea = $esea;

        return $this;
    }

    /**
     * Get esea
     *
     * @return string 
     */
    public function getEsea()
    {
        return $this->esea;
    }

    /**
     * Set eseb
     *
     * @param string $eseb
     * @return PreciosTour
     */
    public function setEseb($eseb)
    {
        $this->eseb = $eseb;

        return $this;
    }

    /**
     * Get eseb
     *
     * @return string 
     */
    public function getEseb()
    {
        return $this->eseb;
    }

    /**
     * Set enaa
     *
     * @param string $enaa
     * @return PreciosTour
     */
    public function setEnaa($enaa)
    {
        $this->enaa = $enaa;

        return $this;
    }

    /**
     * Get enaa
     *
     * @return string 
     */
    public function getEnaa()
    {
        return $this->enaa;
    }

    /**
     * Set enab
     *
     * @param string $enab
     * @return PreciosTour
     */
    public function setEnab($enab)
    {
        $this->enab = $enab;

        return $this;
    }

    /**
     * Get enab
     *
     * @return string 
     */
    public function getEnab()
    {
        return $this->enab;
    }

    /**
     * Set enba
     *
     * @param string $enba
     * @return PreciosTour
     */
    public function setEnba($enba)
    {
        $this->enba = $enba;

        return $this;
    }

    /**
     * Get enba
     *
     * @return string 
     */
    public function getEnba()
    {
        return $this->enba;
    }

    /**
     * Set enbb
     *
     * @param string $enbb
     * @return PreciosTour
     */
    public function setEnbb($enbb)
    {
        $this->enbb = $enbb;

        return $this;
    }

    /**
     * Get enbb
     *
     * @return string 
     */
    public function getEnbb()
    {
        return $this->enbb;
    }

    /**
     * Set enca
     *
     * @param string $enca
     * @return PreciosTour
     */
    public function setEnca($enca)
    {
        $this->enca = $enca;

        return $this;
    }

    /**
     * Get enca
     *
     * @return string 
     */
    public function getEnca()
    {
        return $this->enca;
    }

    /**
     * Set encb
     *
     * @param string $encb
     * @return PreciosTour
     */
    public function setEncb($encb)
    {
        $this->encb = $encb;

        return $this;
    }

    /**
     * Get encb
     *
     * @return string 
     */
    public function getEncb()
    {
        return $this->encb;
    }

    /**
     * Set enda
     *
     * @param string $enda
     * @return PreciosTour
     */
    public function setEnda($enda)
    {
        $this->enda = $enda;

        return $this;
    }

    /**
     * Get enda
     *
     * @return string 
     */
    public function getEnda()
    {
        return $this->enda;
    }

    /**
     * Set endb
     *
     * @param string $endb
     * @return PreciosTour
     */
    public function setEndb($endb)
    {
        $this->endb = $endb;

        return $this;
    }

    /**
     * Get endb
     *
     * @return string 
     */
    public function getEndb()
    {
        return $this->endb;
    }

    /**
     * Set enea
     *
     * @param string $enea
     * @return PreciosTour
     */
    public function setEnea($enea)
    {
        $this->enea = $enea;

        return $this;
    }

    /**
     * Get enea
     *
     * @return string 
     */
    public function getEnea()
    {
        return $this->enea;
    }

    /**
     * Set eneb
     *
     * @param string $eneb
     * @return PreciosTour
     */
    public function setEneb($eneb)
    {
        $this->eneb = $eneb;

        return $this;
    }

    /**
     * Get eneb
     *
     * @return string 
     */
    public function getEneb()
    {
        return $this->eneb;
    }
}
