<?php

namespace MPM\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObraSocial
 *
 * @ORM\Table(name="obras_sociales")
 * @ORM\Entity(repositoryClass="MPM\EntityBundle\Entity\ObraSocialRepository")
 */
class ObraSocial
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="shortName", type="string", length=255)
     */
    private $shortName;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255)
     */
    private $telefono;

    /**
     * @ORM\ManyToOne(targetEntity="Alumno", inversedBy="obraSocial", cascade={"persist", "merge"})
     * @ORM\JoinColumn(name="alumno_id", referencedColumnName="id")
     **/
    private $alumnos;

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
     * Set nombre
     *
     * @param string $nombre
     * @return ObraSocial
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set shortName
     *
     * @param string $shortName
     * @return ObraSocial
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Get shortName
     *
     * @return string 
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return ObraSocial
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set alumnos
     *
     * @param \MPM\EntityBundle\Entity\Alumno $alumnos
     * @return ObraSocial
     */
    public function setAlumnos(\MPM\EntityBundle\Entity\Alumno $alumnos = null)
    {
        $this->alumnos = $alumnos;

        return $this;
    }

    /**
     * Get alumnos
     *
     * @return \MPM\EntityBundle\Entity\Alumno 
     */
    public function getAlumnos()
    {
        return $this->alumnos;
    }
}
