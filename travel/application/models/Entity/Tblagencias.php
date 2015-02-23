<?php


namespace Entity;
//use Doctrine\Mapping as ORM;

/**
 * Tblagencias
 *
 * @Table(name="tblagencias")
 * @Entity
 */
class Tblagencias
{
    /**
     * @var integer $codagencia
     *
     * @Column(name="codAgencia", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $codagencia;

    /**
     * @var string $razonsocial
     *
     * @Column(name="razonSocial", type="string", length=255, nullable=true)
     */
    private $razonsocial;

    /**
     * @var string $nombreagencia
     *
     * @Column(name="nombreAgencia", type="string", length=255, nullable=true)
     */
    private $nombreagencia;

    /**
     * @var string $rifagencia
     *
     * @Column(name="rifAgencia", type="string", length=15, nullable=true)
     */
    private $rifagencia;

    /**
     * @var integer $sucursal
     *
     * @Column(name="sucursal", type="integer", nullable=true)
     */
    private $sucursal;

    /**
     * @var integer $codpais
     *
     * @Column(name="codPais", type="integer", nullable=true)
     */
    private $codpais;

    /**
     * @var string $telefono1
     *
     * @Column(name="telefono1", type="string", length=15, nullable=true)
     */
    private $telefono1;

    /**
     * @var string $telefono2
     *
     * @Column(name="telefono2", type="string", length=15, nullable=true)
     */
    private $telefono2;

    /**
     * @var string $telefono3
     *
     * @Column(name="telefono3", type="string", length=15, nullable=true)
     */
    private $telefono3;

    /**
     * @var string $fax
     *
     * @Column(name="fax", type="string", length=15, nullable=true)
     */
    private $fax;

    /**
     * @var string $email
     *
     * @Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var date $fechainicio
     *
     * @Column(name="fechaInicio", type="date", nullable=true)
     */
    private $fechainicio;

    /**
     * @var boolean $agteretespecial
     *
     * @Column(name="agteRetEspecial", type="boolean", nullable=true)
     */
    private $agteretespecial;

    /**
     * @var integer $descespecial
     *
     * @Column(name="descEspecial", type="integer", nullable=true)
     */
    private $descespecial;

    /**
     * @var integer $tipofacturacion
     *
     * @Column(name="tipoFacturacion", type="integer", nullable=true)
     */
    private $tipofacturacion;

    /**
     * @var string $direccionfiscal
     *
     * @Column(name="direccionFiscal", type="string", length=150, nullable=true)
     */
    private $direccionfiscal;

    /**
     * @var string $direccionfisica
     *
     * @Column(name="direccionFisica", type="string", length=150, nullable=true)
     */
    private $direccionfisica;

    /**
     * @var boolean $activo
     *
     * @Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var date $fechaultmov
     *
     * @Column(name="fechaUltMov", type="date", nullable=true)
     */
    private $fechaultmov;

    /**
     * @var integer $codciudad
     *
     * @Column(name="codCiudad", type="integer", nullable=false)
     */
    private $codciudad;

    /**
     * @var integer $codestado
     *
     * @Column(name="codEstado", type="integer", nullable=false)
     */
    private $codestado;

    /**
     * @var integer $codgrupo
     *
     * @Column(name="codGrupo", type="integer", nullable=false)
     */
    private $codgrupo;

    /**
     * @var integer $empfacturacion
     *
     * @Column(name="empFacturacion", type="integer", nullable=false)
     */
    private $empfacturacion;

    /**
     * @var string $nombreultmod
     *
     * @Column(name="nombreUltMod", type="string", length=45, nullable=false)
     */
    private $nombreultmod;

    /**
     * @var boolean $isr
     *
     * @Column(name="isr", type="boolean", nullable=false)
     */
    private $isr;

    /**
     * @var boolean $free
     *
     * @Column(name="free", type="boolean", nullable=false)
     */
    private $free;

    /**
     * @var string $propietario
     *
     * @Column(name="propietario", type="string", length=60, nullable=false)
     */
    private $propietario;

    /**
     * @var string $auxtelef
     *
     * @Column(name="auxTelef", type="string", length=50, nullable=false)
     */
    private $auxtelef;

    /**
     * @var string $loginWeb
     *
     * @Column(name="login_web", type="string", length=15, nullable=true)
     */
    private $loginWeb;

    function getCodagencia() {
        return $this->codagencia;
    }

    function getRazonsocial() {
        return $this->razonsocial;
    }

    function getNombreagencia() {
        return $this->nombreagencia;
    }

    function getRifagencia() {
        return $this->rifagencia;
    }

    function getSucursal() {
        return $this->sucursal;
    }

    function getCodpais() {
        return $this->codpais;
    }

    function getTelefono1() {
        return $this->telefono1;
    }

    function getTelefono2() {
        return $this->telefono2;
    }

    function getTelefono3() {
        return $this->telefono3;
    }

    function getFax() {
        return $this->fax;
    }

    function getEmail() {
        return $this->email;
    }

    function getFechainicio() {
        return $this->fechainicio;
    }

    function getAgteretespecial() {
        return $this->agteretespecial;
    }

    function getDescespecial() {
        return $this->descespecial;
    }

    function getTipofacturacion() {
        return $this->tipofacturacion;
    }

    function getDireccionfiscal() {
        return $this->direccionfiscal;
    }

    function getDireccionfisica() {
        return $this->direccionfisica;
    }

    function getActivo() {
        return $this->activo;
    }

    function getFechaultmov() {
        return $this->fechaultmov;
    }

    function getCodciudad() {
        return $this->codciudad;
    }

    function getCodestado() {
        return $this->codestado;
    }

    function getCodgrupo() {
        return $this->codgrupo;
    }

    function getEmpfacturacion() {
        return $this->empfacturacion;
    }

    function getNombreultmod() {
        return $this->nombreultmod;
    }

    function getIsr() {
        return $this->isr;
    }

    function getFree() {
        return $this->free;
    }

    function getPropietario() {
        return $this->propietario;
    }

    function getAuxtelef() {
        return $this->auxtelef;
    }

    function getLoginWeb() {
        return $this->loginWeb;
    }
    
    function setRazonsocial($razonsocial) {
        $this->razonsocial = $razonsocial;
    }

    function setNombreagencia($nombreagencia) {
        $this->nombreagencia = $nombreagencia;
    }

    function setRifagencia($rifagencia) {
        $this->rifagencia = $rifagencia;
    }

    function setSucursal($sucursal) {
        $this->sucursal = $sucursal;
    }

    function setCodpais($codpais) {
        $this->codpais = $codpais;
    }

    function setTelefono1($telefono1) {
        $this->telefono1 = $telefono1;
    }

    function setTelefono2($telefono2) {
        $this->telefono2 = $telefono2;
    }

    function setTelefono3($telefono3) {
        $this->telefono3 = $telefono3;
    }

    function setFax($fax) {
        $this->fax = $fax;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setFechainicio(date $fechainicio) {
        $this->fechainicio = $fechainicio;
    }

    function setAgteretespecial($agteretespecial) {
        $this->agteretespecial = $agteretespecial;
    }

    function setDescespecial($descespecial) {
        $this->descespecial = $descespecial;
    }

    function setTipofacturacion($tipofacturacion) {
        $this->tipofacturacion = $tipofacturacion;
    }

    function setDireccionfiscal($direccionfiscal) {
        $this->direccionfiscal = $direccionfiscal;
    }

    function setDireccionfisica($direccionfisica) {
        $this->direccionfisica = $direccionfisica;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }

    function setFechaultmov(date $fechaultmov) {
        $this->fechaultmov = $fechaultmov;
    }

    function setCodciudad($codciudad) {
        $this->codciudad = $codciudad;
    }

    function setCodestado($codestado) {
        $this->codestado = $codestado;
    }

    function setCodgrupo($codgrupo) {
        $this->codgrupo = $codgrupo;
    }

    function setEmpfacturacion($empfacturacion) {
        $this->empfacturacion = $empfacturacion;
    }

    function setNombreultmod($nombreultmod) {
        $this->nombreultmod = $nombreultmod;
    }

    function setIsr($isr) {
        $this->isr = $isr;
    }

    function setFree($free) {
        $this->free = $free;
    }

    function setPropietario($propietario) {
        $this->propietario = $propietario;
    }

    function setAuxtelef($auxtelef) {
        $this->auxtelef = $auxtelef;
    }

    function setLoginWeb($loginWeb) {
        $this->loginWeb = $loginWeb;
    }


}