<?php

namespace MPM\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pelicula
 *
 * @ORM\Table(name="peliculas")
 * @ORM\Entity(repositoryClass="MPM\EntityBundle\Entity\PeliculaRepository")
 */
class Pelicula
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
     * @var integer
     *
     * @ORM\Column(name="ano", type="smallint")
     */
    private $ano;

    /**
     * @var array
     *
     * @ORM\Column(name="idioma", type="array")
     */
    private $idioma;

    /**
     * @var array
     *
     * @ORM\Column(name="subtitulos", type="array")
     */
    private $subtitulos;

    /**
     * @var string
     *
     * @ORM\Column(name="duracion", type="decimal")
     */
    private $duracion;

    /**
     * @var string
     *
     * @ORM\Column(name="argumento", type="text")
     */
    private $argumento;

    /**
     * @ORM\ManyToMany(targetEntity="PeliculaCategoria", inversedBy="peliculas")
     * @ORM\JoinTable(name="peliculas_categorias")
     **/
    private $categorias;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categorias = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Pelicula
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
     * Set ano
     *
     * @param integer $ano
     * @return Pelicula
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set idioma
     *
     * @param array $idioma
     * @return Pelicula
     */
    public function setIdioma($idioma)
    {
        $this->idioma = $idioma;

        return $this;
    }

    /**
     * Get idioma
     *
     * @return array 
     */
    public function getIdioma()
    {
        return $this->idioma;
    }

    /**
     * Set subtitulos
     *
     * @param array $subtitulos
     * @return Pelicula
     */
    public function setSubtitulos($subtitulos)
    {
        $this->subtitulos = $subtitulos;

        return $this;
    }

    /**
     * Get subtitulos
     *
     * @return array 
     */
    public function getSubtitulos()
    {
        return $this->subtitulos;
    }

    /**
     * Set duracion
     *
     * @param string $duracion
     * @return Pelicula
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return string 
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set argumento
     *
     * @param string $argumento
     * @return Pelicula
     */
    public function setArgumento($argumento)
    {
        $this->argumento = $argumento;

        return $this;
    }

    /**
     * Get argumento
     *
     * @return string 
     */
    public function getArgumento()
    {
        return $this->argumento;
    }

    /**
     * Add categorias
     *
     * @param \MPM\EntityBundle\Entity\PeliculaCategoria $categorias
     * @return Pelicula
     */
    public function addCategoria(\MPM\EntityBundle\Entity\PeliculaCategoria $categorias)
    {
        $this->categorias[] = $categorias;

        return $this;
    }

    /**
     * Remove categorias
     *
     * @param \MPM\EntityBundle\Entity\PeliculaCategoria $categorias
     */
    public function removeCategoria(\MPM\EntityBundle\Entity\PeliculaCategoria $categorias)
    {
        $this->categorias->removeElement($categorias);
    }

    /**
     * Get categorias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategorias()
    {
        return $this->categorias;
    }
}
