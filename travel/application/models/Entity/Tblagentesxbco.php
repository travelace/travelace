<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblagentesxbco
 *
 * @ORM\Table(name="tblagentesxbco")
 * @ORM\Entity
 */
class Tblagentesxbco
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
     * @ORM\Column(name="codAgencia", type="integer", nullable=true)
     */
    private $codagencia;

    /**
     * @var string $nombreagente
     *
     * @ORM\Column(name="nombreAgente", type="string", length=10, nullable=true)
     */
    private $nombreagente;

    /**
     * @var string $nombreagtvigas
     *
     * @ORM\Column(name="nombreAgtVigas", type="string", length=44, nullable=true)
     */
    private $nombreagtvigas;

    /**
     * @var string $banco
     *
     * @ORM\Column(name="banco", type="string", length=30, nullable=true)
     */
    private $banco;

    /**
     * @var string $cuenta
     *
     * @ORM\Column(name="cuenta", type="string", length=21, nullable=true)
     */
    private $cuenta;

    /**
     * @var string $tipocuenta
     *
     * @ORM\Column(name="tipocuenta", type="string", length=11, nullable=true)
     */
    private $tipocuenta;

    /**
     * @var string $fax
     *
     * @ORM\Column(name="fax", type="string", length=15, nullable=true)
     */
    private $fax;

    /**
     * @var string $correo
     *
     * @ORM\Column(name="correo", type="string", length=25, nullable=true)
     */
    private $correo;

    /**
     * @var string $nacionalidad
     *
     * @ORM\Column(name="nacionalidad", type="string", length=1, nullable=true)
     */
    private $nacionalidad;

    /**
     * @var integer $cedula
     *
     * @ORM\Column(name="cedula", type="integer", nullable=true)
     */
    private $cedula;

    /**
     * @var string $loginWebusuario
     *
     * @ORM\Column(name="login_webusuario", type="string", length=500, nullable=false)
     */
    private $loginWebusuario;

    /**
     * @var string $loginsiebel
     *
     * @ORM\Column(name="loginsiebel", type="string", length=100, nullable=false)
     */
    private $loginsiebel;


    function getIdagente() {
        return $this->idagente;
    }

    function getCodagencia() {
        return $this->codagencia;
    }

    function getNombreagente() {
        return $this->nombreagente;
    }

    function getNombreagtvigas() {
        return $this->nombreagtvigas;
    }

    function getBanco() {
        return $this->banco;
    }

    function getCuenta() {
        return $this->cuenta;
    }

    function getTipocuenta() {
        return $this->tipocuenta;
    }

    function getFax() {
        return $this->fax;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getNacionalidad() {
        return $this->nacionalidad;
    }

    function getCedula() {
        return $this->cedula;
    }

    function getLoginWebusuario() {
        return $this->loginWebusuario;
    }

    function getLoginsiebel() {
        return $this->loginsiebel;
    }

    function setCodagencia($codagencia) {
        $this->codagencia = $codagencia;
    }

    function setNombreagente($nombreagente) {
        $this->nombreagente = $nombreagente;
    }

    function setNombreagtvigas($nombreagtvigas) {
        $this->nombreagtvigas = $nombreagtvigas;
    }

    function setBanco($banco) {
        $this->banco = $banco;
    }

    function setCuenta($cuenta) {
        $this->cuenta = $cuenta;
    }

    function setTipocuenta($tipocuenta) {
        $this->tipocuenta = $tipocuenta;
    }

    function setFax($fax) {
        $this->fax = $fax;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setNacionalidad($nacionalidad) {
        $this->nacionalidad = $nacionalidad;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function setLoginWebusuario($loginWebusuario) {
        $this->loginWebusuario = $loginWebusuario;
    }

    function setLoginsiebel($loginsiebel) {
        $this->loginsiebel = $loginsiebel;
    }


    
}