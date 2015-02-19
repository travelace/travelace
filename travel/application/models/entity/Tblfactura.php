<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblfactura
 *
 * @ORM\Table(name="tblfactura")
 * @ORM\Entity
 */
class Tblfactura
{
    /**
     * @var integer $idfactura
     *
     * @ORM\Column(name="idFactura", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfactura;

    /**
     * @var string $numerorelacionpagofactura
     *
     * @ORM\Column(name="numeroRelacionPagoFactura", type="string", length=30, nullable=true)
     */
    private $numerorelacionpagofactura;

    /**
     * @var string $numerofactura
     *
     * @ORM\Column(name="numeroFactura", type="string", length=30, nullable=true)
     */
    private $numerofactura;

    /**
     * @var integer $codagenciafactura
     *
     * @ORM\Column(name="codAgenciaFactura", type="integer", nullable=true)
     */
    private $codagenciafactura;

    /**
     * @var string $riffactura
     *
     * @ORM\Column(name="rifFactura", type="string", length=30, nullable=true)
     */
    private $riffactura;

    /**
     * @var string $numeronitfactura
     *
     * @ORM\Column(name="numeroNitFactura", type="string", length=30, nullable=true)
     */
    private $numeronitfactura;

    /**
     * @var date $fechafactura
     *
     * @ORM\Column(name="FechaFactura", type="date", nullable=true)
     */
    private $fechafactura;

    /**
     * @var decimal $tarifafactura
     *
     * @ORM\Column(name="TarifaFactura", type="decimal", nullable=true)
     */
    private $tarifafactura;

    /**
     * @var decimal $sobreivafactura
     *
     * @ORM\Column(name="sobreIvaFactura", type="decimal", nullable=true)
     */
    private $sobreivafactura;

    /**
     * @var decimal $porcentajeivafactura
     *
     * @ORM\Column(name="porcentajeIvaFactura", type="decimal", nullable=true)
     */
    private $porcentajeivafactura;

    /**
     * @var decimal $montoporcentajeivafactura
     *
     * @ORM\Column(name="montoPorcentajeIvaFactura", type="decimal", nullable=true)
     */
    private $montoporcentajeivafactura;

    /**
     * @var decimal $porcentajeagenciafactura
     *
     * @ORM\Column(name="porcentajeAgenciaFactura", type="decimal", nullable=true)
     */
    private $porcentajeagenciafactura;

    /**
     * @var decimal $montoporcentajeagenciafactura
     *
     * @ORM\Column(name="montoPorcentajeAgenciaFactura", type="decimal", nullable=true)
     */
    private $montoporcentajeagenciafactura;

    /**
     * @var decimal $porcentajeivacomisionfactura
     *
     * @ORM\Column(name="porcentajeIvaComisionFactura", type="decimal", nullable=true)
     */
    private $porcentajeivacomisionfactura;

    /**
     * @var decimal $montoporcentajecomisionfactura
     *
     * @ORM\Column(name="montoPorcentajeComisionFactura", type="decimal", nullable=true)
     */
    private $montoporcentajecomisionfactura;

    /**
     * @var decimal $retencioncomisionfactura
     *
     * @ORM\Column(name="retencionComisionFactura", type="decimal", nullable=true)
     */
    private $retencioncomisionfactura;

    /**
     * @var decimal $montorelacioncomisionfactura
     *
     * @ORM\Column(name="montoRelacionComisionFactura", type="decimal", nullable=true)
     */
    private $montorelacioncomisionfactura;

    /**
     * @var decimal $totalrelacionpagofactura
     *
     * @ORM\Column(name="totalRelacionPagoFactura", type="decimal", nullable=true)
     */
    private $totalrelacionpagofactura;

    /**
     * @var decimal $totalfacturabolivares
     *
     * @ORM\Column(name="totalFacturaBolivares", type="decimal", nullable=true)
     */
    private $totalfacturabolivares;

    /**
     * @var decimal $tipocambiofactura
     *
     * @ORM\Column(name="tipoCambioFactura", type="decimal", nullable=true)
     */
    private $tipocambiofactura;

    /**
     * @var string $statusfactura
     *
     * @ORM\Column(name="statusFactura", type="string", length=2, nullable=true)
     */
    private $statusfactura;

    /**
     * @var string $detallesfactura
     *
     * @ORM\Column(name="detallesFactura", type="string", length=400, nullable=true)
     */
    private $detallesfactura;

    /**
     * @var boolean $statuspagadofactura
     *
     * @ORM\Column(name="statusPagadoFactura", type="boolean", nullable=true)
     */
    private $statuspagadofactura;

    /**
     * @var string $agenteelaboracionfactura
     *
     * @ORM\Column(name="AgenteElaboracionFactura", type="string", length=30, nullable=true)
     */
    private $agenteelaboracionfactura;

    /**
     * @var date $fechaelaboracionfactura
     *
     * @ORM\Column(name="fechaElaboracionFactura", type="date", nullable=true)
     */
    private $fechaelaboracionfactura;

    /**
     * @var date $fechapagofactura
     *
     * @ORM\Column(name="fechaPagoFactura", type="date", nullable=true)
     */
    private $fechapagofactura;

    /**
     * @var boolean $facturadolar
     *
     * @ORM\Column(name="facturaDolar", type="boolean", nullable=true)
     */
    private $facturadolar;

    /**
     * @var string $empresafactura
     *
     * @ORM\Column(name="empresaFactura", type="string", length=10, nullable=true)
     */
    private $empresafactura;

    /**
     * @var boolean $incobrablefactura
     *
     * @ORM\Column(name="IncobrableFactura", type="boolean", nullable=true)
     */
    private $incobrablefactura;

    /**
     * @var string $numerocontrolfactura
     *
     * @ORM\Column(name="numeroControlFactura", type="string", length=30, nullable=true)
     */
    private $numerocontrolfactura;


}