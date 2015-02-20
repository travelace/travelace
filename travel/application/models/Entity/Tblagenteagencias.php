<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblagenteagencias
 *
 * @ORM\Table(name="tblagenteagencias")
 * @ORM\Entity
 */
class Tblagenteagencias
{
    /**
     * @var integer $idagente
     *
     * @ORM\Column(name="idAgente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idagente;

    /**
     * @var integer $codagencia
     *
     * @ORM\Column(name="codAgencia", type="integer", nullable=false)
     */
    private $codagencia;

    /**
     * @var string $nombreagente
     *
     * @ORM\Column(name="nombreAgente", type="string", length=50, nullable=false)
     */
    private $nombreagente;

    /**
     * @var string $bancoagente
     *
     * @ORM\Column(name="bancoAgente", type="string", length=50, nullable=false)
     */
    private $bancoagente;

    /**
     * @var string $cuentaagente
     *
     * @ORM\Column(name="cuentaAgente", type="string", length=100, nullable=false)
     */
    private $cuentaagente;

    /**
     * @var string $tipocuenta
     *
     * @ORM\Column(name="tipoCuenta", type="string", length=100, nullable=false)
     */
    private $tipocuenta;

    /**
     * @var string $numerofax
     *
     * @ORM\Column(name="numeroFax", type="string", length=100, nullable=false)
     */
    private $numerofax;

    /**
     * @var string $correoagente
     *
     * @ORM\Column(name="correoAgente", type="string", length=100, nullable=false)
     */
    private $correoagente;

    /**
     * @var string $nacionalidadagente
     *
     * @ORM\Column(name="nacionalidadAgente", type="string", length=100, nullable=false)
     */
    private $nacionalidadagente;

    /**
     * @var integer $cedulaagente
     *
     * @ORM\Column(name="cedulaAgente", type="integer", nullable=false)
     */
    private $cedulaagente;

    /**
     * @var string $nombrecompleto
     *
     * @ORM\Column(name="nombreCompleto", type="string", length=100, nullable=false)
     */
    private $nombrecompleto;

    /**
     * @var string $rifagente
     *
     * @ORM\Column(name="rifAgente", type="string", length=100, nullable=false)
     */
    private $rifagente;

    /**
     * @var date $fecharegistro
     *
     * @ORM\Column(name="fechaRegistro", type="date", nullable=false)
     */
    private $fecharegistro;


    function getIdagente() {
        return $this->idagente;
    }

    function getCodagencia() {
        return $this->codagencia;
    }

    function getNombreagente() {
        return $this->nombreagente;
    }

    function getBancoagente() {
        return $this->bancoagente;
    }

    function getCuentaagente() {
        return $this->cuentaagente;
    }

    function getTipocuenta() {
        return $this->tipocuenta;
    }

    function getNumerofax() {
        return $this->numerofax;
    }

    function getCorreoagente() {
        return $this->correoagente;
    }

    function getNacionalidadagente() {
        return $this->nacionalidadagente;
    }

    function getCedulaagente() {
        return $this->cedulaagente;
    }

    function getNombrecompleto() {
        return $this->nombrecompleto;
    }

    function getRifagente() {
        return $this->rifagente;
    }

    function getFecharegistro() {
        return $this->fecharegistro;
    }

    function setCodagencia($codagencia) {
        $this->codagencia = $codagencia;
    }

    function setNombreagente($nombreagente) {
        $this->nombreagente = $nombreagente;
    }

    function setBancoagente($bancoagente) {
        $this->bancoagente = $bancoagente;
    }

    function setCuentaagente($cuentaagente) {
        $this->cuentaagente = $cuentaagente;
    }

    function setTipocuenta($tipocuenta) {
        $this->tipocuenta = $tipocuenta;
    }

    function setNumerofax($numerofax) {
        $this->numerofax = $numerofax;
    }

    function setCorreoagente($correoagente) {
        $this->correoagente = $correoagente;
    }

    function setNacionalidadagente($nacionalidadagente) {
        $this->nacionalidadagente = $nacionalidadagente;
    }

    function setCedulaagente($cedulaagente) {
        $this->cedulaagente = $cedulaagente;
    }

    function setNombrecompleto($nombrecompleto) {
        $this->nombrecompleto = $nombrecompleto;
    }

    function setRifagente($rifagente) {
        $this->rifagente = $rifagente;
    }

    function setFecharegistro(date $fecharegistro) {
        $this->fecharegistro = $fecharegistro;
    }


    
}