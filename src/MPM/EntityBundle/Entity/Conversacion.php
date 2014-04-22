<?php

namespace MPM\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conversacion
 *
 * @ORM\Table(name="conversaciones")
 * @ORM\Entity(repositoryClass="MPM\EntityBundle\Entity\ConversacionRepository")
 */
class Conversacion
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
     * @ORM\Column(name="titulo", type="string", length=255)
     */
    private $titulo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCreacion", type="datetime")
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaUltimoComentario", type="datetime")
     */
    private $fechaUltimoComentario;

    /**
     * @ORM\ManyToOne(targetEntity="Persona")
     * @ORM\JoinColumn(name="persona_id", referencedColumnName="id")
     */
    private $creador;

    /**
     * @ORM\OneToMany(targetEntity="Mensaje", mappedBy="conversacion")
     */
    private $mensajes;

    /**
     * @ORM\ManyToMany(targetEntity="Persona", inversedBy="conversaciones")
     * @ORM\JoinTable(name="personas_conversaciones")
     **/
    private $personas;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->mensajes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->personas = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set titulo
     *
     * @param string $titulo
     * @return Conversacion
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Conversacion
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set fechaUltimoComentario
     *
     * @param \DateTime $fechaUltimoComentario
     * @return Conversacion
     */
    public function setFechaUltimoComentario($fechaUltimoComentario)
    {
        $this->fechaUltimoComentario = $fechaUltimoComentario;

        return $this;
    }

    /**
     * Get fechaUltimoComentario
     *
     * @return \DateTime 
     */
    public function getFechaUltimoComentario()
    {
        return $this->fechaUltimoComentario;
    }

    /**
     * Set creador
     *
     * @param \MPM\EntityBundle\Entity\Persona $creador
     * @return Conversacion
     */
    public function setCreador(\MPM\EntityBundle\Entity\Persona $creador = null)
    {
        $this->creador = $creador;

        return $this;
    }

    /**
     * Get creador
     *
     * @return \MPM\EntityBundle\Entity\Persona 
     */
    public function getCreador()
    {
        return $this->creador;
    }

    /**
     * Add mensajes
     *
     * @param \MPM\EntityBundle\Entity\Mensaje $mensajes
     * @return Conversacion
     */
    public function addMensaje(\MPM\EntityBundle\Entity\Mensaje $mensajes)
    {
        $this->mensajes[] = $mensajes;

        return $this;
    }

    /**
     * Remove mensajes
     *
     * @param \MPM\EntityBundle\Entity\Mensaje $mensajes
     */
    public function removeMensaje(\MPM\EntityBundle\Entity\Mensaje $mensajes)
    {
        $this->mensajes->removeElement($mensajes);
    }

    /**
     * Get mensajes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMensajes()
    {
        return $this->mensajes;
    }

    /**
     * Add personas
     *
     * @param \MPM\EntityBundle\Entity\Persona $personas
     * @return Conversacion
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
}
