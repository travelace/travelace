<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblagencias
 *
 * @ORM\Table(name="tblagencias")
 * @ORM\Entity
 */
class Tblagencias
{
    /**
     * @var integer $codagencia
     *
     * @ORM\Column(name="codAgencia", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codagencia;

    /**
     * @var string $razonsocial
     *
     * @ORM\Column(name="razonSocial", type="string", length=255, nullable=true)
     */
    private $razonsocial;

    /**
     * @var string $nombreagencia
     *
     * @ORM\Column(name="nombreAgencia", type="string", length=255, nullable=true)
     */
    private $nombreagencia;

    /**
     * @var string $rifagencia
     *
     * @ORM\Column(name="rifAgencia", type="string", length=15, nullable=true)
     */
    private $rifagencia;

    /**
     * @var integer $sucursal
     *
     * @ORM\Column(name="sucursal", type="integer", nullable=true)
     */
    private $sucursal;

    /**
     * @var integer $codpais
     *
     * @ORM\Column(name="codPais", type="integer", nullable=true)
     */
    private $codpais;

    /**
     * @var string $telefono1
     *
     * @ORM\Column(name="telefono1", type="string", length=15, nullable=true)
     */
    private $telefono1;

    /**
     * @var string $telefono2
     *
     * @ORM\Column(name="telefono2", type="string", length=15, nullable=true)
     */
    private $telefono2;

    /**
     * @var string $telefono3
     *
     * @ORM\Column(name="telefono3", type="string", length=15, nullable=true)
     */
    private $telefono3;

    /**
     * @var string $fax
     *
     * @ORM\Column(name="fax", type="string", length=15, nullable=true)
     */
    private $fax;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var date $fechainicio
     *
     * @ORM\Column(name="fechaInicio", type="date", nullable=true)
     */
    private $fechainicio;

    /**
     * @var boolean $agteretespecial
     *
     * @ORM\Column(name="agteRetEspecial", type="boolean", nullable=true)
     */
    private $agteretespecial;

    /**
     * @var integer $descespecial
     *
     * @ORM\Column(name="descEspecial", type="integer", nullable=true)
     */
    private $descespecial;

    /**
     * @var integer $tipofacturacion
     *
     * @ORM\Column(name="tipoFacturacion", type="integer", nullable=true)
     */
    private $tipofacturacion;

    /**
     * @var string $direccionfiscal
     *
     * @ORM\Column(name="direccionFiscal", type="string", length=150, nullable=true)
     */
    private $direccionfiscal;

    /**
     * @var string $direccionfisica
     *
     * @ORM\Column(name="direccionFisica", type="string", length=150, nullable=true)
     */
    private $direccionfisica;

    /**
     * @var boolean $activo
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var date $fechaultmov
     *
     * @ORM\Column(name="fechaUltMov", type="date", nullable=true)
     */
    private $fechaultmov;

    /**
     * @var integer $codciudad
     *
     * @ORM\Column(name="codCiudad", type="integer", nullable=false)
     */
    private $codciudad;

    /**
     * @var integer $codestado
     *
     * @ORM\Column(name="codEstado", type="integer", nullable=false)
     */
    private $codestado;

    /**
     * @var integer $codgrupo
     *
     * @ORM\Column(name="codGrupo", type="integer", nullable=false)
     */
    private $codgrupo;

    /**
     * @var integer $empfacturacion
     *
     * @ORM\Column(name="empFacturacion", type="integer", nullable=false)
     */
    private $empfacturacion;

    /**
     * @var string $nombreultmod
     *
     * @ORM\Column(name="nombreUltMod", type="string", length=45, nullable=false)
     */
    private $nombreultmod;

    /**
     * @var boolean $isr
     *
     * @ORM\Column(name="isr", type="boolean", nullable=false)
     */
    private $isr;

    /**
     * @var boolean $free
     *
     * @ORM\Column(name="free", type="boolean", nullable=false)
     */
    private $free;

    /**
     * @var string $propietario
     *
     * @ORM\Column(name="propietario", type="string", length=60, nullable=false)
     */
    private $propietario;

    /**
     * @var string $auxtelef
     *
     * @ORM\Column(name="auxTelef", type="string", length=50, nullable=false)
     */
    private $auxtelef;

    /**
     * @var string $loginWeb
     *
     * @ORM\Column(name="login_web", type="string", length=15, nullable=true)
     */
    private $loginWeb;


}