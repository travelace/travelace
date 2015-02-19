<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $login
     *
     * @ORM\Column(name="login", type="string", length=15, nullable=false)
     */
    private $login;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=13, nullable=false)
     */
    private $password;

    /**
     * @var date $fecha
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=40, nullable=false)
     */
    private $nombre;

    /**
     * @var string $agencia
     *
     * @ORM\Column(name="agencia", type="string", length=40, nullable=false)
     */
    private $agencia;

    /**
     * @var string $direccion
     *
     * @ORM\Column(name="direccion", type="string", length=100, nullable=false)
     */
    private $direccion;

    /**
     * @var string $ciudad
     *
     * @ORM\Column(name="ciudad", type="string", length=30, nullable=false)
     */
    private $ciudad;

    /**
     * @var string $estado
     *
     * @ORM\Column(name="estado", type="string", length=30, nullable=false)
     */
    private $estado;

    /**
     * @var string $pais
     *
     * @ORM\Column(name="pais", type="string", length=30, nullable=false)
     */
    private $pais;

    /**
     * @var string $telefono
     *
     * @ORM\Column(name="telefono", type="string", length=40, nullable=false)
     */
    private $telefono;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=40, nullable=false)
     */
    private $email;

    /**
     * @var string $sitioweb
     *
     * @ORM\Column(name="sitioweb", type="string", length=40, nullable=false)
     */
    private $sitioweb;

    /**
     * @var integer $estatus
     *
     * @ORM\Column(name="estatus", type="integer", nullable=false)
     */
    private $estatus;

    /**
     * @var integer $comision
     *
     * @ORM\Column(name="comision", type="integer", nullable=false)
     */
    private $comision;

    /**
     * @var integer $activo
     *
     * @ORM\Column(name="activo", type="integer", nullable=false)
     */
    private $activo;

    /**
     * @var integer $apv
     *
     * @ORM\Column(name="apv", type="integer", nullable=false)
     */
    private $apv;

    /**
     * @var string $rsocial
     *
     * @ORM\Column(name="rsocial", type="string", length=50, nullable=false)
     */
    private $rsocial;

    /**
     * @var string $rif
     *
     * @ORM\Column(name="rif", type="string", length=12, nullable=false)
     */
    private $rif;

    /**
     * @var integer $iva
     *
     * @ORM\Column(name="iva", type="integer", nullable=false)
     */
    private $iva;

    /**
     * @var integer $limite
     *
     * @ORM\Column(name="limite", type="integer", nullable=false)
     */
    private $limite;

    /**
     * @var integer $italcambio
     *
     * @ORM\Column(name="italcambio", type="integer", nullable=false)
     */
    private $italcambio;

    /**
     * @var boolean $tfact
     *
     * @ORM\Column(name="tfact", type="boolean", nullable=false)
     */
    private $tfact;

    /**
     * @var boolean $cotizadolar
     *
     * @ORM\Column(name="cotizaDolar", type="boolean", nullable=false)
     */
    private $cotizadolar;

    /**
     * @var date $fechadolar
     *
     * @ORM\Column(name="fechaDolar", type="date", nullable=false)
     */
    private $fechadolar;


}