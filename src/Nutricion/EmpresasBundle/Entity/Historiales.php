<?php

namespace Nutricion\EmpresasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historiales
 *
 * @ORM\Table(name="historiales")
 * @ORM\Entity
 */
class Historiales
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
     * @var string
     *
     * @ORM\Column(name="p1", type="text", nullable=false)
     */
    private $p1;

    /**
     * @var string
     *
     * @ORM\Column(name="p2", type="text", nullable=false)
     */
    private $p2;

    /**
     * @var string
     *
     * @ORM\Column(name="p3", type="text", nullable=false)
     */
    private $p3;

    /**
     * @var string
     *
     * @ORM\Column(name="p4", type="text", nullable=false)
     */
    private $p4;

    /**
     * @var string
     *
     * @ORM\Column(name="p5", type="text", nullable=false)
     */
    private $p5;

    /**
     * @var string
     *
     * @ORM\Column(name="p6", type="text", nullable=false)
     */
    private $p6;

    /**
     * @var string
     *
     * @ORM\Column(name="p7", type="text", nullable=false)
     */
    private $p7;

    /**
     * @var string
     *
     * @ORM\Column(name="p8", type="text", nullable=false)
     */
    private $p8;

    /**
     * @var string
     *
     * @ORM\Column(name="p9", type="text", nullable=false)
     */
    private $p9;

    /**
     * @var string
     *
     * @ORM\Column(name="p10", type="text", nullable=false)
     */
    private $p10;

    /**
     * @var string
     *
     * @ORM\Column(name="p11", type="text", nullable=false)
     */
    private $p11;

    /**
     * @var string
     *
     * @ORM\Column(name="p12", type="text", nullable=false)
     */
    private $p12;

    /**
     * @var string
     *
     * @ORM\Column(name="p13", type="text", nullable=false)
     */
    private $p13;

    /**
     * @var string
     *
     * @ORM\Column(name="p14", type="text", nullable=false)
     */
    private $p14;

    /**
     * @var string
     *
     * @ORM\Column(name="p15", type="text", nullable=false)
     */
    private $p15;

    /**
     * @var string
     *
     * @ORM\Column(name="p16", type="text", nullable=false)
     */
    private $p16;

    /**
     * @var string
     *
     * @ORM\Column(name="p17", type="text", nullable=false)
     */
    private $p17;

    /**
     * @var string
     *
     * @ORM\Column(name="p18", type="text", nullable=false)
     */
    private $p18;

    /**
     * @var string
     *
     * @ORM\Column(name="p19", type="text", nullable=false)
     */
    private $p19;

    /**
     * @var string
     *
     * @ORM\Column(name="p20", type="text", nullable=false)
     */
    private $p20;

    /**
     * @var string
     *
     * @ORM\Column(name="p21", type="text", nullable=false)
     */
    private $p21;

    /**
     * @var string
     *
     * @ORM\Column(name="p22", type="text", nullable=false)
     */
    private $p22;

    /**
     * @var string
     *
     * @ORM\Column(name="p23", type="text", nullable=false)
     */
    private $p23;

    /**
     * @var string
     *
     * @ORM\Column(name="p24", type="text", nullable=false)
     */
    private $p24;

    /**
     * @var string
     *
     * @ORM\Column(name="p25", type="text", nullable=false)
     */
    private $p25;

    /**
     * @var string
     *
     * @ORM\Column(name="p26", type="text", nullable=false)
     */
    private $p26;

    /**
     * @var string
     *
     * @ORM\Column(name="p27", type="text", nullable=false)
     */
    private $p27;

    /**
     * @var string
     *
     * @ORM\Column(name="p28", type="text", nullable=false)
     */
    private $p28;

    /**
     * @var string
     *
     * @ORM\Column(name="p29", type="text", nullable=false)
     */
    private $p29;

    /**
     * @var string
     *
     * @ORM\Column(name="p30", type="text", nullable=false)
     */
    private $p30;

    /**
     * @var string
     *
     * @ORM\Column(name="p31", type="text", nullable=false)
     */
    private $p31;

    /**
     * @var string
     *
     * @ORM\Column(name="p32", type="text", nullable=false)
     */
    private $p32;

    /**
     * @var string
     *
     * @ORM\Column(name="p33", type="text", nullable=false)
     */
    private $p33;

    /**
     * @var string
     *
     * @ORM\Column(name="p34", type="text", nullable=false)
     */
    private $p34;

    /**
     * @var string
     *
     * @ORM\Column(name="p35", type="text", nullable=false)
     */
    private $p35;

    /**
     * @var string
     *
     * @ORM\Column(name="p36", type="text", nullable=false)
     */
    private $p36;

    /**
     * @var string
     *
     * @ORM\Column(name="p37", type="text", nullable=false)
     */
    private $p37;

    /**
     * @var string
     *
     * @ORM\Column(name="p38", type="text", nullable=false)
     */
    private $p38;

    /**
     * @var string
     *
     * @ORM\Column(name="p39", type="text", nullable=false)
     */
    private $p39;

    /**
     * @var string
     *
     * @ORM\Column(name="p40", type="text", nullable=false)
     */
    private $p40;

    /**
     * @var string
     *
     * @ORM\Column(name="p41", type="text", nullable=false)
     */
    private $p41;

    /**
     * @var string
     *
     * @ORM\Column(name="p42", type="text", nullable=false)
     */
    private $p42;

    /**
     * @var string
     *
     * @ORM\Column(name="p43", type="text", nullable=false)
     */
    private $p43;

    /**
     * @var string
     *
     * @ORM\Column(name="p44", type="text", nullable=false)
     */
    private $p44;

    /**
     * @var string
     *
     * @ORM\Column(name="p45", type="text", nullable=false)
     */
    private $p45;



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
     * @return Historiales
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
     * Set p1
     *
     * @param string $p1
     * @return Historiales
     */
    public function setP1($p1)
    {
        $this->p1 = $p1;

        return $this;
    }

    /**
     * Get p1
     *
     * @return string 
     */
    public function getP1()
    {
        return $this->p1;
    }

    /**
     * Set p2
     *
     * @param string $p2
     * @return Historiales
     */
    public function setP2($p2)
    {
        $this->p2 = $p2;

        return $this;
    }

    /**
     * Get p2
     *
     * @return string 
     */
    public function getP2()
    {
        return $this->p2;
    }

    /**
     * Set p3
     *
     * @param string $p3
     * @return Historiales
     */
    public function setP3($p3)
    {
        $this->p3 = $p3;

        return $this;
    }

    /**
     * Get p3
     *
     * @return string 
     */
    public function getP3()
    {
        return $this->p3;
    }

    /**
     * Set p4
     *
     * @param string $p4
     * @return Historiales
     */
    public function setP4($p4)
    {
        $this->p4 = $p4;

        return $this;
    }

    /**
     * Get p4
     *
     * @return string 
     */
    public function getP4()
    {
        return $this->p4;
    }

    /**
     * Set p5
     *
     * @param string $p5
     * @return Historiales
     */
    public function setP5($p5)
    {
        $this->p5 = $p5;

        return $this;
    }

    /**
     * Get p5
     *
     * @return string 
     */
    public function getP5()
    {
        return $this->p5;
    }

    /**
     * Set p6
     *
     * @param string $p6
     * @return Historiales
     */
    public function setP6($p6)
    {
        $this->p6 = $p6;

        return $this;
    }

    /**
     * Get p6
     *
     * @return string 
     */
    public function getP6()
    {
        return $this->p6;
    }

    /**
     * Set p7
     *
     * @param string $p7
     * @return Historiales
     */
    public function setP7($p7)
    {
        $this->p7 = $p7;

        return $this;
    }

    /**
     * Get p7
     *
     * @return string 
     */
    public function getP7()
    {
        return $this->p7;
    }

    /**
     * Set p8
     *
     * @param string $p8
     * @return Historiales
     */
    public function setP8($p8)
    {
        $this->p8 = $p8;

        return $this;
    }

    /**
     * Get p8
     *
     * @return string 
     */
    public function getP8()
    {
        return $this->p8;
    }

    /**
     * Set p9
     *
     * @param string $p9
     * @return Historiales
     */
    public function setP9($p9)
    {
        $this->p9 = $p9;

        return $this;
    }

    /**
     * Get p9
     *
     * @return string 
     */
    public function getP9()
    {
        return $this->p9;
    }

    /**
     * Set p10
     *
     * @param string $p10
     * @return Historiales
     */
    public function setP10($p10)
    {
        $this->p10 = $p10;

        return $this;
    }

    /**
     * Get p10
     *
     * @return string 
     */
    public function getP10()
    {
        return $this->p10;
    }

    /**
     * Set p11
     *
     * @param string $p11
     * @return Historiales
     */
    public function setP11($p11)
    {
        $this->p11 = $p11;

        return $this;
    }

    /**
     * Get p11
     *
     * @return string 
     */
    public function getP11()
    {
        return $this->p11;
    }

    /**
     * Set p12
     *
     * @param string $p12
     * @return Historiales
     */
    public function setP12($p12)
    {
        $this->p12 = $p12;

        return $this;
    }

    /**
     * Get p12
     *
     * @return string 
     */
    public function getP12()
    {
        return $this->p12;
    }

    /**
     * Set p13
     *
     * @param string $p13
     * @return Historiales
     */
    public function setP13($p13)
    {
        $this->p13 = $p13;

        return $this;
    }

    /**
     * Get p13
     *
     * @return string 
     */
    public function getP13()
    {
        return $this->p13;
    }

    /**
     * Set p14
     *
     * @param string $p14
     * @return Historiales
     */
    public function setP14($p14)
    {
        $this->p14 = $p14;

        return $this;
    }

    /**
     * Get p14
     *
     * @return string 
     */
    public function getP14()
    {
        return $this->p14;
    }

    /**
     * Set p15
     *
     * @param string $p15
     * @return Historiales
     */
    public function setP15($p15)
    {
        $this->p15 = $p15;

        return $this;
    }

    /**
     * Get p15
     *
     * @return string 
     */
    public function getP15()
    {
        return $this->p15;
    }

    /**
     * Set p16
     *
     * @param string $p16
     * @return Historiales
     */
    public function setP16($p16)
    {
        $this->p16 = $p16;

        return $this;
    }

    /**
     * Get p16
     *
     * @return string 
     */
    public function getP16()
    {
        return $this->p16;
    }

    /**
     * Set p17
     *
     * @param string $p17
     * @return Historiales
     */
    public function setP17($p17)
    {
        $this->p17 = $p17;

        return $this;
    }

    /**
     * Get p17
     *
     * @return string 
     */
    public function getP17()
    {
        return $this->p17;
    }

    /**
     * Set p18
     *
     * @param string $p18
     * @return Historiales
     */
    public function setP18($p18)
    {
        $this->p18 = $p18;

        return $this;
    }

    /**
     * Get p18
     *
     * @return string 
     */
    public function getP18()
    {
        return $this->p18;
    }

    /**
     * Set p19
     *
     * @param string $p19
     * @return Historiales
     */
    public function setP19($p19)
    {
        $this->p19 = $p19;

        return $this;
    }

    /**
     * Get p19
     *
     * @return string 
     */
    public function getP19()
    {
        return $this->p19;
    }

    /**
     * Set p20
     *
     * @param string $p20
     * @return Historiales
     */
    public function setP20($p20)
    {
        $this->p20 = $p20;

        return $this;
    }

    /**
     * Get p20
     *
     * @return string 
     */
    public function getP20()
    {
        return $this->p20;
    }

    /**
     * Set p21
     *
     * @param string $p21
     * @return Historiales
     */
    public function setP21($p21)
    {
        $this->p21 = $p21;

        return $this;
    }

    /**
     * Get p21
     *
     * @return string 
     */
    public function getP21()
    {
        return $this->p21;
    }

    /**
     * Set p22
     *
     * @param string $p22
     * @return Historiales
     */
    public function setP22($p22)
    {
        $this->p22 = $p22;

        return $this;
    }

    /**
     * Get p22
     *
     * @return string 
     */
    public function getP22()
    {
        return $this->p22;
    }

    /**
     * Set p23
     *
     * @param string $p23
     * @return Historiales
     */
    public function setP23($p23)
    {
        $this->p23 = $p23;

        return $this;
    }

    /**
     * Get p23
     *
     * @return string 
     */
    public function getP23()
    {
        return $this->p23;
    }

    /**
     * Set p24
     *
     * @param string $p24
     * @return Historiales
     */
    public function setP24($p24)
    {
        $this->p24 = $p24;

        return $this;
    }

    /**
     * Get p24
     *
     * @return string 
     */
    public function getP24()
    {
        return $this->p24;
    }

    /**
     * Set p25
     *
     * @param string $p25
     * @return Historiales
     */
    public function setP25($p25)
    {
        $this->p25 = $p25;

        return $this;
    }

    /**
     * Get p25
     *
     * @return string 
     */
    public function getP25()
    {
        return $this->p25;
    }

    /**
     * Set p26
     *
     * @param string $p26
     * @return Historiales
     */
    public function setP26($p26)
    {
        $this->p26 = $p26;

        return $this;
    }

    /**
     * Get p26
     *
     * @return string 
     */
    public function getP26()
    {
        return $this->p26;
    }

    /**
     * Set p27
     *
     * @param string $p27
     * @return Historiales
     */
    public function setP27($p27)
    {
        $this->p27 = $p27;

        return $this;
    }

    /**
     * Get p27
     *
     * @return string 
     */
    public function getP27()
    {
        return $this->p27;
    }

    /**
     * Set p28
     *
     * @param string $p28
     * @return Historiales
     */
    public function setP28($p28)
    {
        $this->p28 = $p28;

        return $this;
    }

    /**
     * Get p28
     *
     * @return string 
     */
    public function getP28()
    {
        return $this->p28;
    }

    /**
     * Set p29
     *
     * @param string $p29
     * @return Historiales
     */
    public function setP29($p29)
    {
        $this->p29 = $p29;

        return $this;
    }

    /**
     * Get p29
     *
     * @return string 
     */
    public function getP29()
    {
        return $this->p29;
    }

    /**
     * Set p30
     *
     * @param string $p30
     * @return Historiales
     */
    public function setP30($p30)
    {
        $this->p30 = $p30;

        return $this;
    }

    /**
     * Get p30
     *
     * @return string 
     */
    public function getP30()
    {
        return $this->p30;
    }

    /**
     * Set p31
     *
     * @param string $p31
     * @return Historiales
     */
    public function setP31($p31)
    {
        $this->p31 = $p31;

        return $this;
    }

    /**
     * Get p31
     *
     * @return string 
     */
    public function getP31()
    {
        return $this->p31;
    }

    /**
     * Set p32
     *
     * @param string $p32
     * @return Historiales
     */
    public function setP32($p32)
    {
        $this->p32 = $p32;

        return $this;
    }

    /**
     * Get p32
     *
     * @return string 
     */
    public function getP32()
    {
        return $this->p32;
    }

    /**
     * Set p33
     *
     * @param string $p33
     * @return Historiales
     */
    public function setP33($p33)
    {
        $this->p33 = $p33;

        return $this;
    }

    /**
     * Get p33
     *
     * @return string 
     */
    public function getP33()
    {
        return $this->p33;
    }

    /**
     * Set p34
     *
     * @param string $p34
     * @return Historiales
     */
    public function setP34($p34)
    {
        $this->p34 = $p34;

        return $this;
    }

    /**
     * Get p34
     *
     * @return string 
     */
    public function getP34()
    {
        return $this->p34;
    }

    /**
     * Set p35
     *
     * @param string $p35
     * @return Historiales
     */
    public function setP35($p35)
    {
        $this->p35 = $p35;

        return $this;
    }

    /**
     * Get p35
     *
     * @return string 
     */
    public function getP35()
    {
        return $this->p35;
    }

    /**
     * Set p36
     *
     * @param string $p36
     * @return Historiales
     */
    public function setP36($p36)
    {
        $this->p36 = $p36;

        return $this;
    }

    /**
     * Get p36
     *
     * @return string 
     */
    public function getP36()
    {
        return $this->p36;
    }

    /**
     * Set p37
     *
     * @param string $p37
     * @return Historiales
     */
    public function setP37($p37)
    {
        $this->p37 = $p37;

        return $this;
    }

    /**
     * Get p37
     *
     * @return string 
     */
    public function getP37()
    {
        return $this->p37;
    }

    /**
     * Set p38
     *
     * @param string $p38
     * @return Historiales
     */
    public function setP38($p38)
    {
        $this->p38 = $p38;

        return $this;
    }

    /**
     * Get p38
     *
     * @return string 
     */
    public function getP38()
    {
        return $this->p38;
    }

    /**
     * Set p39
     *
     * @param string $p39
     * @return Historiales
     */
    public function setP39($p39)
    {
        $this->p39 = $p39;

        return $this;
    }

    /**
     * Get p39
     *
     * @return string 
     */
    public function getP39()
    {
        return $this->p39;
    }

    /**
     * Set p40
     *
     * @param string $p40
     * @return Historiales
     */
    public function setP40($p40)
    {
        $this->p40 = $p40;

        return $this;
    }

    /**
     * Get p40
     *
     * @return string 
     */
    public function getP40()
    {
        return $this->p40;
    }

    /**
     * Set p41
     *
     * @param string $p41
     * @return Historiales
     */
    public function setP41($p41)
    {
        $this->p41 = $p41;

        return $this;
    }

    /**
     * Get p41
     *
     * @return string 
     */
    public function getP41()
    {
        return $this->p41;
    }

    /**
     * Set p42
     *
     * @param string $p42
     * @return Historiales
     */
    public function setP42($p42)
    {
        $this->p42 = $p42;

        return $this;
    }

    /**
     * Get p42
     *
     * @return string 
     */
    public function getP42()
    {
        return $this->p42;
    }

    /**
     * Set p43
     *
     * @param string $p43
     * @return Historiales
     */
    public function setP43($p43)
    {
        $this->p43 = $p43;

        return $this;
    }

    /**
     * Get p43
     *
     * @return string 
     */
    public function getP43()
    {
        return $this->p43;
    }

    /**
     * Set p44
     *
     * @param string $p44
     * @return Historiales
     */
    public function setP44($p44)
    {
        $this->p44 = $p44;

        return $this;
    }

    /**
     * Get p44
     *
     * @return string 
     */
    public function getP44()
    {
        return $this->p44;
    }

    /**
     * Set p45
     *
     * @param string $p45
     * @return Historiales
     */
    public function setP45($p45)
    {
        $this->p45 = $p45;

        return $this;
    }

    /**
     * Get p45
     *
     * @return string 
     */
    public function getP45()
    {
        return $this->p45;
    }
}
