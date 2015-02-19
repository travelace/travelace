<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblvoucherp
 *
 * @ORM\Table(name="tblvoucherp")
 * @ORM\Entity
 */
class Tblvoucherp
{
    /**
     * @var integer $codvoucher
     *
     * @ORM\Column(name="codVoucher", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codvoucher;

    /**
     * @var integer $codagenciavoucher
     *
     * @ORM\Column(name="codAgenciaVoucher", type="integer", nullable=false)
     */
    private $codagenciavoucher;

    /**
     * @var integer $codagentevoucher
     *
     * @ORM\Column(name="codAgenteVoucher", type="integer", nullable=false)
     */
    private $codagentevoucher;

    /**
     * @var integer $numeropasajerosvoucher
     *
     * @ORM\Column(name="numeroPasajerosVoucher", type="integer", nullable=false)
     */
    private $numeropasajerosvoucher;

    /**
     * @var date $fechaemesionvoucher
     *
     * @ORM\Column(name="fechaEmesionVoucher", type="date", nullable=false)
     */
    private $fechaemesionvoucher;

    /**
     * @var date $fechadesdevoucher
     *
     * @ORM\Column(name="fechaDesdeVoucher", type="date", nullable=false)
     */
    private $fechadesdevoucher;

    /**
     * @var date $fechahastavoucher
     *
     * @ORM\Column(name="fechaHastaVoucher", type="date", nullable=false)
     */
    private $fechahastavoucher;

    /**
     * @var date $fechareportevoucher
     *
     * @ORM\Column(name="fechaReporteVoucher", type="date", nullable=true)
     */
    private $fechareportevoucher;

    /**
     * @var date $fechaprovoucher
     *
     * @ORM\Column(name="fechaProVoucher", type="date", nullable=true)
     */
    private $fechaprovoucher;

    /**
     * @var date $fechafacturacionvoucher
     *
     * @ORM\Column(name="fechaFacturacionVoucher", type="date", nullable=true)
     */
    private $fechafacturacionvoucher;

    /**
     * @var integer $codproductovoucher
     *
     * @ORM\Column(name="codProductoVoucher", type="integer", nullable=false)
     */
    private $codproductovoucher;

    /**
     * @var string $destinovoucher
     *
     * @ORM\Column(name="destinoVoucher", type="string", length=30, nullable=false)
     */
    private $destinovoucher;

    /**
     * @var integer $codtipovoucher
     *
     * @ORM\Column(name="codTipoVoucher", type="integer", nullable=false)
     */
    private $codtipovoucher;

    /**
     * @var decimal $comisionagenciavoucher
     *
     * @ORM\Column(name="comisionAgenciaVoucher", type="decimal", nullable=false)
     */
    private $comisionagenciavoucher;

    /**
     * @var boolean $negociadovoucher
     *
     * @ORM\Column(name="negociadoVoucher", type="boolean", nullable=false)
     */
    private $negociadovoucher;

    /**
     * @var decimal $comisionagentevoucher
     *
     * @ORM\Column(name="comisionAgenteVoucher", type="decimal", nullable=false)
     */
    private $comisionagentevoucher;

    /**
     * @var integer $emisorvoucher
     *
     * @ORM\Column(name="emisorVoucher", type="integer", nullable=false)
     */
    private $emisorvoucher;

    /**
     * @var text $observacionesvoucher
     *
     * @ORM\Column(name="observacionesVoucher", type="text", nullable=true)
     */
    private $observacionesvoucher;

    /**
     * @var boolean $statusvoucher
     *
     * @ORM\Column(name="statusVoucher", type="boolean", nullable=false)
     */
    private $statusvoucher;

    /**
     * @var decimal $netocobrovoucher
     *
     * @ORM\Column(name="netoCobroVoucher", type="decimal", nullable=false)
     */
    private $netocobrovoucher;

    /**
     * @var text $titulogrupovoucher
     *
     * @ORM\Column(name="tituloGrupoVoucher", type="text", nullable=true)
     */
    private $titulogrupovoucher;

    /**
     * @var integer $codtipodescuentovoucher
     *
     * @ORM\Column(name="codTipoDescuentoVoucher", type="integer", nullable=false)
     */
    private $codtipodescuentovoucher;

    /**
     * @var integer $porcentajevoucher
     *
     * @ORM\Column(name="porcentajeVoucher", type="integer", nullable=true)
     */
    private $porcentajevoucher;

    /**
     * @var integer $codtipopagovoucher
     *
     * @ORM\Column(name="codTipoPagoVoucher", type="integer", nullable=false)
     */
    private $codtipopagovoucher;

    /**
     * @var decimal $tarifabolivarvoucher
     *
     * @ORM\Column(name="tarifaBolivarVoucher", type="decimal", nullable=false)
     */
    private $tarifabolivarvoucher;

    /**
     * @var decimal $tarifaespvoucher
     *
     * @ORM\Column(name="tarifaEspVoucher", type="decimal", nullable=false)
     */
    private $tarifaespvoucher;

    /**
     * @var decimal $tarifanormalvoucher
     *
     * @ORM\Column(name="tarifaNormalVoucher", type="decimal", nullable=false)
     */
    private $tarifanormalvoucher;

    /**
     * @var string $numerofacturavoucher
     *
     * @ORM\Column(name="numeroFacturaVoucher", type="string", length=50, nullable=true)
     */
    private $numerofacturavoucher;

    /**
     * @var integer $numerotcvoucher
     *
     * @ORM\Column(name="numeroTcVoucher", type="integer", nullable=false)
     */
    private $numerotcvoucher;

    /**
     * @var integer $diasanualvoucher
     *
     * @ORM\Column(name="diasAnualVoucher", type="integer", nullable=false)
     */
    private $diasanualvoucher;

    /**
     * @var boolean $terceraedadvoucher
     *
     * @ORM\Column(name="terceraEdadVoucher", type="boolean", nullable=false)
     */
    private $terceraedadvoucher;

    /**
     * @var string $servicioadicionalvoucher
     *
     * @ORM\Column(name="ServicioAdicionalVoucher", type="string", length=100, nullable=true)
     */
    private $servicioadicionalvoucher;

    /**
     * @var string $nrovouchersiebel
     *
     * @ORM\Column(name="nroVoucherSiebel", type="string", length=30, nullable=true)
     */
    private $nrovouchersiebel;

    /**
     * @var date $fechaprocesosiebel
     *
     * @ORM\Column(name="fechaProcesoSiebel", type="date", nullable=true)
     */
    private $fechaprocesosiebel;

    /**
     * @var string $idprecomprasiebel
     *
     * @ORM\Column(name="idPrecompraSiebel", type="string", length=30, nullable=true)
     */
    private $idprecomprasiebel;

    /**
     * @var date $fechaanulacionsiebel
     *
     * @ORM\Column(name="fechaAnulacionSiebel", type="date", nullable=false)
     */
    private $fechaanulacionsiebel;

    function getCodvoucher() {
        return $this->codvoucher;
    }

    function getCodagenciavoucher() {
        return $this->codagenciavoucher;
    }

    function getCodagentevoucher() {
        return $this->codagentevoucher;
    }

    function getNumeropasajerosvoucher() {
        return $this->numeropasajerosvoucher;
    }

    function getFechaemesionvoucher() {
        return $this->fechaemesionvoucher;
    }

    function getFechadesdevoucher() {
        return $this->fechadesdevoucher;
    }

    function getFechahastavoucher() {
        return $this->fechahastavoucher;
    }

    function getFechareportevoucher() {
        return $this->fechareportevoucher;
    }

    function getFechaprovoucher() {
        return $this->fechaprovoucher;
    }

    function getFechafacturacionvoucher() {
        return $this->fechafacturacionvoucher;
    }

    function getCodproductovoucher() {
        return $this->codproductovoucher;
    }

    function getDestinovoucher() {
        return $this->destinovoucher;
    }

    function getCodtipovoucher() {
        return $this->codtipovoucher;
    }

    function getComisionagenciavoucher() {
        return $this->comisionagenciavoucher;
    }

    function getNegociadovoucher() {
        return $this->negociadovoucher;
    }

    function getComisionagentevoucher() {
        return $this->comisionagentevoucher;
    }

    function getEmisorvoucher() {
        return $this->emisorvoucher;
    }

    function getObservacionesvoucher() {
        return $this->observacionesvoucher;
    }

    function getStatusvoucher() {
        return $this->statusvoucher;
    }

    function getNetocobrovoucher() {
        return $this->netocobrovoucher;
    }

    function getTitulogrupovoucher() {
        return $this->titulogrupovoucher;
    }

    function getCodtipodescuentovoucher() {
        return $this->codtipodescuentovoucher;
    }

    function getPorcentajevoucher() {
        return $this->porcentajevoucher;
    }

    function getCodtipopagovoucher() {
        return $this->codtipopagovoucher;
    }

    function getTarifabolivarvoucher() {
        return $this->tarifabolivarvoucher;
    }

    function getTarifaespvoucher() {
        return $this->tarifaespvoucher;
    }

    function getTarifanormalvoucher() {
        return $this->tarifanormalvoucher;
    }

    function getNumerofacturavoucher() {
        return $this->numerofacturavoucher;
    }

    function getNumerotcvoucher() {
        return $this->numerotcvoucher;
    }

    function getDiasanualvoucher() {
        return $this->diasanualvoucher;
    }

    function getTerceraedadvoucher() {
        return $this->terceraedadvoucher;
    }

    function getServicioadicionalvoucher() {
        return $this->servicioadicionalvoucher;
    }

    function getNrovouchersiebel() {
        return $this->nrovouchersiebel;
    }

    function getFechaprocesosiebel() {
        return $this->fechaprocesosiebel;
    }

    function getIdprecomprasiebel() {
        return $this->idprecomprasiebel;
    }

    function getFechaanulacionsiebel() {
        return $this->fechaanulacionsiebel;
    }

    function setCodagenciavoucher($codagenciavoucher) {
        $this->codagenciavoucher = $codagenciavoucher;
    }

    function setCodagentevoucher($codagentevoucher) {
        $this->codagentevoucher = $codagentevoucher;
    }

    function setNumeropasajerosvoucher($numeropasajerosvoucher) {
        $this->numeropasajerosvoucher = $numeropasajerosvoucher;
    }

    function setFechaemesionvoucher(date $fechaemesionvoucher) {
        $this->fechaemesionvoucher = $fechaemesionvoucher;
    }

    function setFechadesdevoucher(date $fechadesdevoucher) {
        $this->fechadesdevoucher = $fechadesdevoucher;
    }

    function setFechahastavoucher(date $fechahastavoucher) {
        $this->fechahastavoucher = $fechahastavoucher;
    }

    function setFechareportevoucher(date $fechareportevoucher) {
        $this->fechareportevoucher = $fechareportevoucher;
    }

    function setFechaprovoucher(date $fechaprovoucher) {
        $this->fechaprovoucher = $fechaprovoucher;
    }

    function setFechafacturacionvoucher(date $fechafacturacionvoucher) {
        $this->fechafacturacionvoucher = $fechafacturacionvoucher;
    }

    function setCodproductovoucher($codproductovoucher) {
        $this->codproductovoucher = $codproductovoucher;
    }

    function setDestinovoucher($destinovoucher) {
        $this->destinovoucher = $destinovoucher;
    }

    function setCodtipovoucher($codtipovoucher) {
        $this->codtipovoucher = $codtipovoucher;
    }

    function setComisionagenciavoucher(decimal $comisionagenciavoucher) {
        $this->comisionagenciavoucher = $comisionagenciavoucher;
    }

    function setNegociadovoucher($negociadovoucher) {
        $this->negociadovoucher = $negociadovoucher;
    }

    function setComisionagentevoucher(decimal $comisionagentevoucher) {
        $this->comisionagentevoucher = $comisionagentevoucher;
    }

    function setEmisorvoucher($emisorvoucher) {
        $this->emisorvoucher = $emisorvoucher;
    }

    function setObservacionesvoucher(text $observacionesvoucher) {
        $this->observacionesvoucher = $observacionesvoucher;
    }

    function setStatusvoucher($statusvoucher) {
        $this->statusvoucher = $statusvoucher;
    }

    function setNetocobrovoucher(decimal $netocobrovoucher) {
        $this->netocobrovoucher = $netocobrovoucher;
    }

    function setTitulogrupovoucher(text $titulogrupovoucher) {
        $this->titulogrupovoucher = $titulogrupovoucher;
    }

    function setCodtipodescuentovoucher($codtipodescuentovoucher) {
        $this->codtipodescuentovoucher = $codtipodescuentovoucher;
    }

    function setPorcentajevoucher($porcentajevoucher) {
        $this->porcentajevoucher = $porcentajevoucher;
    }

    function setCodtipopagovoucher($codtipopagovoucher) {
        $this->codtipopagovoucher = $codtipopagovoucher;
    }

    function setTarifabolivarvoucher(decimal $tarifabolivarvoucher) {
        $this->tarifabolivarvoucher = $tarifabolivarvoucher;
    }

    function setTarifaespvoucher(decimal $tarifaespvoucher) {
        $this->tarifaespvoucher = $tarifaespvoucher;
    }

    function setTarifanormalvoucher(decimal $tarifanormalvoucher) {
        $this->tarifanormalvoucher = $tarifanormalvoucher;
    }

    function setNumerofacturavoucher($numerofacturavoucher) {
        $this->numerofacturavoucher = $numerofacturavoucher;
    }

    function setNumerotcvoucher($numerotcvoucher) {
        $this->numerotcvoucher = $numerotcvoucher;
    }

    function setDiasanualvoucher($diasanualvoucher) {
        $this->diasanualvoucher = $diasanualvoucher;
    }

    function setTerceraedadvoucher($terceraedadvoucher) {
        $this->terceraedadvoucher = $terceraedadvoucher;
    }

    function setServicioadicionalvoucher($servicioadicionalvoucher) {
        $this->servicioadicionalvoucher = $servicioadicionalvoucher;
    }

    function setNrovouchersiebel($nrovouchersiebel) {
        $this->nrovouchersiebel = $nrovouchersiebel;
    }

    function setFechaprocesosiebel(date $fechaprocesosiebel) {
        $this->fechaprocesosiebel = $fechaprocesosiebel;
    }

    function setIdprecomprasiebel($idprecomprasiebel) {
        $this->idprecomprasiebel = $idprecomprasiebel;
    }

    function setFechaanulacionsiebel(date $fechaanulacionsiebel) {
        $this->fechaanulacionsiebel = $fechaanulacionsiebel;
    }



}