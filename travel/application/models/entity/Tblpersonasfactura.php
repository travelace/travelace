<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblpersonasfactura
 *
 * @ORM\Table(name="tblpersonasfactura")
 * @ORM\Entity
 */
class Tblpersonasfactura
{
    /**
     * @var integer $codagencia
     *
     * @ORM\Column(name="codAgencia", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codagencia;

    /**
     * @var string $nombreagencia
     *
     * @ORM\Column(name="nombreAgencia", type="string", length=60, nullable=false)
     */
    private $nombreagencia;

    /**
     * @var string $nombrecompleto
     *
     * @ORM\Column(name="nombreCompleto", type="string", length=60, nullable=false)
     */
    private $nombrecompleto;

    /**
     * @var string $groupoagencia
     *
     * @ORM\Column(name="groupoAgencia", type="string", length=60, nullable=false)
     */
    private $groupoagencia;

    /**
     * @var string $ubicacionagencia
     *
     * @ORM\Column(name="ubicacionAgencia", type="string", length=130, nullable=false)
     */
    private $ubicacionagencia;

    /**
     * @var string $sciudadagencia
     *
     * @ORM\Column(name="sciudadAgencia", type="string", length=60, nullable=false)
     */
    private $sciudadagencia;

    /**
     * @var string $ciudadagencia
     *
     * @ORM\Column(name="ciudadAgencia", type="string", length=60, nullable=false)
     */
    private $ciudadagencia;

    /**
     * @var string $estadoagencia
     *
     * @ORM\Column(name="estadoAgencia", type="string", length=60, nullable=false)
     */
    private $estadoagencia;

    /**
     * @var string $telefonoagencia
     *
     * @ORM\Column(name="telefonoAgencia", type="string", length=60, nullable=false)
     */
    private $telefonoagencia;

    /**
     * @var string $emailagencia
     *
     * @ORM\Column(name="emailAgencia", type="string", length=60, nullable=false)
     */
    private $emailagencia;

    /**
     * @var string $contactoagencia
     *
     * @ORM\Column(name="contactoAgencia", type="string", length=60, nullable=false)
     */
    private $contactoagencia;

    /**
     * @var string $promotoragencia
     *
     * @ORM\Column(name="promotorAgencia", type="string", length=60, nullable=false)
     */
    private $promotoragencia;

    /**
     * @var date $fechainicioagencia
     *
     * @ORM\Column(name="fechaInicioAgencia", type="date", nullable=false)
     */
    private $fechainicioagencia;

    /**
     * @var date $ultimamodificacion
     *
     * @ORM\Column(name="ultimaModificacion", type="date", nullable=false)
     */
    private $ultimamodificacion;

    /**
     * @var string $rifagencia
     *
     * @ORM\Column(name="rifAgencia", type="string", length=60, nullable=false)
     */
    private $rifagencia;

    /**
     * @var string $nitagencia
     *
     * @ORM\Column(name="nitAgencia", type="string", length=60, nullable=false)
     */
    private $nitagencia;

    /**
     * @var boolean $isragencia
     *
     * @ORM\Column(name="isrAgencia", type="boolean", nullable=false)
     */
    private $isragencia;

    /**
     * @var boolean $freeagencia
     *
     * @ORM\Column(name="freeAgencia", type="boolean", nullable=false)
     */
    private $freeagencia;

    /**
     * @var string $usuariomodificacion
     *
     * @ORM\Column(name="usuarioModificacion", type="string", length=60, nullable=false)
     */
    private $usuariomodificacion;

    /**
     * @var boolean $acagciaAgcia
     *
     * @ORM\Column(name="acagcia_agcia", type="boolean", nullable=false)
     */
    private $acagciaAgcia;

    /**
     * @var boolean $acagteAgcia
     *
     * @ORM\Column(name="acagte_agcia", type="boolean", nullable=false)
     */
    private $acagteAgcia;

    /**
     * @var string $ciafactAgcia
     *
     * @ORM\Column(name="ciafact_agcia", type="string", length=60, nullable=false)
     */
    private $ciafactAgcia;

    /**
     * @var boolean $esagencia
     *
     * @ORM\Column(name="esAgencia", type="boolean", nullable=false)
     */
    private $esagencia;

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



}