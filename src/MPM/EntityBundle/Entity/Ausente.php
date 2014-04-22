<?php

namespace MPM\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ausente
 *
 * @ORM\Table(name="ausentes")
 * @ORM\Entity(repositoryClass="MPM\EntityBundle\Entity\AusenteRepository")
 */
class Ausente
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
     * @ORM\ManyToOne(targetEntity="Clase", inversedBy="ausentes")
     * @ORM\JoinColumn(name="clase_id", referencedColumnName="id")
     */
    private $clase;

    /**
     * @ORM\ManyToOne(targetEntity="Alumno", inversedBy="ausentes")
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
     * Set clase
     *
     * @param \MPM\EntityBundle\Entity\Clase $clase
     * @return Ausente
     */
    public function setClase(\MPM\EntityBundle\Entity\Clase $clase = null)
    {
        $this->clase = $clase;

        return $this;
    }

    /**
     * Get clase
     *
     * @return \MPM\EntityBundle\Entity\Clase 
     */
    public function getClase()
    {
        return $this->clase;
    }

    /**
     * Set alumno
     *
     * @param \MPM\EntityBundle\Entity\Alumno $alumno
     * @return Ausente
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
