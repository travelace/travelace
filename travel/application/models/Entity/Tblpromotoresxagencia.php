<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblpromotoresxagencia
 *
 * @ORM\Table(name="tblpromotoresxagencia")
 * @ORM\Entity
 */
class Tblpromotoresxagencia
{
    /**
     * @var integer $codpromoxagen
     *
     * @ORM\Column(name="codPromoxAgen", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codpromoxagen;

    /**
     * @var integer $codpromotor
     *
     * @ORM\Column(name="codPromotor", type="integer", nullable=false)
     */
    private $codpromotor;

    /**
     * @var integer $codagencia
     *
     * @ORM\Column(name="codAgencia", type="integer", nullable=false)
     */
    private $codagencia;

    /**
     * @var decimal $comision
     *
     * @ORM\Column(name="comision", type="decimal", nullable=false)
     */
    private $comision;

    /**
     * @var decimal $comisiongrupo
     *
     * @ORM\Column(name="comisionGrupo", type="decimal", nullable=false)
     */
    private $comisiongrupo;

    /**
     * @var integer $statuspromotor
     *
     * @ORM\Column(name="statusPromotor", type="integer", nullable=false)
     */
    private $statuspromotor;

    function getCodpromoxagen() {
        return $this->codpromoxagen;
    }

    function getCodpromotor() {
        return $this->codpromotor;
    }

    function getCodagencia() {
        return $this->codagencia;
    }

    function getComision() {
        return $this->comision;
    }

    function getComisiongrupo() {
        return $this->comisiongrupo;
    }

    function getStatuspromotor() {
        return $this->statuspromotor;
    }

    function setCodpromotor($codpromotor) {
        $this->codpromotor = $codpromotor;
    }

    function setCodagencia($codagencia) {
        $this->codagencia = $codagencia;
    }

    function setComision(decimal $comision) {
        $this->comision = $comision;
    }

    function setComisiongrupo(decimal $comisiongrupo) {
        $this->comisiongrupo = $comisiongrupo;
    }

    function setStatuspromotor($statuspromotor) {
        $this->statuspromotor = $statuspromotor;
    }



}