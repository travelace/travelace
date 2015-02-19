<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblpersonascontacto
 *
 * @ORM\Table(name="tblpersonascontacto")
 * @ORM\Entity
 */
class Tblpersonascontacto
{
    /**
     * @var integer $codperscontacto
     *
     * @ORM\Column(name="codPersContacto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codperscontacto;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

    /**
     * @var string $cargo
     *
     * @ORM\Column(name="cargo", type="string", length=45, nullable=true)
     */
    private $cargo;

    /**
     * @var string $telefono
     *
     * @ORM\Column(name="telefono", type="string", length=45, nullable=true)
     */
    private $telefono;

    /**
     * @var string $celular
     *
     * @ORM\Column(name="celular", type="string", length=45, nullable=true)
     */
    private $celular;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var boolean $activo
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var integer $codagencia
     *
     * @ORM\Column(name="codAgencia", type="integer", nullable=false)
     */
    private $codagencia;

    function getCodperscontacto() {
        return $this->codperscontacto;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getCargo() {
        return $this->cargo;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getCelular() {
        return $this->celular;
    }

    function getEmail() {
        return $this->email;
    }

    function getActivo() {
        return $this->activo;
    }

    function getCodagencia() {
        return $this->codagencia;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }

    function setCodagencia($codagencia) {
        $this->codagencia = $codagencia;
    }



}