<?php

namespace Nutricion\EmpresasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sesiones
 *
 * @ORM\Table(name="sesiones")
 * @ORM\Entity
 */
class Sesiones
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
     * @ORM\Column(name="id_perfil", type="integer", nullable=false)
     */
    private $idPerfil;

    /**
     * @var integer
     *
     * @ORM\Column(name="peso", type="integer", nullable=false)
     */
    private $peso;

    /**
     * @var integer
     *
     * @ORM\Column(name="cintura", type="integer", nullable=false)
     */
    private $cintura;

    /**
     * @var integer
     *
     * @ORM\Column(name="porcentaje_grasa", type="integer", nullable=false)
     */
    private $porcentajeGrasa;

    /**
     * @var integer
     *
     * @ORM\Column(name="ausentismo", type="integer", nullable=false)
     */
    private $ausentismo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cuantas_veces", type="integer", nullable=false)
     */
    private $cuantasVeces;

    /**
     * @var string
     *
     * @ORM\Column(name="explique_ausentismo", type="text", nullable=false)
     */
    private $expliqueAusentismo;

    /**
     * @var integer
     *
     * @ORM\Column(name="accidentes_laborales", type="integer", nullable=false)
     */
    private $accidentesLaborales;

    /**
     * @var string
     *
     * @ORM\Column(name="explique_accidentes", type="text", nullable=false)
     */
    private $expliqueAccidentes;

    /**
     * @var integer
     *
     * @ORM\Column(name="satisfaccion_laboral", type="integer", nullable=false)
     */
    private $satisfaccionLaboral;

    /**
     * @var integer
     *
     * @ORM\Column(name="indice_de_masa", type="integer", nullable=false)
     */
    private $indiceDeMasa;

    /**
     * @var integer
     *
     * @ORM\Column(name="horas_sueno", type="integer", nullable=false)
     */
    private $horasSueno;

    /**
     * @var integer
     *
     * @ORM\Column(name="cafe", type="integer", nullable=false)
     */
    private $cafe;

    /**
     * @var integer
     *
     * @ORM\Column(name="azucar", type="integer", nullable=false)
     */
    private $azucar;

    /**
     * @var integer
     *
     * @ORM\Column(name="refrescos", type="integer", nullable=false)
     */
    private $refrescos;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_lacteo", type="integer", nullable=false)
     */
    private $tipoLacteo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad_lacteo", type="integer", nullable=false)
     */
    private $cantidadLacteo;

    /**
     * @var string
     *
     * @ORM\Column(name="comentarios", type="text", nullable=false)
     */
    private $comentarios;

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
     * Set idPerfil
     *
     * @param integer $idPerfil
     * @return Sesiones
     */
    public function setIdPerfil($idPerfil)
    {
        $this->idPerfil = $idPerfil;

        return $this;
    }

    /**
     * Get idPerfil
     *
     * @return integer 
     */
    public function getIdPerfil()
    {
        return $this->idPerfil;
    }

    /**
     * Set peso
     *
     * @param integer $peso
     * @return Sesiones
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return integer 
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set cintura
     *
     * @param integer $cintura
     * @return Sesiones
     */
    public function setCintura($cintura)
    {
        $this->cintura = $cintura;

        return $this;
    }

    /**
     * Get cintura
     *
     * @return integer 
     */
    public function getCintura()
    {
        return $this->cintura;
    }

    /**
     * Set porcentajeGrasa
     *
     * @param integer $porcentajeGrasa
     * @return Sesiones
     */
    public function setPorcentajeGrasa($porcentajeGrasa)
    {
        $this->porcentajeGrasa = $porcentajeGrasa;

        return $this;
    }

    /**
     * Get porcentajeGrasa
     *
     * @return integer 
     */
    public function getPorcentajeGrasa()
    {
        return $this->porcentajeGrasa;
    }

    /**
     * Set ausentismo
     *
     * @param integer $ausentismo
     * @return Sesiones
     */
    public function setAusentismo($ausentismo)
    {
        $this->ausentismo = $ausentismo;

        return $this;
    }

    /**
     * Get ausentismo
     *
     * @return integer 
     */
    public function getAusentismo()
    {
        return $this->ausentismo;
    }

    /**
     * Set cuantasVeces
     *
     * @param integer $cuantasVeces
     * @return Sesiones
     */
    public function setCuantasVeces($cuantasVeces)
    {
        $this->cuantasVeces = $cuantasVeces;

        return $this;
    }

    /**
     * Get cuantasVeces
     *
     * @return integer 
     */
    public function getCuantasVeces()
    {
        return $this->cuantasVeces;
    }

    /**
     * Set expliqueAusentismo
     *
     * @param string $expliqueAusentismo
     * @return Sesiones
     */
    public function setExpliqueAusentismo($expliqueAusentismo)
    {
        $this->expliqueAusentismo = $expliqueAusentismo;

        return $this;
    }

    /**
     * Get expliqueAusentismo
     *
     * @return string 
     */
    public function getExpliqueAusentismo()
    {
        return $this->expliqueAusentismo;
    }

    /**
     * Set accidentesLaborales
     *
     * @param integer $accidentesLaborales
     * @return Sesiones
     */
    public function setAccidentesLaborales($accidentesLaborales)
    {
        $this->accidentesLaborales = $accidentesLaborales;

        return $this;
    }

    /**
     * Get accidentesLaborales
     *
     * @return integer 
     */
    public function getAccidentesLaborales()
    {
        return $this->accidentesLaborales;
    }

    /**
     * Set expliqueAccidentes
     *
     * @param string $expliqueAccidentes
     * @return Sesiones
     */
    public function setExpliqueAccidentes($expliqueAccidentes)
    {
        $this->expliqueAccidentes = $expliqueAccidentes;

        return $this;
    }

    /**
     * Get expliqueAccidentes
     *
     * @return string 
     */
    public function getExpliqueAccidentes()
    {
        return $this->expliqueAccidentes;
    }

    /**
     * Set satisfaccionLaboral
     *
     * @param integer $satisfaccionLaboral
     * @return Sesiones
     */
    public function setSatisfaccionLaboral($satisfaccionLaboral)
    {
        $this->satisfaccionLaboral = $satisfaccionLaboral;

        return $this;
    }

    /**
     * Get satisfaccionLaboral
     *
     * @return integer 
     */
    public function getSatisfaccionLaboral()
    {
        return $this->satisfaccionLaboral;
    }

    /**
     * Set indiceDeMasa
     *
     * @param integer $indiceDeMasa
     * @return Sesiones
     */
    public function setIndiceDeMasa($indiceDeMasa)
    {
        $this->indiceDeMasa = $indiceDeMasa;

        return $this;
    }

    /**
     * Get indiceDeMasa
     *
     * @return integer 
     */
    public function getIndiceDeMasa()
    {
        return $this->indiceDeMasa;
    }

    /**
     * Set horasSueno
     *
     * @param integer $horasSueno
     * @return Sesiones
     */
    public function setHorasSueno($horasSueno)
    {
        $this->horasSueno = $horasSueno;

        return $this;
    }

    /**
     * Get horasSueno
     *
     * @return integer 
     */
    public function getHorasSueno()
    {
        return $this->horasSueno;
    }

    /**
     * Set cafe
     *
     * @param integer $cafe
     * @return Sesiones
     */
    public function setCafe($cafe)
    {
        $this->cafe = $cafe;

        return $this;
    }

    /**
     * Get cafe
     *
     * @return integer 
     */
    public function getCafe()
    {
        return $this->cafe;
    }

    /**
     * Set azucar
     *
     * @param integer $azucar
     * @return Sesiones
     */
    public function setAzucar($azucar)
    {
        $this->azucar = $azucar;

        return $this;
    }

    /**
     * Get azucar
     *
     * @return integer 
     */
    public function getAzucar()
    {
        return $this->azucar;
    }

    /**
     * Set refrescos
     *
     * @param integer $refrescos
     * @return Sesiones
     */
    public function setRefrescos($refrescos)
    {
        $this->refrescos = $refrescos;

        return $this;
    }

    /**
     * Get refrescos
     *
     * @return integer 
     */
    public function getRefrescos()
    {
        return $this->refrescos;
    }

    /**
     * Set tipoLacteo
     *
     * @param integer $tipoLacteo
     * @return Sesiones
     */
    public function setTipoLacteo($tipoLacteo)
    {
        $this->tipoLacteo = $tipoLacteo;

        return $this;
    }

    /**
     * Get tipoLacteo
     *
     * @return integer 
     */
    public function getTipoLacteo()
    {
        return $this->tipoLacteo;
    }

    /**
     * Set cantidadLacteo
     *
     * @param integer $cantidadLacteo
     * @return Sesiones
     */
    public function setCantidadLacteo($cantidadLacteo)
    {
        $this->cantidadLacteo = $cantidadLacteo;

        return $this;
    }

    /**
     * Get cantidadLacteo
     *
     * @return integer 
     */
    public function getCantidadLacteo()
    {
        return $this->cantidadLacteo;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return Sesiones
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set fechaCreacion
     *
     * @param string $fechaCreacion
     * @return Sesiones
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
