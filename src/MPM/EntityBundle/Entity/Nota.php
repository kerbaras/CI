<?php

namespace MPM\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nota
 *
 * @ORM\Table(name="notas")
 * @ORM\Entity(repositoryClass="MPM\EntityBundle\Entity\NotaRepository")
 */
class Nota
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
     * @ORM\Column(name="nota", type="decimal")
     */
    private $nota;

    /**
     * @var string
     *
     * @ORM\Column(name="notaRecuperatorio", type="decimal")
     */
    private $notaRecuperatorio;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="text")
     */
    private $observacion;

    /**
     * @ORM\ManyToOne(targetEntity="Examen", inversedBy="notas")
     * @ORM\JoinColumn(name="examen_id", referencedColumnName="id")
     */
    private $examen;

    /**
     * @ORM\ManyToOne(targetEntity="Alumno", inversedBy="notas")
     * @ORM\JoinColumn(name="alumno_id", referencedColumnName="id")
     */
    private $alumno;

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
     * Set nota
     *
     * @param string $nota
     * @return Nota
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set notaRecuperatorio
     *
     * @param string $notaRecuperatorio
     * @return Nota
     */
    public function setNotaRecuperatorio($notaRecuperatorio)
    {
        $this->notaRecuperatorio = $notaRecuperatorio;

        return $this;
    }

    /**
     * Get notaRecuperatorio
     *
     * @return string 
     */
    public function getNotaRecuperatorio()
    {
        return $this->notaRecuperatorio;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Nota
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set examen
     *
     * @param \MPM\EntityBundle\Entity\Examen $examen
     * @return Nota
     */
    public function setExamen(\MPM\EntityBundle\Entity\Examen $examen = null)
    {
        $this->examen = $examen;

        return $this;
    }

    /**
     * Get examen
     *
     * @return \MPM\EntityBundle\Entity\Examen 
     */
    public function getExamen()
    {
        return $this->examen;
    }

    /**
     * Set alumno
     *
     * @param \MPM\EntityBundle\Entity\Alumno $alumno
     * @return Nota
     */
    public function setAlumno(\MPM\EntityBundle\Entity\Alumno $alumno = null)
    {
        $this->alumno = $alumno;

        return $this;
    }

    /**
     * Get alumno
     *
     * @return \MPM\EntityBundle\Entity\Alumno 
     */
    public function getAlumno()
    {
        return $this->alumno;
    }
}
