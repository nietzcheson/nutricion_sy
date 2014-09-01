<?php

namespace Nutricion\EmpresasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GruposSanguineos
 *
 * @ORM\Table(name="grupos_sanguineos")
 * @ORM\Entity
 */
class GruposSanguineos
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
     * @var string
     *
     * @ORM\Column(name="grupo_sanguineo", type="string", length=100, nullable=false)
     */
    private $grupoSanguineo;



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
     * Set grupoSanguineo
     *
     * @param string $grupoSanguineo
     * @return GruposSanguineos
     */
    public function setGrupoSanguineo($grupoSanguineo)
    {
        $this->grupoSanguineo = $grupoSanguineo;

        return $this;
    }

    /**
     * Get grupoSanguineo
     *
     * @return string 
     */
    public function getGrupoSanguineo()
    {
        return $this->grupoSanguineo;
    }
}
