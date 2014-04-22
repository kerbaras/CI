<?php

namespace MPM\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Editorial
 *
 * @ORM\Table(name="bib_editoriales")
 * @ORM\Entity(repositoryClass="MPM\EntityBundle\Entity\EditorialRepository")
 */
class Editorial
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
     * @ORM\Column(name="telefono", type="string", length=255)
     */
    private $telefono;

    /**
     * @ORM\OneToMany(targetEntity="Libro", mappedBy="editorial")
     */
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
     * @return Editorial
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
     * Set telefono
     *
     * @param string $telefono
     * @return Editorial
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
     * @return Editorial
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
