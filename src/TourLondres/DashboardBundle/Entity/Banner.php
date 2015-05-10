<?php

namespace TourLondres\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banner
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Banner
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
     * @ORM\Column(name="file", type="string", length=255)
     */
    private $file;


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
     * Set file
     *
     * @param string $file
     * @return Banner
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

     public function __toString()
    {
        return $this->getFile();
    }
}
