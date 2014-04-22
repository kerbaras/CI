<?php

namespace MPM\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Libro
 *
 * @ORM\Table(name="bib_libros")
 * @ORM\Entity(repositoryClass="MPM\EntityBundle\Entity\LibroRepository")
 */
class Libro
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
     * @ORM\Column(name="isbn", type="string", length=255)
     */
    private $isbn;

    /**
     * @ORM\ManyToMany(targetEntity="Autor", inversedBy="libros")
     * @ORM\JoinTable(name="libros_autores")
     **/
    private $autores;

    /**
     * @ORM\ManyToOne(targetEntity="Editorial", inversedBy="libros")
     * @ORM\JoinColumn(name="editorial_id", referencedColumnName="id")
     */
    private $editorial;

    /**
     * @ORM\ManyToMany(targetEntity="Estante", mappedBy="libros")
     **/
    private $estantes;


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
     * @return Libro
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
     * Set isbn
     *
     * @param string $isbn
     * @return Libro
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string 
     */
    public function getIsbn()
    {
        return $this->isbn;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->autores = new \Doctrine\Common\Collections\ArrayCollection();
        $this->estantes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add autores
     *
     * @param \MPM\EntityBundle\Entity\Autor $autores
     * @return Libro
     */
    public function addAutore(\MPM\EntityBundle\Entity\Autor $autores)
    {
        $this->autores[] = $autores;

        return $this;
    }

    /**
     * Remove autores
     *
     * @param \MPM\EntityBundle\Entity\Autor $autores
     */
    public function removeAutore(\MPM\EntityBundle\Entity\Autor $autores)
    {
        $this->autores->removeElement($autores);
    }

    /**
     * Get autores
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAutores()
    {
        return $this->autores;
    }

    /**
     * Set editorial
     *
     * @param \MPM\EntityBundle\Entity\Editorial $editorial
     * @return Libro
     */
    public function setEditorial(\MPM\EntityBundle\Entity\Editorial $editorial = null)
    {
        $this->editorial = $editorial;

        return $this;
    }

    /**
     * Get editorial
     *
     * @return \MPM\EntityBundle\Entity\Editorial 
     */
    public function getEditorial()
    {
        return $this->editorial;
    }

    /**
     * Add estantes
     *
     * @param \MPM\EntityBundle\Entity\Estante $estantes
     * @return Libro
     */
    public function addEstante(\MPM\EntityBundle\Entity\Estante $estantes)
    {
        $this->estantes[] = $estantes;

        return $this;
    }

    /**
     * Remove estantes
     *
     * @param \MPM\EntityBundle\Entity\Estante $estantes
     */
    public function removeEstante(\MPM\EntityBundle\Entity\Estante $estantes)
    {
        $this->estantes->removeElement($estantes);
    }

    /**
     * Get estantes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEstantes()
    {
        return $this->estantes;
    }
}
