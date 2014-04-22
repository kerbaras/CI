<?php

namespace MPM\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Curso
 *
 * @ORM\Table(name="cursos")
 * @ORM\Entity(repositoryClass="MPM\EntityBundle\Entity\CursoRepository")
 */
class Curso
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
     * @ORM\ManyToOne(targetEntity="TipoCurso", inversedBy="cursos")
     * @ORM\JoinColumn(name="tipo_id", referencedColumnName="id")
     */
    private $tipo;

    /**
     * @ORM\ManyToOne(targetEntity="Nivel", inversedBy="cursos")
     * @ORM\JoinColumn(name="nivel_id", referencedColumnName="id")
     */
    private $nivel;

    /**
     * @ORM\ManyToOne(targetEntity="Profesor", inversedBy="cursos")
     * @ORM\JoinColumn(name="profesor_id", referencedColumnName="id")
     */
    private $profesor;

    /**
     * @ORM\OneToMany(targetEntity="Horario", mappedBy="curso")
     */
    private $horarios;

    /**
     * @ORM\OneToMany(targetEntity="Alumno", mappedBy="curso")
     */
    private $alumnos;

    /**
     * @ORM\OneToMany(targetEntity="Clase", mappedBy="curso")
     */
    private $clases;

    /**
     * @ORM\OneToMany(targetEntity="Examen", mappedBy="curso")
     */
    private $examenes;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->horarios = new \Doctrine\Common\Collections\ArrayCollection();
        $this->alumnos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->clases = new \Doctrine\Common\Collections\ArrayCollection();
        $this->examenes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set tipo
     *
     * @param \MPM\EntityBundle\Entity\TipoCurso $tipo
     * @return Curso
     */
    public function setTipo(\MPM\EntityBundle\Entity\TipoCurso $tipo = null)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return \MPM\EntityBundle\Entity\TipoCurso 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set nivel
     *
     * @param \MPM\EntityBundle\Entity\Nivel $nivel
     * @return Curso
     */
    public function setNivel(\MPM\EntityBundle\Entity\Nivel $nivel = null)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return \MPM\EntityBundle\Entity\Nivel 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set profesor
     *
     * @param \MPM\EntityBundle\Entity\Profesor $profesor
     * @return Curso
     */
    public function setProfesor(\MPM\EntityBundle\Entity\Profesor $profesor = null)
    {
        $this->profesor = $profesor;

        return $this;
    }

    /**
     * Get profesor
     *
     * @return \MPM\EntityBundle\Entity\Profesor 
     */
    public function getProfesor()
    {
        return $this->profesor;
    }

    /**
     * Add horarios
     *
     * @param \MPM\EntityBundle\Entity\Horario $horarios
     * @return Curso
     */
    public function addHorario(\MPM\EntityBundle\Entity\Horario $horarios)
    {
        $this->horarios[] = $horarios;

        return $this;
    }

    /**
     * Remove horarios
     *
     * @param \MPM\EntityBundle\Entity\Horario $horarios
     */
    public function removeHorario(\MPM\EntityBundle\Entity\Horario $horarios)
    {
        $this->horarios->removeElement($horarios);
    }

    /**
     * Get horarios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHorarios()
    {
        return $this->horarios;
    }

    /**
     * Add alumnos
     *
     * @param \MPM\EntityBundle\Entity\Alumno $alumnos
     * @return Curso
     */
    public function addAlumno(\MPM\EntityBundle\Entity\Alumno $alumnos)
    {
        $this->alumnos[] = $alumnos;

        return $this;
    }

    /**
     * Remove alumnos
     *
     * @param \MPM\EntityBundle\Entity\Alumno $alumnos
     */
    public function removeAlumno(\MPM\EntityBundle\Entity\Alumno $alumnos)
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

    /**
     * Add clases
     *
     * @param \MPM\EntityBundle\Entity\Clase $clases
     * @return Curso
     */
    public function addClase(\MPM\EntityBundle\Entity\Clase $clases)
    {
        $this->clases[] = $clases;

        return $this;
    }

    /**
     * Remove clases
     *
     * @param \MPM\EntityBundle\Entity\Clase $clases
     */
    public function removeClase(\MPM\EntityBundle\Entity\Clase $clases)
    {
        $this->clases->removeElement($clases);
    }

    /**
     * Get clases
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClases()
    {
        return $this->clases;
    }

    /**
     * Add examenes
     *
     * @param \MPM\EntityBundle\Entity\Examen $examenes
     * @return Curso
     */
    public function addExamene(\MPM\EntityBundle\Entity\Examen $examenes)
    {
        $this->examenes[] = $examenes;

        return $this;
    }

    /**
     * Remove examenes
     *
     * @param \MPM\EntityBundle\Entity\Examen $examenes
     */
    public function removeExamene(\MPM\EntityBundle\Entity\Examen $examenes)
    {
        $this->examenes->removeElement($examenes);
    }

    /**
     * Get examenes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getExamenes()
    {
        return $this->examenes;
    }
}
