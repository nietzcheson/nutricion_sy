<?php

namespace Nutricion\EmpresasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permisos
 *
 * @ORM\Table(name="permisos")
 * @ORM\Entity
 */
class Permisos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_permiso", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPermiso;

    /**
     * @var string
     *
     * @ORM\Column(name="permiso", type="string", length=100, nullable=false)
     */
    private $permiso;

    /**
     * @var string
     *
     * @ORM\Column(name="llave", type="string", length=50, nullable=false)
     */
    private $llave;



    /**
     * Get idPermiso
     *
     * @return integer 
     */
    public function getIdPermiso()
    {
        return $this->idPermiso;
    }

    /**
     * Set permiso
     *
     * @param string $permiso
     * @return Permisos
     */
    public function setPermiso($permiso)
    {
        $this->permiso = $permiso;

        return $this;
    }

    /**
     * Get permiso
     *
     * @return string 
     */
    public function getPermiso()
    {
        return $this->permiso;
    }

    /**
     * Set llave
     *
     * @param string $llave
     * @return Permisos
     */
    public function setLlave($llave)
    {
        $this->llave = $llave;

        return $this;
    }

    /**
     * Get llave
     *
     * @return string 
     */
    public function getLlave()
    {
        return $this->llave;
    }
}
