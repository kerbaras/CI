<?php

namespace MPM\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TutorRelation
 *
 * @ORM\Table(name="tutores_alumnos")
 * @ORM\Entity(repositoryClass="MPM\EntityBundle\Entity\TutorRelationRepository")
 */
class TutorRelation
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
     * @ORM\Column(name="relacion", type="string", length=255)
     */
    private $relacion;

    /**
     * @ORM\ManyToOne(targetEntity="Alumno", inversedBy="tutores")
     * @ORM\JoinColumn(name="alumno_id", referencedColumnName="id")
     **/
    private $alumno;

    /**
     * @ORM\ManyToOne(targetEntity="Tutor", inversedBy="alumnos")
     * @ORM\JoinColumn(name="tutor_id", referencedColumnName="id")
     **/
    private $tutor;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set relacion
     *
     * @param string $relacion
     * @return TutorRelation
     */
    public function setRelacion($relacion)
    {
        $this->relacion = $relacion;

        return $this;
    }

    /**
     * Get relacion
     *
     * @return string 
     */
    public function getRelacion()
    {
        return $this->relacion;
    }

    /**
     * Set alumno
     *
     * @param \MPM\EntityBundle\Entity\Alumno $alumno
     * @return TutorRelation
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

    /**
     * Set tutor
     *
     * @param \MPM\EntityBundle\Entity\Tutor $tutor
     * @return TutorRelation
     */
    public function setTutor(\MPM\EntityBundle\Entity\Tutor $tutor = null)
    {
        $this->tutor = $tutor;

        return $this;
    }

    /**
     * Get tutor
     *
     * @return \MPM\EntityBundle\Entity\Tutor 
     */
    public function getTutor()
    {
        return $this->tutor;
    }
}
