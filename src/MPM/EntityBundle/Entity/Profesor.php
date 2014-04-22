<?php

namespace MPM\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profesor
 *
 * @ORM\Table(name="profesores")
 * @ORM\Entity(repositoryClass="MPM\EntityBundle\Entity\ProfesorRepository")
 */
class Profesor extends Persona
{
    /**
     * @ORM\OneToMany(targetEntity="Curso", mappedBy="profesor")
     */
    private $cursos;
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->cursos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cursos
     *
     * @param \MPM\EntityBundle\Entity\Curso $cursos
     * @return Profesor
     */
    public function addCurso(\MPM\EntityBundle\Entity\Curso $cursos)
    {
        $this->cursos[] = $cursos;

        return $this;
    }

    /**
     * Remove cursos
     *
     * @param \MPM\EntityBundle\Entity\Curso $cursos
     */
    public function removeCurso(\MPM\EntityBundle\Entity\Curso $cursos)
    {
        $this->cursos->removeElement($cursos);
    }

    /**
     * Get cursos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCursos()
    {
        return $this->cursos;
    }
}
