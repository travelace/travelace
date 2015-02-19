<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblempresas
 *
 * @ORM\Table(name="tblempresas")
 * @ORM\Entity
 */
class Tblempresas
{
    /**
     * @var integer $codempresa
     *
     * @ORM\Column(name="codEmpresa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codempresa;

    /**
     * @var string $nombreempresa
     *
     * @ORM\Column(name="nombreEmpresa", type="string", length=40, nullable=true)
     */
    private $nombreempresa;

    /**
     * @var string $abreviaturaempresa
     *
     * @ORM\Column(name="abreviaturaEmpresa", type="string", length=10, nullable=true)
     */
    private $abreviaturaempresa;

    /**
     * @var float $iva
     *
     * @ORM\Column(name="iva", type="float", nullable=false)
     */
    private $iva;

    /**
     * @var float $limiteretencion
     *
     * @ORM\Column(name="limiteRetencion", type="float", nullable=false)
     */
    private $limiteretencion;

    /**
     * @var float $porcentajeretencion
     *
     * @ORM\Column(name="porcentajeRetencion", type="float", nullable=false)
     */
    private $porcentajeretencion;

    /**
     * @var float $cambiooficial
     *
     * @ORM\Column(name="cambioOficial", type="float", nullable=false)
     */
    private $cambiooficial;

    /**
     * @var float $cambiomercado
     *
     * @ORM\Column(name="cambioMercado", type="float", nullable=false)
     */
    private $cambiomercado;

    /**
     * @var float $cambioespecial
     *
     * @ORM\Column(name="cambioEspecial", type="float", nullable=false)
     */
    private $cambioespecial;

    function getCodempresa() {
        return $this->codempresa;
    }

    function getNombreempresa() {
        return $this->nombreempresa;
    }

    function getAbreviaturaempresa() {
        return $this->abreviaturaempresa;
    }

    function getIva() {
        return $this->iva;
    }

    function getLimiteretencion() {
        return $this->limiteretencion;
    }

    function getPorcentajeretencion() {
        return $this->porcentajeretencion;
    }

    function getCambiooficial() {
        return $this->cambiooficial;
    }

    function getCambiomercado() {
        return $this->cambiomercado;
    }

    function getCambioespecial() {
        return $this->cambioespecial;
    }

    function setNombreempresa($nombreempresa) {
        $this->nombreempresa = $nombreempresa;
    }

    function setAbreviaturaempresa($abreviaturaempresa) {
        $this->abreviaturaempresa = $abreviaturaempresa;
    }

    function setIva($iva) {
        $this->iva = $iva;
    }

    function setLimiteretencion($limiteretencion) {
        $this->limiteretencion = $limiteretencion;
    }

    function setPorcentajeretencion($porcentajeretencion) {
        $this->porcentajeretencion = $porcentajeretencion;
    }

    function setCambiooficial($cambiooficial) {
        $this->cambiooficial = $cambiooficial;
    }

    function setCambiomercado($cambiomercado) {
        $this->cambiomercado = $cambiomercado;
    }

    function setCambioespecial($cambioespecial) {
        $this->cambioespecial = $cambioespecial;
    }



}