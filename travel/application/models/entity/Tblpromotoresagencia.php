<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblpromotoresagencia
 *
 * @ORM\Table(name="tblpromotoresagencia")
 * @ORM\Entity
 */
class Tblpromotoresagencia
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
     * @var integer $codagencia
     *
     * @ORM\Column(name="codAgencia", type="integer", nullable=false)
     */
    private $codagencia;

    /**
     * @var integer $codigousuario
     *
     * @ORM\Column(name="codigoUsuario", type="integer", nullable=false)
     */
    private $codigousuario;

    /**
     * @var float $comision
     *
     * @ORM\Column(name="comision", type="float", nullable=false)
     */
    private $comision;

    /**
     * @var float $comisiongrupo
     *
     * @ORM\Column(name="comisionGrupo", type="float", nullable=false)
     */
    private $comisiongrupo;

    /**
     * @var string $principal
     *
     * @ORM\Column(name="principal", type="string", length=20, nullable=false)
     */
    private $principal;

    function getId() {
        return $this->id;
    }

    function getCodagencia() {
        return $this->codagencia;
    }

    function getCodigousuario() {
        return $this->codigousuario;
    }

    function getComision() {
        return $this->comision;
    }

    function getComisiongrupo() {
        return $this->comisiongrupo;
    }

    function getPrincipal() {
        return $this->principal;
    }

    function setCodagencia($codagencia) {
        $this->codagencia = $codagencia;
    }

    function setCodigousuario($codigousuario) {
        $this->codigousuario = $codigousuario;
    }

    function setComision($comision) {
        $this->comision = $comision;
    }

    function setComisiongrupo($comisiongrupo) {
        $this->comisiongrupo = $comisiongrupo;
    }

    function setPrincipal($principal) {
        $this->principal = $principal;
    }



}