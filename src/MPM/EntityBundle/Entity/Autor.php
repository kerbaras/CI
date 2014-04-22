<?php

namespace MPM\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Autor
 *
 * @ORM\Table(name="bib_autores")
 * @ORM\Entity(repositoryClass="MPM\EntityBundle\Entity\AutorRepository")
 */
class Autor
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
     * @ORM\ManyToMany(targetEntity="Libro", mappedBy="autores")
     **/
    private $libros;


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
     * @return Autor
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
     * Constructor
     */
    public function __construct()
    {
        $this->libros = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add libros
     *
     * @param \MPM\EntityBundle\Entity\Libro $libros
     * @return Autor
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
