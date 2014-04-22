<?php

namespace MPM\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permiso
 *
 * @ORM\Table(name="permisos")
 * @ORM\Entity(repositoryClass="MPM\EntityBundle\Entity\PermisoRepository")
 */
class Permiso
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
     * @ORM\Column(name="permiso", type="string", length=255)
     */
    private $permiso;

    /**
     * @ORM\ManyToMany(targetEntity="Persona", inversedBy="permisos")
     * @ORM\JoinTable(name="personas_permisos",
     *      joinColumns={@ORM\JoinColumn(name="permiso_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="persona_id", referencedColumnName="id")}
     *      )
     **/
    private $personas;

    /**
     * @ORM\ManyToMany(targetEntity="Grupo", mappedBy="permisos")
     **/
    private $grupos;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->personas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->grupos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return Permiso
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
     * Set permiso
     *
     * @param string $permiso
     * @return Permiso
     */
    public function setPermiso($permiso)
    {
        $this->permiso = $permiso;

        return $this;
    }

    /**
     * Get permiso
     *
     * @return string 
     */
    public function getPermiso()
    {
        return $this->permiso;
    }

    /**
     * Add personas
     *
     * @param \MPM\EntityBundle\Entity\Persona $personas
     * @return Permiso
     */
    public function addPersona(\MPM\EntityBundle\Entity\Persona $personas)
    {
        $this->personas[] = $personas;

        return $this;
    }

    /**
     * Remove personas
     *
     * @param \MPM\EntityBundle\Entity\Persona $personas
     */
    public function removePersona(\MPM\EntityBundle\Entity\Persona $personas)
    {
        $this->personas->removeElement($personas);
    }

    /**
     * Get personas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPersonas()
    {
        return $this->personas;
    }

    /**
     * Add grupos
     *
     * @param \MPM\EntityBundle\Entity\Grupo $grupos
     * @return Permiso
     */
    public function addGrupo(\MPM\EntityBundle\Entity\Grupo $grupos)
    {
        $this->grupos[] = $grupos;

        return $this;
    }

    /**
     * Remove grupos
     *
     * @param \MPM\EntityBundle\Entity\Grupo $grupos
     */
    public function removeGrupo(\MPM\EntityBundle\Entity\Grupo $grupos)
    {
        $this->grupos->removeElement($grupos);
    }

    /**
     * Get grupos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGrupos()
    {
        return $this->grupos;
    }
}
