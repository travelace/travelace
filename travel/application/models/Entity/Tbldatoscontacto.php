<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tbldatoscontacto
 *
 * @ORM\Table(name="tbldatoscontacto")
 * @ORM\Entity
 */
class Tbldatoscontacto
{
    /**
     * @var integer $idcontacto
     *
     * @ORM\Column(name="idContacto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontacto;

    /**
     * @var integer $codvouchercontacto
     *
     * @ORM\Column(name="codVoucherContacto", type="integer", nullable=false)
     */
    private $codvouchercontacto;

    /**
     * @var string $nombrecontacto
     *
     * @ORM\Column(name="nombreContacto", type="string", length=70, nullable=false)
     */
    private $nombrecontacto;

    /**
     * @var string $telefonocontacto
     *
     * @ORM\Column(name="telefonoContacto", type="string", length=30, nullable=false)
     */
    private $telefonocontacto;

    /**
     * @var string $correocontacto
     *
     * @ORM\Column(name="correoContacto", type="string", length=50, nullable=false)
     */
    private $correocontacto;

    /**
     * @var string $direcciontitularcontacto
     *
     * @ORM\Column(name="direccionTitularContacto", type="string", length=200, nullable=false)
     */
    private $direcciontitularcontacto;

    /**
     * @var string $telefonotitularcontacto
     *
     * @ORM\Column(name="telefonoTitularContacto", type="string", length=30, nullable=false)
     */
    private $telefonotitularcontacto;

    /**
     * @var string $correotitularcontacto
     *
     * @ORM\Column(name="correoTitularContacto", type="string", length=50, nullable=false)
     */
    private $correotitularcontacto;

    function getIdcontacto() {
        return $this->idcontacto;
    }

    function getCodvouchercontacto() {
        return $this->codvouchercontacto;
    }

    function getNombrecontacto() {
        return $this->nombrecontacto;
    }

    function getTelefonocontacto() {
        return $this->telefonocontacto;
    }

    function getCorreocontacto() {
        return $this->correocontacto;
    }

    function getDirecciontitularcontacto() {
        return $this->direcciontitularcontacto;
    }

    function getTelefonotitularcontacto() {
        return $this->telefonotitularcontacto;
    }

    function getCorreotitularcontacto() {
        return $this->correotitularcontacto;
    }

    function setCodvouchercontacto($codvouchercontacto) {
        $this->codvouchercontacto = $codvouchercontacto;
    }

    function setNombrecontacto($nombrecontacto) {
        $this->nombrecontacto = $nombrecontacto;
    }

    function setTelefonocontacto($telefonocontacto) {
        $this->telefonocontacto = $telefonocontacto;
    }

    function setCorreocontacto($correocontacto) {
        $this->correocontacto = $correocontacto;
    }

    function setDirecciontitularcontacto($direcciontitularcontacto) {
        $this->direcciontitularcontacto = $direcciontitularcontacto;
    }

    function setTelefonotitularcontacto($telefonotitularcontacto) {
        $this->telefonotitularcontacto = $telefonotitularcontacto;
    }

    function setCorreotitularcontacto($correotitularcontacto) {
        $this->correotitularcontacto = $correotitularcontacto;
    }


    
}