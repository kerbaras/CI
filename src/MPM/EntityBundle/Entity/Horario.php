<?php

namespace MPM\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horario
 *
 * @ORM\Table(name="horarios")
 * @ORM\Entity(repositoryClass="MPM\EntityBundle\Entity\HorarioRepository")
 */
class Horario
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
     * @ORM\ManyToOne(targetEntity="Dia", inversedBy="horarios")
     * @ORM\JoinColumn(name="dia_id", referencedColumnName="id")
     */
    private $dia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaIni", type="time")
     */
    private $horaIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaFin", type="time")
     */
    private $horaFin;

    /**
     * @ORM\ManyToOne(targetEntity="Curso", inversedBy="horarios")
     * @ORM\JoinColumn(name="curso_id", referencedColumnName="id")
     */
    private $curso;

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
     * Set horaIni
     *
     * @param \DateTime $horaIni
     * @return Horario
     */
    public function setHoraIni($horaIni)
    {
        $this->horaIni = $horaIni;

        return $this;
    }

    /**
     * Get horaIni
     *
     * @return \DateTime 
     */
    public function getHoraIni()
    {
        return $this->horaIni;
    }

    /**
     * Set horaFin
     *
     * @param \DateTime $horaFin
     * @return Horario
     */
    public function setHoraFin($horaFin)
    {
        $this->horaFin = $horaFin;

        return $this;
    }

    /**
     * Get horaFin
     *
     * @return \DateTime 
     */
    public function getHoraFin()
    {
        return $this->horaFin;
    }

    /**
     * Set dia
     *
     * @param \MPM\EntityBundle\Entity\Dia $dia
     * @return Horario
     */
    public function setDia(\MPM\EntityBundle\Entity\Dia $dia = null)
    {
        $this->dia = $dia;

        return $this;
    }

    /**
     * Get dia
     *
     * @return \MPM\EntityBundle\Entity\Dia 
     */
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * Set curso
     *
     * @param \MPM\EntityBundle\Entity\Curso $curso
     * @return Horario
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
}
