<?php

namespace TourLondres\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * About
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class About
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
     * @ORM\Column(name="es_textoPrivados", type="text", nullable=true))
     */
    private $estextoPrivados;

     /**
     * @var string
     *
     * @ORM\Column(name="en_textoPrivados", type="text", nullable=true))
     */
    private $entextoPrivados;

    /**
     * @var string
     *
     * @ORM\Column(name="es_textoSemanales", type="text", nullable=true))
     */
    private $estextoSemanales;

     /**
     * @var string
     *
     * @ORM\Column(name="en_textoSemanales", type="text", nullable=true))
     */
    private $entextoSemanales;

    /**
     * @var string
     *
     * @ORM\Column(name="es_textoTraslados", type="text", nullable=true))
     */
    private $estextoTraslados;

     /**
     * @var string
     *
     * @ORM\Column(name="en_textoTraslados", type="text", nullable=true))
     */
    private $entextoTraslados;

    /**
     * @var string
     *
     * @ORM\Column(name="es_textoHome", type="text", nullable=true))
     */
    private $estextoHome;

    /**
     * @var string
     *
     * @ORM\Column(name="en_textoHome", type="text", nullable=true))
     */
    private $entextoHome;


    

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
     * Set estextoPrivados
     *
     * @param string $estextoPrivados
     * @return About
     */
    public function setEstextoPrivados($estextoPrivados)
    {
        $this->estextoPrivados = $estextoPrivados;

        return $this;
    }

    /**
     * Get estextoPrivados
     *
     * @return string 
     */
    public function getEstextoPrivados()
    {
        return $this->estextoPrivados;
    }

    /**
     * Set entextoPrivados
     *
     * @param string $entextoPrivados
     * @return About
     */
    public function setEntextoPrivados($entextoPrivados)
    {
        $this->entextoPrivados = $entextoPrivados;

        return $this;
    }

    /**
     * Get entextoPrivados
     *
     * @return string 
     */
    public function getEntextoPrivados()
    {
        return $this->entextoPrivados;
    }

    /**
     * Set estextoSemanales
     *
     * @param string $estextoSemanales
     * @return About
     */
    public function setEstextoSemanales($estextoSemanales)
    {
        $this->estextoSemanales = $estextoSemanales;

        return $this;
    }

    /**
     * Get estextoSemanales
     *
     * @return string 
     */
    public function getEstextoSemanales()
    {
        return $this->estextoSemanales;
    }

    /**
     * Set entextoSemanales
     *
     * @param string $entextoSemanales
     * @return About
     */
    public function setEntextoSemanales($entextoSemanales)
    {
        $this->entextoSemanales = $entextoSemanales;

        return $this;
    }

    /**
     * Get entextoSemanales
     *
     * @return string 
     */
    public function getEntextoSemanales()
    {
        return $this->entextoSemanales;
    }

    /**
     * Set estextoTraslados
     *
     * @param string $estextoTraslados
     * @return About
     */
    public function setEstextoTraslados($estextoTraslados)
    {
        $this->estextoTraslados = $estextoTraslados;

        return $this;
    }

    /**
     * Get estextoTraslados
     *
     * @return string 
     */
    public function getEstextoTraslados()
    {
        return $this->estextoTraslados;
    }

    /**
     * Set entextoTraslados
     *
     * @param string $entextoTraslados
     * @return About
     */
    public function setEntextoTraslados($entextoTraslados)
    {
        $this->entextoTraslados = $entextoTraslados;

        return $this;
    }

    /**
     * Get entextoTraslados
     *
     * @return string 
     */
    public function getEntextoTraslados()
    {
        return $this->entextoTraslados;
    }

    /**
     * Set estextoHome
     *
     * @param string $estextoHome
     * @return About
     */
    public function setEstextoHome($estextoHome)
    {
        $this->estextoHome = $estextoHome;

        return $this;
    }

    /**
     * Get estextoHome
     *
     * @return string 
     */
    public function getEstextoHome()
    {
        return $this->estextoHome;
    }

    /**
     * Set entextoHome
     *
     * @param string $entextoHome
     * @return About
     */
    public function setEntextoHome($entextoHome)
    {
        $this->entextoHome = $entextoHome;

        return $this;
    }

    /**
     * Get entextoHome
     *
     * @return string 
     */
    public function getEntextoHome()
    {
        return $this->entextoHome;
    }
}
