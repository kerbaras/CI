<?php

namespace MPM\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumno
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MPM\EntityBundle\Entity\AlumnoRepository")
 */
class Alumno
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
     * @ORM\Column(name="birthdate", type="date")
     */
    private $birthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="text")
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="grupoSanguineo", type="string", length=255)
     */
    private $grupoSanguineo;

    /**
     * @var string
     *
     * @ORM\Column(name="factorSanguineo", type="string", length=255)
     */
    private $factorSanguineo;

    /**
     * @var string
     *
     * @ORM\Column(name="emergencias", type="text")
     */
    private $emergencias;


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
     * Set birthdate
     *
     * @param \DateTime $birthdate
     * @return Alumno
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Alumno
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set grupoSanguineo
     *
     * @param string $grupoSanguineo
     * @return Alumno
     */
    public function setGrupoSanguineo($grupoSanguineo)
    {
        $this->grupoSanguineo = $grupoSanguineo;

        return $this;
    }

    /**
     * Get grupoSanguineo
     *
     * @return string 
     */
    public function getGrupoSanguineo()
    {
        return $this->grupoSanguineo;
    }

    /**
     * Set factorSanguineo
     *
     * @param string $factorSanguineo
     * @return Alumno
     */
    public function setFactorSanguineo($factorSanguineo)
    {
        $this->factorSanguineo = $factorSanguineo;

        return $this;
    }

    /**
     * Get factorSanguineo
     *
     * @return string 
     */
    public function getFactorSanguineo()
    {
        return $this->factorSanguineo;
    }

    /**
     * Set emergencias
     *
     * @param string $emergencias
     * @return Alumno
     */
    public function setEmergencias($emergencias)
    {
        $this->emergencias = $emergencias;

        return $this;
    }

    /**
     * Get emergencias
     *
     * @return string 
     */
    public function getEmergencias()
    {
        return $this->emergencias;
    }
}
