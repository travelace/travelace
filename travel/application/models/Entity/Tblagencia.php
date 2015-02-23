<?php


namespace Entity;
//use Doctrine\Mapping as ORM;

/**
 * Tblagencia
 *
 * @Table(name="tblagencia")
 * @Entity
 */
class Tblagencia
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
     * @var string $nombreagencia
     *
     * @Column(name="nombreAgencia", type="string", length=60, nullable=false)
     */
    private $nombreagencia;

    /**
     * @var string $nombrecompleto
     *
     * @Column(name="nombreCompleto", type="string", length=60, nullable=false)
     */
    private $nombrecompleto;

    /**
     * @var integer $groupoagencia
     *
     * @Column(name="groupoAgencia", type="integer", nullable=false)
     */
    private $groupoagencia;

    /**
     * @var string $ubicacionagencia
     *
     * @Column(name="ubicacionAgencia", type="string", length=130, nullable=false)
     */
    private $ubicacionagencia;

    /**
     * @var string $sciudadagencia
     *
     * @Column(name="sciudadAgencia", type="string", length=60, nullable=false)
     */
    private $sciudadagencia;

    /**
     * @var integer $ciudadagencia
     *
     * @Column(name="ciudadAgencia", type="integer", nullable=false)
     */
    private $ciudadagencia;

    /**
     * @var integer $estadoagencia
     *
     * @Column(name="estadoAgencia", type="integer", nullable=false)
     */
    private $estadoagencia;

    /**
     * @var string $telefonoagencia
     *
     * @Column(name="telefonoAgencia", type="string", length=60, nullable=false)
     */
    private $telefonoagencia;

    /**
     * @var string $emailagencia
     *
     * @Column(name="emailAgencia", type="string", length=60, nullable=false)
     */
    private $emailagencia;

    /**
     * @var string $contactoagencia
     *
     * @Column(name="contactoAgencia", type="string", length=60, nullable=false)
     */
    private $contactoagencia;

    /**
     * @var string $promotoragencia
     *
     * @Column(name="promotorAgencia", type="string", length=60, nullable=false)
     */
    private $promotoragencia;

    /**
     * @var date $fechainicioagencia
     *
     * @Column(name="fechaInicioAgencia", type="date", nullable=false)
     */
    private $fechainicioagencia;

    /**
     * @var date $ultimamodificacion
     *
     * @Column(name="ultimaModificacion", type="date", nullable=false)
     */
    private $ultimamodificacion;

    /**
     * @var string $rifagencia
     *
     * @Column(name="rifAgencia", type="string", length=60, nullable=false)
     */
    private $rifagencia;

    /**
     * @var string $nitagencia
     *
     * @Column(name="nitAgencia", type="string", length=60, nullable=false)
     */
    private $nitagencia;

    /**
     * @var boolean $isragencia
     *
     * @Column(name="isrAgencia", type="boolean", nullable=false)
     */
    private $isragencia;

    /**
     * @var boolean $freeagencia
     *
     * @Column(name="freeAgencia", type="boolean", nullable=false)
     */
    private $freeagencia;

    /**
     * @var string $usuariomodificacion
     *
     * @Column(name="usuarioModificacion", type="string", length=60, nullable=false)
     */
    private $usuariomodificacion;

    /**
     * @var boolean $acagciaAgcia
     *
     * @Column(name="acagcia_agcia", type="boolean", nullable=false)
     */
    private $acagciaAgcia;

    /**
     * @var boolean $acagteAgcia
     *
     * @Column(name="acagte_agcia", type="boolean", nullable=false)
     */
    private $acagteAgcia;

    /**
     * @var string $ciafactAgcia
     *
     * @Column(name="ciafact_agcia", type="string", length=60, nullable=false)
     */
    private $ciafactAgcia;

    /**
     * @var boolean $esagencia
     *
     * @Column(name="esAgencia", type="boolean", nullable=false)
     */
    private $esagencia;

     /**
     * @var integer $sucursal
     *
     * @Column(name="sucursal", type="integer", nullable=false)
     */
    private $sucursal;
    
     /**
     * @var integer $sucursalagencia
     *
     * @Column(name="sucursalagencia", type="integer", nullable=false)
     */
    private $sucursalagencia;
    
      /**
     * @var string $login
     *
     * @Column(name="login", type="string", length=60, nullable=false)
     */
    private $login;
    
     /**
     * @var string $password
     *
     * @Column(name="password", type="string", length=60, nullable=false)
     */
    private $password;
    
     /**
     * @var string $codigosiebel
     *
     * @Column(name="codigosiebel", type="string", length=60, nullable=false)
     */
    private $codigosiebel;

    function getCodagencia() {
        return $this->codagencia;
    }

    function getNombreagencia() {
        return $this->nombreagencia;
    }

    function getNombrecompleto() {
        return $this->nombrecompleto;
    }

    function getGroupoagencia() {
        return $this->groupoagencia;
    }

    function getUbicacionagencia() {
        return $this->ubicacionagencia;
    }

    function getSciudadagencia() {
        return $this->sciudadagencia;
    }

    function getCiudadagencia() {
        return $this->ciudadagencia;
    }

    function getEstadoagencia() {
        return $this->estadoagencia;
    }

    function getTelefonoagencia() {
        return $this->telefonoagencia;
    }

    function getEmailagencia() {
        return $this->emailagencia;
    }

    function getContactoagencia() {
        return $this->contactoagencia;
    }

    function getPromotoragencia() {
        return $this->promotoragencia;
    }

    function getFechainicioagencia() {
        return $this->fechainicioagencia;
    }

    function getUltimamodificacion() {
        return $this->ultimamodificacion;
    }

    function getRifagencia() {
        return $this->rifagencia;
    }

    function getNitagencia() {
        return $this->nitagencia;
    }

    function getIsragencia() {
        return $this->isragencia;
    }

    function getFreeagencia() {
        return $this->freeagencia;
    }

    function getUsuariomodificacion() {
        return $this->usuariomodificacion;
    }

    function getAcagciaAgcia() {
        return $this->acagciaAgcia;
    }

    function getAcagteAgcia() {
        return $this->acagteAgcia;
    }

    function getCiafactAgcia() {
        return $this->ciafactAgcia;
    }

    function getEsagencia() {
        return $this->esagencia;
    }

    function getSucursal() {
        return $this->sucursal;
    }

    function getSucursalagencia() {
        return $this->sucursalagencia;
    }

    function getLogin() {
        return $this->login;
    }

    function getPassword() {
        return $this->password;
    }

    function getCodigosiebel() {
        return $this->codigosiebel;
    }

    function setNombreagencia($nombreagencia) {
        $this->nombreagencia = $nombreagencia;
    }

    function setNombrecompleto($nombrecompleto) {
        $this->nombrecompleto = $nombrecompleto;
    }

    function setGroupoagencia($groupoagencia) {
        $this->groupoagencia = $groupoagencia;
    }

    function setUbicacionagencia($ubicacionagencia) {
        $this->ubicacionagencia = $ubicacionagencia;
    }

    function setSciudadagencia($sciudadagencia) {
        $this->sciudadagencia = $sciudadagencia;
    }

    function setCiudadagencia($ciudadagencia) {
        $this->ciudadagencia = $ciudadagencia;
    }

    function setEstadoagencia($estadoagencia) {
        $this->estadoagencia = $estadoagencia;
    }

    function setTelefonoagencia($telefonoagencia) {
        $this->telefonoagencia = $telefonoagencia;
    }

    function setEmailagencia($emailagencia) {
        $this->emailagencia = $emailagencia;
    }

    function setContactoagencia($contactoagencia) {
        $this->contactoagencia = $contactoagencia;
    }

    function setPromotoragencia($promotoragencia) {
        $this->promotoragencia = $promotoragencia;
    }

    function setFechainicioagencia(date $fechainicioagencia) {
        $this->fechainicioagencia = $fechainicioagencia;
    }

    function setUltimamodificacion(date $ultimamodificacion) {
        $this->ultimamodificacion = $ultimamodificacion;
    }

    function setRifagencia($rifagencia) {
        $this->rifagencia = $rifagencia;
    }

    function setNitagencia($nitagencia) {
        $this->nitagencia = $nitagencia;
    }

    function setIsragencia($isragencia) {
        $this->isragencia = $isragencia;
    }

    function setFreeagencia($freeagencia) {
        $this->freeagencia = $freeagencia;
    }

    function setUsuariomodificacion($usuariomodificacion) {
        $this->usuariomodificacion = $usuariomodificacion;
    }

    function setAcagciaAgcia($acagciaAgcia) {
        $this->acagciaAgcia = $acagciaAgcia;
    }

    function setAcagteAgcia($acagteAgcia) {
        $this->acagteAgcia = $acagteAgcia;
    }

    function setCiafactAgcia($ciafactAgcia) {
        $this->ciafactAgcia = $ciafactAgcia;
    }

    function setEsagencia($esagencia) {
        $this->esagencia = $esagencia;
    }

    function setSucursal($sucursal) {
        $this->sucursal = $sucursal;
    }
    
    function setSucursalagencia($sucursalagencia) {
        $this->sucursalagencia = $sucursalagencia;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setCodigosiebel($codigosiebel) {
        $this->codigosiebel = $codigosiebel;
    }
    
}