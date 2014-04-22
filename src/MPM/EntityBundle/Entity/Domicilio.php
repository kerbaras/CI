<?php

namespace MPM\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domicilio
 *
 * @ORM\Table(name="domicilios")
 * @ORM\Entity(repositoryClass="MPM\EntityBundle\Entity\DomicilioRepository")
 */
class Domicilio
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
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer")
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="calle", type="string", length=255)
     */
    private $calle;

    /**
     * @var integer
     *
     * @ORM\Column(name="cp", type="integer")
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=255)
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="entre", type="string", length=255)
     */
    private $entre;

    /**
     * @var string
     *
     * @ORM\Column(name="piso", type="string", length=255)
     */
    private $piso;

    /**
     * @var string
     *
     * @ORM\Column(name="departamento", type="string", length=255)
     */
    private $departamento;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;

    /**
     * @ORM\ManyToMany(targetEntity="Telefono", inversedBy="domicilios")
     * @ORM\JoinTable(name="domicilios_telefonos")
     **/
    private $telefonos;

    /**
     * @ORM\ManyToMany(targetEntity="Persona", mappedBy="domicilios")
     **/
    private $personas;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->telefonos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set numero
     *
     * @param integer $numero
     * @return Domicilio
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set calle
     *
     * @param string $calle
     * @return Domicilio
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string 
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set cp
     *
     * @param integer $cp
     * @return Domicilio
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return integer 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     * @return Domicilio
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set entre
     *
     * @param string $entre
     * @return Domicilio
     */
    public function setEntre($entre)
    {
        $this->entre = $entre;

        return $this;
    }

    /**
     * Get entre
     *
     * @return string 
     */
    public function getEntre()
    {
        return $this->entre;
    }

    /**
     * Set piso
     *
     * @param string $piso
     * @return Domicilio
     */
    public function setPiso($piso)
    {
        $this->piso = $piso;

        return $this;
    }

    /**
     * Get piso
     *
     * @return string 
     */
    public function getPiso()
    {
        return $this->piso;
    }

    /**
     * Set departamento
     *
     * @param string $departamento
     * @return Domicilio
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return string 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Domicilio
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Add telefonos
     *
     * @param \MPM\EntityBundle\Entity\Telefono $telefonos
     * @return Domicilio
     */
    public function addTelefono(\MPM\EntityBundle\Entity\Telefono $telefonos)
    {
        $this->telefonos[] = $telefonos;

        return $this;
    }

    /**
     * Remove telefonos
     *
     * @param \MPM\EntityBundle\Entity\Telefono $telefonos
     */
    public function removeTelefono(\MPM\EntityBundle\Entity\Telefono $telefonos)
    {
        $this->telefonos->removeElement($telefonos);
    }

    /**
     * Get telefonos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTelefonos()
    {
        return $this->telefonos;
    }

    /**
     * Add personas
     *
     * @param \MPM\EntityBundle\Entity\Persona $personas
     * @return Domicilio
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
