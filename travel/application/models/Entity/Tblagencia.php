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
     * @Column(name="nombreAgencia", type="string", length=60)
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
     * @var string $telefonoagencia2
     *
     * @Column(name="telefonoagencia2", type="string", length=20, nullable=false)
     */
    private $telefonoagencia2;

     /**
     * @var string $fax
     *
     * @Column(name="fax", type="string", length=20, nullable=false)
     */
    private $fax;
    
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
     * @var boolean $observaciones
     *
     * @Column(name="observaciones", type="string",length=500, nullable=false)
     */
    private $observaciones;

    /**
     * @var boolean $tipoFacturacion
     *
     * @Column(name="tipoFacturacion", type="integer", nullable=false)
     */
    private $tipoFacturacion;

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
    
    /**
     * @var integer $corporativo
     *
     * @Column(name="corporativo", type="integer", nullable=false)
     */
    private $corporativo;
    
     /**
     * @var integer $corporativoAgencia
     *
     * @Column(name="corporativoAgencia", type="integer", nullable=false)
     */
    private $corporativoAgencia;
    
    

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

    function getCiudadagencia() {
        return $this->ciudadagencia;
    }

    function getEstadoagencia() {
        return $this->estadoagencia;
    }

    function getTelefonoagencia() {
        return $this->telefonoagencia;
    }

    function getTelefonoagencia2() {
        return $this->telefonoagencia2;
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

    function getIsragencia() {
        return $this->isragencia;
    }

    function getFreeagencia() {
        return $this->freeagencia;
    }

    function getUsuariomodificacion() {
        return $this->usuariomodificacion;
    }

    function getTipoFacturacion() {
        return $this->tipoFacturacion;
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

    function getObservaciones() {
        return $this->observaciones;
    }
    
    function getFax() {
        return $this->fax;
    }

    function getCorporativo() {
        return $this->corporativo;
    }

    function getCorporativoAgencia() {
        return $this->corporativoAgencia;
    }
    
    function setObservaciones($observaciones) {
        $this->observaciones = $observaciones;
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

    function setCiudadagencia($ciudadagencia) {
        $this->ciudadagencia = $ciudadagencia;
    }

    function setEstadoagencia($estadoagencia) {
        $this->estadoagencia = $estadoagencia;
    }

    function setTelefonoagencia($telefonoagencia) {
        $this->telefonoagencia = $telefonoagencia;
    }

    function setTelefonoagencia2($telefonoagencia2) {
        $this->telefonoagencia2 = $telefonoagencia2;
    }
    
    function setTipoFacturacion($tipoFacturacion) {
        $this->tipoFacturacion = $tipoFacturacion;
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

    function setFechainicioagencia(\DateTime $fechainicioagencia) {
        $this->fechainicioagencia = $fechainicioagencia;
    }

    function setUltimamodificacion(\DateTime $ultimamodificacion) {
        $this->ultimamodificacion = $ultimamodificacion;
    }

    function setRifagencia($rifagencia) {
        $this->rifagencia = $rifagencia;
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
    
    function setFax($fax) {
        $this->fax = $fax;
    }

    function setCorporativo($corporativo) {
        $this->corporativo = $corporativo;
    }

    function setCorporativoAgencia($corporativoAgencia) {
        $this->corporativoAgencia = $corporativoAgencia;
    }



}