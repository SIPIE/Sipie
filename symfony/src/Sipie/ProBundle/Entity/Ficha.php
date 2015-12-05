<?php
namespace Sipie\ProBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Ficha
 *
 * @ORM\Table()
 * @ORM\Entity
 */
 
class Ficha
{
    /**
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="usuario", referencedColumnName="id")
     */
    private $usuario;

    /**
     * @ORM\ManyToOne(targetEntity="Paciente")
     * @ORM\JoinColumn(name="paciente", referencedColumnName="id")
     */
    private $paciente;


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
     * Set usuario
     *
     * @param \Sipie\ProBundle\Entity\Usuario $usuario
     *
     * @return Ficha
     */
    public function setUsuario(\Sipie\ProBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Sipie\ProBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set paciente
     *
     * @param \Sipie\ProBundle\Entity\Paciente $paciente
     *
     * @return Ficha
     */
    public function setPaciente(\Sipie\ProBundle\Entity\Paciente $paciente = null)
    {
        $this->paciente = $paciente;

        return $this;
    }

    /**
     * Get paciente
     *
     * @return \Sipie\ProBundle\Entity\Paciente
     */
    public function getPaciente()
    {
        return $this->paciente;
    }
}
