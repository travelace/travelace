<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblprecompra
 *
 * @ORM\Table(name="tblprecompra")
 * @ORM\Entity
 */
class Tblprecompra
{
    /**
     * @var integer $codprecompra
     *
     * @ORM\Column(name="codPrecompra", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codprecompra;

    /**
     * @var integer $codagencia
     *
     * @ORM\Column(name="codAgencia", type="integer", nullable=true)
     */
    private $codagencia;

    /**
     * @var integer $codplan
     *
     * @ORM\Column(name="codPlan", type="integer", nullable=true)
     */
    private $codplan;

    /**
     * @var integer $diasprecompra
     *
     * @ORM\Column(name="diasPrecompra", type="integer", nullable=true)
     */
    private $diasprecompra;

    /**
     * @var float $tarifaprecompra
     *
     * @ORM\Column(name="tarifaPrecompra", type="float", nullable=true)
     */
    private $tarifaprecompra;

    /**
     * @var date $fechaprecompra
     *
     * @ORM\Column(name="fechaPrecompra", type="date", nullable=true)
     */
    private $fechaprecompra;

    function getCodprecompra() {
        return $this->codprecompra;
    }

    function getCodagencia() {
        return $this->codagencia;
    }

    function getCodplan() {
        return $this->codplan;
    }

    function getDiasprecompra() {
        return $this->diasprecompra;
    }

    function getTarifaprecompra() {
        return $this->tarifaprecompra;
    }

    function getFechaprecompra() {
        return $this->fechaprecompra;
    }

    function setCodagencia($codagencia) {
        $this->codagencia = $codagencia;
    }

    function setCodplan($codplan) {
        $this->codplan = $codplan;
    }

    function setDiasprecompra($diasprecompra) {
        $this->diasprecompra = $diasprecompra;
    }

    function setTarifaprecompra($tarifaprecompra) {
        $this->tarifaprecompra = $tarifaprecompra;
    }

    function setFechaprecompra(date $fechaprecompra) {
        $this->fechaprecompra = $fechaprecompra;
    }



}