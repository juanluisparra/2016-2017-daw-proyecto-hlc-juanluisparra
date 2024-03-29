<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * proveedor
 *
 * @ORM\Table(name="proveedor")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\proveedorRepository")
 */
class proveedor
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var material[]
     *
     * @ORM\OneToMany(targetEntity="material",mappedBy="proveedores")
     */
    private $materialel;
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_alta", type="date")
     */
    private $fechaAlta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_baja", type="date")
     */
    private $fechaBaja;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return proveedor
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     *
     * @return proveedor
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set fechaBaja
     *
     * @param \DateTime $fechaBaja
     *
     * @return proveedor
     */
    public function setFechaBaja($fechaBaja)
    {
        $this->fechaBaja = $fechaBaja;

        return $this;
    }

    /**
     * Get fechaBaja
     *
     * @return \DateTime
     */
    public function getFechaBaja()
    {
        return $this->fechaBaja;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->materialel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add materialel
     *
     * @param \AppBundle\Entity\material $materialel
     *
     * @return proveedor
     */
    public function addMaterialel(\AppBundle\Entity\material $materialel)
    {
        $this->materialel[] = $materialel;

        return $this;
    }

    /**
     * Remove materialel
     *
     * @param \AppBundle\Entity\material $materialel
     */
    public function removeMaterialel(\AppBundle\Entity\material $materialel)
    {
        $this->materialel->removeElement($materialel);
    }

    /**
     * Get materialel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMaterialel()
    {
        return $this->materialel;
    }
}
