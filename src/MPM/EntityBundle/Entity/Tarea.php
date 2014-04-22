<?php

namespace MPM\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarea
 *
 * @ORM\Table(name="tareas")
 * @ORM\Entity(repositoryClass="MPM\EntityBundle\Entity\TareaRepository")
 */
class Tarea
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
     * @ORM\Column(name="titulo", type="string", length=255)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="importancia", type="smallint")
     */
    private $importancia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var boolean
     *
     * @ORM\Column(name="listo", type="boolean")
     */
    private $listo;

    /**
     * @ORM\ManyToOne(targetEntity="Persona")
     * @ORM\JoinColumn(name="persona_id", referencedColumnName="id")
     */
    private $creador;

    /**
     * @ORM\ManyToMany(targetEntity="Persona", inversedBy="tareasCompartidas")
     * @ORM\JoinTable(name="personas_tareas_compartidas")
     **/
    private $shareList;



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
     * Set titulo
     *
     * @param string $titulo
     * @return Tarea
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Tarea
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set importancia
     *
     * @param integer $importancia
     * @return Tarea
     */
    public function setImportancia($importancia)
    {
        $this->importancia = $importancia;

        return $this;
    }

    /**
     * Get importancia
     *
     * @return integer 
     */
    public function getImportancia()
    {
        return $this->importancia;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Tarea
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set listo
     *
     * @param boolean $listo
     * @return Tarea
     */
    public function setListo($listo)
    {
        $this->listo = $listo;

        return $this;
    }

    /**
     * Get listo
     *
     * @return boolean 
     */
    public function getListo()
    {
        return $this->listo;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->shareList = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set creador
     *
     * @param \MPM\EntityBundle\Entity\Persona $creador
     * @return Tarea
     */
    public function setCreador(\MPM\EntityBundle\Entity\Persona $creador = null)
    {
        $this->creador = $creador;

        return $this;
    }

    /**
     * Get creador
     *
     * @return \MPM\EntityBundle\Entity\Persona 
     */
    public function getCreador()
    {
        return $this->creador;
    }

    /**
     * Add shareList
     *
     * @param \MPM\EntityBundle\Entity\Persona $shareList
     * @return Tarea
     */
    public function addShareList(\MPM\EntityBundle\Entity\Persona $shareList)
    {
        $this->shareList[] = $shareList;

        return $this;
    }

    /**
     * Remove shareList
     *
     * @param \MPM\EntityBundle\Entity\Persona $shareList
     */
    public function removeShareList(\MPM\EntityBundle\Entity\Persona $shareList)
    {
        $this->shareList->removeElement($shareList);
    }

    /**
     * Get shareList
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getShareList()
    {
        return $this->shareList;
    }
}
