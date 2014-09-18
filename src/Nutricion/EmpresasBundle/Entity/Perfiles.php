<?php

namespace Nutricion\EmpresasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perfiles
 *
 * @ORM\Table(name="perfiles")
 * @ORM\Entity
 */
class Perfiles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipoperfil", type="integer", nullable=false)
     */
    private $idTipoperfil;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_empresa", type="integer", nullable=false)
     */
    private $idEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=200, nullable=false)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=200, nullable=false)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=200, nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=200, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="frecuenciaEmail", type="string", length=200, nullable=false)
     */
    private $frecuenciaemail;

    /**
     * @var integer
     *
     * @ORM\Column(name="telefono_trabajo", type="integer", nullable=false)
     */
    private $telefonoTrabajo;

    /**
     * @var integer
     *
     * @ORM\Column(name="telefono_casa", type="integer", nullable=false)
     */
    private $telefonoCasa;

    /**
     * @var integer
     *
     * @ORM\Column(name="telefono_celular", type="integer", nullable=false)
     */
    private $telefonoCelular;

    /**
     * @var integer
     *
     * @ORM\Column(name="edad", type="integer", nullable=false)
     */
    private $edad;

    /**
     * @var integer
     *
     * @ORM\Column(name="estatura_metros", type="integer", nullable=false)
     */
    private $estaturaMetros;

    /**
     * @var integer
     *
     * @ORM\Column(name="estatura_centimetros", type="integer", nullable=false)
     */
    private $estaturaCentimetros;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha_nacimiento", type="string", length=20, nullable=false)
     */
    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar_nacimiento", type="string", length=200, nullable=false)
     */
    private $lugarNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha_creacion", type="string", length=20, nullable=false)
     */
    private $fechaCreacion;



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
     * Set idTipoperfil
     *
     * @param integer $idTipoperfil
     * @return Perfiles
     */
    public function setIdTipoperfil($idTipoperfil)
    {
        $this->idTipoperfil = $idTipoperfil;

        return $this;
    }

    /**
     * Get idTipoperfil
     *
     * @return integer
     */
    public function getIdTipoperfil()
    {
        return $this->idTipoperfil;
    }

    /**
     * Set idEmpresa
     *
     * @param integer $idEmpresa
     * @return Perfiles
     */
    public function setIdEmpresa($idEmpresa)
    {
        $this->idEmpresa = $idEmpresa;

        return $this;
    }

    /**
     * Get idEmpresa
     *
     * @return integer
     */
    public function getIdEmpresa()
    {
        return $this->idEmpresa;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return Perfiles
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
     * @return Perfiles
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
     * Set direccion
     *
     * @param string $direccion
     * @return Perfiles
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
     * Set email
     *
     * @param string $email
     * @return Perfiles
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
     * Set frecuenciaemail
     *
     * @param string $frecuenciaemail
     * @return Perfiles
     */
    public function setFrecuenciaemail($frecuenciaemail)
    {
        $this->frecuenciaemail = $frecuenciaemail;

        return $this;
    }

    /**
     * Get frecuenciaemail
     *
     * @return string
     */
    public function getFrecuenciaemail()
    {
        return $this->frecuenciaemail;
    }

    /**
     * Set telefonoTrabajo
     *
     * @param integer $telefonoTrabajo
     * @return Perfiles
     */
    public function setTelefonoTrabajo($telefonoTrabajo)
    {
        $this->telefonoTrabajo = $telefonoTrabajo;

        return $this;
    }

    /**
     * Get telefonoTrabajo
     *
     * @return integer
     */
    public function getTelefonoTrabajo()
    {
        return $this->telefonoTrabajo;
    }

    /**
     * Set telefonoCasa
     *
     * @param integer $telefonoCasa
     * @return Perfiles
     */
    public function setTelefonoCasa($telefonoCasa)
    {
        $this->telefonoCasa = $telefonoCasa;

        return $this;
    }

    /**
     * Get telefonoCasa
     *
     * @return integer
     */
    public function getTelefonoCasa()
    {
        return $this->telefonoCasa;
    }

    /**
     * Set telefonoCelular
     *
     * @param integer $telefonoCelular
     * @return Perfiles
     */
    public function setTelefonoCelular($telefonoCelular)
    {
        $this->telefonoCelular = $telefonoCelular;

        return $this;
    }

    /**
     * Get telefonoCelular
     *
     * @return integer
     */
    public function getTelefonoCelular()
    {
        return $this->telefonoCelular;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     * @return Perfiles
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set estaturaMetros
     *
     * @param integer $estaturaMetros
     * @return Perfiles
     */
    public function setEstaturaMetros($estaturaMetros)
    {
        $this->estaturaMetros = $estaturaMetros;

        return $this;
    }

    /**
     * Get estaturaMetros
     *
     * @return integer
     */
    public function getEstaturaMetros()
    {
        return $this->estaturaMetros;
    }

    /**
     * Set estaturaCentimetros
     *
     * @param integer $estaturaCentimetros
     * @return Perfiles
     */
    public function setEstaturaCentimetros($estaturaCentimetros)
    {
        $this->estaturaCentimetros = $estaturaCentimetros;

        return $this;
    }

    /**
     * Get estaturaCentimetros
     *
     * @return integer
     */
    public function getEstaturaCentimetros()
    {
        return $this->estaturaCentimetros;
    }

    /**
     * Set fechaNacimiento
     *
     * @param string $fechaNacimiento
     * @return Perfiles
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return string
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set lugarNacimiento
     *
     * @param string $lugarNacimiento
     * @return Perfiles
     */
    public function setLugarNacimiento($lugarNacimiento)
    {
        $this->lugarNacimiento = $lugarNacimiento;

        return $this;
    }

    /**
     * Get lugarNacimiento
     *
     * @return string
     */
    public function getLugarNacimiento()
    {
        return $this->lugarNacimiento;
    }

    /**
     * Set fechaCreacion
     *
     * @param string $fechaCreacion
     * @return Perfiles
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return string
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }
}
