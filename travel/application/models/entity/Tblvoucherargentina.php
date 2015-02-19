<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblvoucherargentina
 *
 * @ORM\Table(name="tblvoucherargentina")
 * @ORM\Entity
 */
class Tblvoucherargentina
{
    /**
     * @var integer $codvouchersiebel
     *
     * @ORM\Column(name="codVouchersiebel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codvouchersiebel;

    /**
     * @var string $numerovouchersiebel
     *
     * @ORM\Column(name="numerovouchersiebel", type="string", length=100, nullable=false)
     */
    private $numerovouchersiebel;

    /**
     * @var integer $codagenciavouchersiebel
     *
     * @ORM\Column(name="codAgenciaVouchersiebel", type="integer", nullable=false)
     */
    private $codagenciavouchersiebel;

    /**
     * @var string $loginvouchersiebel
     *
     * @ORM\Column(name="loginVouchersiebel", type="string", length=100, nullable=false)
     */
    private $loginvouchersiebel;

    /**
     * @var integer $numeropasajerosvouchersiebel
     *
     * @ORM\Column(name="numeroPasajerosVouchersiebel", type="integer", nullable=false)
     */
    private $numeropasajerosvouchersiebel;

    /**
     * @var date $fechaemesionvouchersiebel
     *
     * @ORM\Column(name="fechaEmesionVouchersiebel", type="date", nullable=false)
     */
    private $fechaemesionvouchersiebel;

    /**
     * @var date $fechadesdevouchersiebel
     *
     * @ORM\Column(name="fechaDesdeVouchersiebel", type="date", nullable=false)
     */
    private $fechadesdevouchersiebel;

    /**
     * @var date $fechahastavouchersiebel
     *
     * @ORM\Column(name="fechaHastaVouchersiebel", type="date", nullable=false)
     */
    private $fechahastavouchersiebel;

    /**
     * @var date $fechareportevouchersiebel
     *
     * @ORM\Column(name="fechaReporteVouchersiebel", type="date", nullable=false)
     */
    private $fechareportevouchersiebel;

    /**
     * @var date $fecharelacionvouchersiebel
     *
     * @ORM\Column(name="fechaRelacionVouchersiebel", type="date", nullable=false)
     */
    private $fecharelacionvouchersiebel;

    /**
     * @var date $fechaprovouchersiebel
     *
     * @ORM\Column(name="fechaProVouchersiebel", type="date", nullable=false)
     */
    private $fechaprovouchersiebel;

    /**
     * @var date $fechafacturacionvouchersiebel
     *
     * @ORM\Column(name="fechaFacturacionVouchersiebel", type="date", nullable=false)
     */
    private $fechafacturacionvouchersiebel;

    /**
     * @var integer $codproductovouchersiebel
     *
     * @ORM\Column(name="codProductoVouchersiebel", type="integer", nullable=false)
     */
    private $codproductovouchersiebel;

    /**
     * @var decimal $comisionagenciavouchersiebel
     *
     * @ORM\Column(name="comisionAgenciaVouchersiebel", type="decimal", nullable=false)
     */
    private $comisionagenciavouchersiebel;

    /**
     * @var decimal $comisionagentevouchersiebel
     *
     * @ORM\Column(name="comisionAgenteVouchersiebel", type="decimal", nullable=false)
     */
    private $comisionagentevouchersiebel;

    /**
     * @var text $observacionesvouchersiebel
     *
     * @ORM\Column(name="observacionesVouchersiebel", type="text", nullable=false)
     */
    private $observacionesvouchersiebel;

    /**
     * @var boolean $statusvouchersiebel
     *
     * @ORM\Column(name="statusVouchersiebel", type="boolean", nullable=false)
     */
    private $statusvouchersiebel;

    /**
     * @var text $titulogrupovouchersiebel
     *
     * @ORM\Column(name="tituloGrupoVouchersiebel", type="text", nullable=false)
     */
    private $titulogrupovouchersiebel;

    /**
     * @var decimal $tarifabolivarvouchersiebel
     *
     * @ORM\Column(name="tarifaBolivarVouchersiebel", type="decimal", nullable=false)
     */
    private $tarifabolivarvouchersiebel;

    /**
     * @var decimal $tarifadolarvouchersiebel
     *
     * @ORM\Column(name="tarifaDolarVouchersiebel", type="decimal", nullable=false)
     */
    private $tarifadolarvouchersiebel;

    /**
     * @var decimal $tarifanormalvouchersiebel
     *
     * @ORM\Column(name="tarifaNormalVouchersiebel", type="decimal", nullable=false)
     */
    private $tarifanormalvouchersiebel;

    /**
     * @var string $numerorelacionvouchersiebel
     *
     * @ORM\Column(name="numeroRelacionVouchersiebel", type="string", length=30, nullable=false)
     */
    private $numerorelacionvouchersiebel;

    /**
     * @var string $numerofacturavouchersiebel
     *
     * @ORM\Column(name="numeroFacturaVouchersiebel", type="string", length=50, nullable=false)
     */
    private $numerofacturavouchersiebel;

    /**
     * @var integer $numerotcvouchersiebel
     *
     * @ORM\Column(name="numeroTcVouchersiebel", type="integer", nullable=false)
     */
    private $numerotcvouchersiebel;

    /**
     * @var integer $diasanualvouchersiebel
     *
     * @ORM\Column(name="diasAnualVouchersiebel", type="integer", nullable=false)
     */
    private $diasanualvouchersiebel;

    /**
     * @var boolean $mayor70vouchersiebel
     *
     * @ORM\Column(name="mayor70Vouchersiebel", type="boolean", nullable=false)
     */
    private $mayor70vouchersiebel;

    /**
     * @var float $tipocambiovouchersiebel
     *
     * @ORM\Column(name="tipoCambioVouchersiebel", type="float", nullable=false)
     */
    private $tipocambiovouchersiebel;

    /**
     * @var integer $tipopagovouchersiebel
     *
     * @ORM\Column(name="tipoPagoVoucherSiebel", type="integer", nullable=false)
     */
    private $tipopagovouchersiebel;

    /**
     * @var integer $descuentosiebel
     *
     * @ORM\Column(name="descuentoSiebel", type="integer", nullable=false)
     */
    private $descuentosiebel;

    /**
     * @var string $distinovouchersiebel
     *
     * @ORM\Column(name="distinoVoucherSiebel", type="string", length=200, nullable=false)
     */
    private $distinovouchersiebel;


}