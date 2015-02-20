<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblfacturacomision
 *
 * @ORM\Table(name="tblfacturacomision")
 * @ORM\Entity
 */
class Tblfacturacomision
{
    /**
     * @var integer $idfacturacomision
     *
     * @ORM\Column(name="idFacturaComision", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfacturacomision;

    /**
     * @var string $nrofacturacomision
     *
     * @ORM\Column(name="nroFacturaComision", type="string", length=25, nullable=false)
     */
    private $nrofacturacomision;

    /**
     * @var string $nrocontrol
     *
     * @ORM\Column(name="nroControl", type="string", length=25, nullable=false)
     */
    private $nrocontrol;

    /**
     * @var boolean $tdesc
     *
     * @ORM\Column(name="tdesc", type="boolean", nullable=false)
     */
    private $tdesc;

    /**
     * @var date $fechafacturacomision
     *
     * @ORM\Column(name="fechaFacturaComision", type="date", nullable=false)
     */
    private $fechafacturacomision;

    /**
     * @var date $fechaprocesofactura
     *
     * @ORM\Column(name="fechaProcesoFactura", type="date", nullable=false)
     */
    private $fechaprocesofactura;

    /**
     * @var decimal $baseimponible
     *
     * @ORM\Column(name="baseImponible", type="decimal", nullable=false)
     */
    private $baseimponible;

    /**
     * @var decimal $porcentajeretencion
     *
     * @ORM\Column(name="porcentajeRetencion", type="decimal", nullable=false)
     */
    private $porcentajeretencion;

    /**
     * @var decimal $montoretencion
     *
     * @ORM\Column(name="montoRetencion", type="decimal", nullable=false)
     */
    private $montoretencion;

    /**
     * @var string $nrodeclaracion
     *
     * @ORM\Column(name="nroDeclaracion", type="string", length=11, nullable=true)
     */
    private $nrodeclaracion;

    /**
     * @var string $tipodeclaracion
     *
     * @ORM\Column(name="tipoDeclaracion", type="string", length=5, nullable=true)
     */
    private $tipodeclaracion;

    /**
     * @var date $fechadeclaracion
     *
     * @ORM\Column(name="fechaDeclaracion", type="date", nullable=true)
     */
    private $fechadeclaracion;

    /**
     * @var string $riffactura
     *
     * @ORM\Column(name="rifFactura", type="string", length=20, nullable=false)
     */
    private $riffactura;

    /**
     * @var integer $codusuario
     *
     * @ORM\Column(name="codUsuario", type="integer", nullable=false)
     */
    private $codusuario;

    function getIdfacturacomision() {
        return $this->idfacturacomision;
    }

    function getNrofacturacomision() {
        return $this->nrofacturacomision;
    }

    function getNrocontrol() {
        return $this->nrocontrol;
    }

    function getTdesc() {
        return $this->tdesc;
    }

    function getFechafacturacomision() {
        return $this->fechafacturacomision;
    }

    function getFechaprocesofactura() {
        return $this->fechaprocesofactura;
    }

    function getBaseimponible() {
        return $this->baseimponible;
    }

    function getPorcentajeretencion() {
        return $this->porcentajeretencion;
    }

    function getMontoretencion() {
        return $this->montoretencion;
    }

    function getNrodeclaracion() {
        return $this->nrodeclaracion;
    }

    function getTipodeclaracion() {
        return $this->tipodeclaracion;
    }

    function getFechadeclaracion() {
        return $this->fechadeclaracion;
    }

    function getRiffactura() {
        return $this->riffactura;
    }

    function getCodusuario() {
        return $this->codusuario;
    }

    function setNrofacturacomision($nrofacturacomision) {
        $this->nrofacturacomision = $nrofacturacomision;
    }

    function setNrocontrol($nrocontrol) {
        $this->nrocontrol = $nrocontrol;
    }

    function setTdesc($tdesc) {
        $this->tdesc = $tdesc;
    }

    function setFechafacturacomision(date $fechafacturacomision) {
        $this->fechafacturacomision = $fechafacturacomision;
    }

    function setFechaprocesofactura(date $fechaprocesofactura) {
        $this->fechaprocesofactura = $fechaprocesofactura;
    }

    function setBaseimponible(decimal $baseimponible) {
        $this->baseimponible = $baseimponible;
    }

    function setPorcentajeretencion(decimal $porcentajeretencion) {
        $this->porcentajeretencion = $porcentajeretencion;
    }

    function setMontoretencion(decimal $montoretencion) {
        $this->montoretencion = $montoretencion;
    }

    function setNrodeclaracion($nrodeclaracion) {
        $this->nrodeclaracion = $nrodeclaracion;
    }

    function setTipodeclaracion($tipodeclaracion) {
        $this->tipodeclaracion = $tipodeclaracion;
    }

    function setFechadeclaracion(date $fechadeclaracion) {
        $this->fechadeclaracion = $fechadeclaracion;
    }

    function setRiffactura($riffactura) {
        $this->riffactura = $riffactura;
    }

    function setCodusuario($codusuario) {
        $this->codusuario = $codusuario;
    }



}