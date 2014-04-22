<?php

namespace MPM\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tutor
 *
 * @ORM\Table(name="tutores")
 * @ORM\Entity(repositoryClass="MPM\EntityBundle\Entity\TutorRepository")
 */
class Tutor extends Persona
{
    /**
     * @ORM\OneToMany(targetEntity="TutorRelation", mappedBy="tutor")
     **/
    private $alumnos;
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->alumnos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add alumnos
     *
     * @param \MPM\EntityBundle\Entity\TutorRelation $alumnos
     * @return Tutor
     */
    public function addAlumno(\MPM\EntityBundle\Entity\TutorRelation $alumnos)
    {
        $this->alumnos[] = $alumnos;

        return $this;
    }

    /**
     * Remove alumnos
     *
     * @param \MPM\EntityBundle\Entity\TutorRelation $alumnos
     */
    public function removeAlumno(\MPM\EntityBundle\Entity\TutorRelation $alumnos)
    {
        $this->alumnos->removeElement($alumnos);
    }

    /**
     * Get alumnos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAlumnos()
    {
        return $this->alumnos;
    }
}
