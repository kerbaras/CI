<?php

namespace MPM\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PeliculaCategoria
 *
 * @ORM\Table(name="pel_categorias")
 * @ORM\Entity(repositoryClass="MPM\EntityBundle\Entity\PeliculaCategoriaRepository")
 */
class PeliculaCategoria
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
     * @ORM\ManyToMany(targetEntity="Pelicula", mappedBy="categorias")
     */
    private $peliculas;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->peliculas = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return PeliculaCategoria
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
     * Add peliculas
     *
     * @param \MPM\EntityBundle\Entity\Pelicula $peliculas
     * @return PeliculaCategoria
     */
    public function addPelicula(\MPM\EntityBundle\Entity\Pelicula $peliculas)
    {
        $this->peliculas[] = $peliculas;

        return $this;
    }

    /**
     * Remove peliculas
     *
     * @param \MPM\EntityBundle\Entity\Pelicula $peliculas
     */
    public function removePelicula(\MPM\EntityBundle\Entity\Pelicula $peliculas)
    {
        $this->peliculas->removeElement($peliculas);
    }

    /**
     * Get peliculas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPeliculas()
    {
        return $this->peliculas;
    }
}
