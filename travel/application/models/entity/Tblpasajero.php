<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblpasajero
 *
 * @ORM\Table(name="tblpasajero")
 * @ORM\Entity
 */
class Tblpasajero
{
    /**
     * @var integer $codusuario
     *
     * @ORM\Column(name="codUsuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codusuario;

    /**
     * @var integer $codvoucher
     *
     * @ORM\Column(name="codVoucher", type="integer", nullable=false)
     */
    private $codvoucher;

    /**
     * @var string $nombrepasajero
     *
     * @ORM\Column(name="nombrePasajero", type="string", length=50, nullable=false)
     */
    private $nombrepasajero;

    /**
     * @var date $fechanacimiento
     *
     * @ORM\Column(name="fechaNacimiento", type="date", nullable=true)
     */
    private $fechanacimiento;

    /**
     * @var string $edad
     *
     * @ORM\Column(name="edad", type="string", length=10, nullable=true)
     */
    private $edad;

    /**
     * @var integer $tipoidentificacion
     *
     * @ORM\Column(name="tipoidentificacion", type="integer", nullable=true)
     */
    private $tipoidentificacion;

    /**
     * @var string $codidentificacion
     *
     * @ORM\Column(name="codIdentificacion", type="string", length=100, nullable=true)
     */
    private $codidentificacion;

    /**
     * @var string $telefono
     *
     * @ORM\Column(name="telefono", type="string", length=30, nullable=true)
     */
    private $telefono;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=30, nullable=true)
     */
    private $email;

    /**
     * @var string $titular
     *
     * @ORM\Column(name="titular", type="string", length=30, nullable=true)
     */
    private $titular;

    /**
     * @var string $paispasajero
     *
     * @ORM\Column(name="paisPasajero", type="string", length=50, nullable=false)
     */
    private $paispasajero;


}