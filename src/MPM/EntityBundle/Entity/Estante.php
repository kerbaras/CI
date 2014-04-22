<?php

namespace MPM\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estante
 *
 * @ORM\Table(name="bib_estantes")
 * @ORM\Entity(repositoryClass="MPM\EntityBundle\Entity\EstanteRepository")
 */
class Estante
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
     * @ORM\ManyToOne(targetEntity="Estante", inversedBy="hijos")
     * @ORM\JoinColumn(name="padre_id", referencedColumnName="id")
     */
    private $padre;

    /**
     * @ORM\OneToMany(targetEntity="Estante", mappedBy="padre")
     */
    private $hijos;

    /**
     * @ORM\ManyToMany(targetEntity="Libro", inversedBy="estantes")
     * @ORM\JoinTable(name="libros_estantes")
     **/
    private $libros;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->hijos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->libros = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Estante
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
     * Set padre
     *
     * @param \MPM\EntityBundle\Entity\Estante $padre
     * @return Estante
     */
    public function setPadre(\MPM\EntityBundle\Entity\Estante $padre = null)
    {
        $this->padre = $padre;

        return $this;
    }

    /**
     * Get padre
     *
     * @return \MPM\EntityBundle\Entity\Estante 
     */
    public function getPadre()
    {
        return $this->padre;
    }

    /**
     * Add hijos
     *
     * @param \MPM\EntityBundle\Entity\Estante $hijos
     * @return Estante
     */
    public function addHijo(\MPM\EntityBundle\Entity\Estante $hijos)
    {
        $this->hijos[] = $hijos;

        return $this;
    }

    /**
     * Remove hijos
     *
     * @param \MPM\EntityBundle\Entity\Estante $hijos
     */
    public function removeHijo(\MPM\EntityBundle\Entity\Estante $hijos)
    {
        $this->hijos->removeElement($hijos);
    }

    /**
     * Get hijos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHijos()
    {
        return $this->hijos;
    }

    /**
     * Add libros
     *
     * @param \MPM\EntityBundle\Entity\Libro $libros
     * @return Estante
     */
    public function addLibro(\MPM\EntityBundle\Entity\Libro $libros)
    {
        $this->libros[] = $libros;

        return $this;
    }

    /**
     * Remove libros
     *
     * @param \MPM\EntityBundle\Entity\Libro $libros
     */
    public function removeLibro(\MPM\EntityBundle\Entity\Libro $libros)
    {
        $this->libros->removeElement($libros);
    }

    /**
     * Get libros
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLibros()
    {
        return $this->libros;
    }
}
