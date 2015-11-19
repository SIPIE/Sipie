<?php

namespace Login\LoginBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="participante")
 */
class Participante
{   
    /**
     * @ORM\Column(name="id", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    
    /**
     * 
     * @ORM\Column(name="rut", type="string", length=20)
    private $rut;
    
    /**
     * @ORM\Column(name="nombres", type="string", length=120)
     */
    private $nombres;

    /**
     * @ORM\Column(name="apellidos", type="string", length=120)
     */
    private $apellidos;

    /**
     * @ORM\Column(name="telefono", type="string", length=20)
     */
    private $telefono;

    /**
     * @ORM\Column(name="email", type="string", length=120)
     */
    private $email;

    /**
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @ORM\Column(name="sexo", type="string", length=20)
     */
    private $sexo;

    /**
     * @ORM\Column(name="tipo", type="string", length=20)
     */
    private $tipo;

    /**
     * @ORM\Column(name="fechanacimiento", type="string", length=20)
     */
    private $fechanacimiento;

    /**
     * @ORM\Column(name="lateralidad", type="string", length=20)
     */
    private $lateralidad;


    
    /**
     * @var string
     */
    private $rut;


    /**
     * Set nombres
     *
     * @param string $nombres
     *
     * @return Participante
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Participante
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Participante
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
     * Set email
     *
     * @param string $email
     *
     * @return Participante
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Participante
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Participante
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Participante
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
     * Set fechanacimiento
     *
     * @param string $fechanacimiento
     *
     * @return Participante
     */
    public function setFechanacimiento($fechanacimiento)
    {
        $this->fechanacimiento = $fechanacimiento;

        return $this;
    }

    /**
     * Get fechanacimiento
     *
     * @return string
     */
    public function getFechanacimiento()
    {
        return $this->fechanacimiento;
    }

    /**
     * Set lateralidad
     *
     * @param string $lateralidad
     *
     * @return Participante
     */
    public function setLateralidad($lateralidad)
    {
        $this->lateralidad = $lateralidad;

        return $this;
    }

    /**
     * Get lateralidad
     *
     * @return string
     */
    public function getLateralidad()
    {
        return $this->lateralidad;
    }

    /**
     * Get rut
     *
     * @return string
     */
    public function getRut()
    {
        return $this->rut;
    }

    /**
     * Set rut
     *
     * @param string $rut
     *
     * @return Participante
     */
    public function setRut($rut)
    {
        $this->rut = $rut;

        return $this;
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
}
