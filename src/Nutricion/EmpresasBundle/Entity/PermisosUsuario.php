<?php

namespace Nutricion\EmpresasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PermisosUsuario
 *
 * @ORM\Table(name="permisos_usuario", uniqueConstraints={@ORM\UniqueConstraint(name="usuario", columns={"usuario", "permiso"})})
 * @ORM\Entity
 */
class PermisosUsuario
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
     * @ORM\Column(name="usuario", type="integer", nullable=false)
     */
    private $usuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="permiso", type="integer", nullable=false)
     */
    private $permiso;

    /**
     * @var boolean
     *
     * @ORM\Column(name="valor", type="boolean", nullable=false)
     */
    private $valor;



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
     * @param integer $usuario
     * @return PermisosUsuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return integer 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set permiso
     *
     * @param integer $permiso
     * @return PermisosUsuario
     */
    public function setPermiso($permiso)
    {
        $this->permiso = $permiso;

        return $this;
    }

    /**
     * Get permiso
     *
     * @return integer 
     */
    public function getPermiso()
    {
        return $this->permiso;
    }

    /**
     * Set valor
     *
     * @param boolean $valor
     * @return PermisosUsuario
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return boolean 
     */
    public function getValor()
    {
        return $this->valor;
    }
}
