<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblpasajerop
 *
 * @ORM\Table(name="tblpasajerop")
 * @ORM\Entity
 */
class Tblpasajerop
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
     * @ORM\Column(name="fechaNacimiento", type="date", nullable=false)
     */
    private $fechanacimiento;

    /**
     * @var string $edad
     *
     * @ORM\Column(name="edad", type="string", length=10, nullable=false)
     */
    private $edad;

    /**
     * @var integer $tipoidentificacion
     *
     * @ORM\Column(name="tipoidentificacion", type="integer", nullable=false)
     */
    private $tipoidentificacion;

    /**
     * @var string $codidentificacion
     *
     * @ORM\Column(name="codIdentificacion", type="string", length=100, nullable=false)
     */
    private $codidentificacion;

    /**
     * @var string $paispasajero
     *
     * @ORM\Column(name="paisPasajero", type="string", length=50, nullable=false)
     */
    private $paispasajero;


}