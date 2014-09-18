<?php

namespace Nutricion\EmpresasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoTelefono
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nutricion\EmpresasBundle\Entity\TipoTelefonoRepository")
 */
class TipoTelefono
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
     * @ORM\Column(name="tipo_telefono", type="string", length=255)
     */
    private $tipoTelefono;


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
     * Set tipoTelefono
     *
     * @param string $tipoTelefono
     * @return TipoTelefono
     */
    public function setTipoTelefono($tipoTelefono)
    {
        $this->tipoTelefono = $tipoTelefono;

        return $this;
    }

    /**
     * Get tipoTelefono
     *
     * @return string 
     */
    public function getTipoTelefono()
    {
        return $this->tipoTelefono;
    }
}
