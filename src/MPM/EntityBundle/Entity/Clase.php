<?php

namespace MPM\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clase
 *
 * @ORM\Table(name="clases")
 * @ORM\Entity(repositoryClass="MPM\EntityBundle\Entity\ClaseRepository")
 */
class Clase
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="resumen", type="text")
     */
    private $resumen;

    /**
     * @ORM\ManyToOne(targetEntity="Curso", inversedBy="clases")
     * @ORM\JoinColumn(name="curso_id", referencedColumnName="id")
     */
    private $curso;

    /**
     * @ORM\OneToMany(targetEntity="Ausente", mappedBy="clase")
     */
    private $ausentes;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ausentes = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Clase
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
     * Set resumen
     *
     * @param string $resumen
     * @return Clase
     */
    public function setResumen($resumen)
    {
        $this->resumen = $resumen;

        return $this;
    }

    /**
     * Get resumen
     *
     * @return string 
     */
    public function getResumen()
    {
        return $this->resumen;
    }

    /**
     * Set curso
     *
     * @param \MPM\EntityBundle\Entity\Curso $curso
     * @return Clase
     */
    public function setCurso(\MPM\EntityBundle\Entity\Curso $curso = null)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get curso
     *
     * @return \MPM\EntityBundle\Entity\Curso 
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Add ausentes
     *
     * @param \MPM\EntityBundle\Entity\Ausente $ausentes
     * @return Clase
     */
    public function addAusente(\MPM\EntityBundle\Entity\Ausente $ausentes)
    {
        $this->ausentes[] = $ausentes;

        return $this;
    }

    /**
     * Remove ausentes
     *
     * @param \MPM\EntityBundle\Entity\Ausente $ausentes
     */
    public function removeAusente(\MPM\EntityBundle\Entity\Ausente $ausentes)
    {
        $this->ausentes->removeElement($ausentes);
    }

    /**
     * Get ausentes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAusentes()
    {
        return $this->ausentes;
    }
}
