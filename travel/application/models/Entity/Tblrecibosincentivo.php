<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblrecibosincentivo
 *
 * @ORM\Table(name="tblrecibosincentivo")
 * @ORM\Entity
 */
class Tblrecibosincentivo
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer $idrecibo
     *
     * @ORM\Column(name="idRecibo", type="integer", nullable=false)
     */
    private $idrecibo;

    /**
     * @var integer $compania
     *
     * @ORM\Column(name="compania", type="integer", nullable=true)
     */
    private $compania;

    /**
     * @var string $nacionalidad
     *
     * @ORM\Column(name="nacionalidad", type="string", length=1, nullable=true)
     */
    private $nacionalidad;

    /**
     * @var integer $nrocedula
     *
     * @ORM\Column(name="nroCedula", type="integer", nullable=true)
     */
    private $nrocedula;

    /**
     * @var string $nrocuenta
     *
     * @ORM\Column(name="nroCuenta", type="string", length=20, nullable=true)
     */
    private $nrocuenta;

    /**
     * @var decimal $monto
     *
     * @ORM\Column(name="monto", type="decimal", nullable=true)
     */
    private $monto;

    /**
     * @var string $nombreagente
     *
     * @ORM\Column(name="nombreAgente", type="string", length=60, nullable=true)
     */
    private $nombreagente;

    /**
     * @var integer $nrorecibo
     *
     * @ORM\Column(name="nroRecibo", type="integer", nullable=true)
     */
    private $nrorecibo;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=80, nullable=true)
     */
    private $email;

    /**
     * @var string $descripcion
     *
     * @ORM\Column(name="descripcion", type="string", length=150, nullable=true)
     */
    private $descripcion;

    /**
     * @var string $nrolote
     *
     * @ORM\Column(name="nroLote", type="string", length=15, nullable=true)
     */
    private $nrolote;

    /**
     * @var integer $codagencia
     *
     * @ORM\Column(name="codAgencia", type="integer", nullable=true)
     */
    private $codagencia;

    /**
     * @var date $fecharecibo
     *
     * @ORM\Column(name="fechaRecibo", type="date", nullable=false)
     */
    private $fecharecibo;

    /**
     * @var boolean $status
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    function getId() {
        return $this->id;
    }

    function getIdrecibo() {
        return $this->idrecibo;
    }

    function getCompania() {
        return $this->compania;
    }

    function getNacionalidad() {
        return $this->nacionalidad;
    }

    function getNrocedula() {
        return $this->nrocedula;
    }

    function getNrocuenta() {
        return $this->nrocuenta;
    }

    function getMonto() {
        return $this->monto;
    }

    function getNombreagente() {
        return $this->nombreagente;
    }

    function getNrorecibo() {
        return $this->nrorecibo;
    }

    function getEmail() {
        return $this->email;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getNrolote() {
        return $this->nrolote;
    }

    function getCodagencia() {
        return $this->codagencia;
    }

    function getFecharecibo() {
        return $this->fecharecibo;
    }

    function getStatus() {
        return $this->status;
    }

    function setIdrecibo($idrecibo) {
        $this->idrecibo = $idrecibo;
    }

    function setCompania($compania) {
        $this->compania = $compania;
    }

    function setNacionalidad($nacionalidad) {
        $this->nacionalidad = $nacionalidad;
    }

    function setNrocedula($nrocedula) {
        $this->nrocedula = $nrocedula;
    }

    function setNrocuenta($nrocuenta) {
        $this->nrocuenta = $nrocuenta;
    }

    function setMonto(decimal $monto) {
        $this->monto = $monto;
    }

    function setNombreagente($nombreagente) {
        $this->nombreagente = $nombreagente;
    }

    function setNrorecibo($nrorecibo) {
        $this->nrorecibo = $nrorecibo;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setNrolote($nrolote) {
        $this->nrolote = $nrolote;
    }

    function setCodagencia($codagencia) {
        $this->codagencia = $codagencia;
    }

    function setFecharecibo(date $fecharecibo) {
        $this->fecharecibo = $fecharecibo;
    }

    function setStatus($status) {
        $this->status = $status;
    }



}