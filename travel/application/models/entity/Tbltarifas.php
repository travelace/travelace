<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tbltarifas
 *
 * @ORM\Table(name="tbltarifas")
 * @ORM\Entity
 */
class Tbltarifas
{
    /**
     * @var integer $codtarifa
     *
     * @ORM\Column(name="codTarifa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codtarifa;

    /**
     * @var integer $codproducto
     *
     * @ORM\Column(name="codProducto", type="integer", nullable=true)
     */
    private $codproducto;

    /**
     * @var integer $diastarifa
     *
     * @ORM\Column(name="diasTarifa", type="integer", nullable=true)
     */
    private $diastarifa;

    /**
     * @var decimal $valortarifa
     *
     * @ORM\Column(name="valorTarifa", type="decimal", nullable=true)
     */
    private $valortarifa;

    /**
     * @var boolean $anualtarifa
     *
     * @ORM\Column(name="anualTarifa", type="boolean", nullable=true)
     */
    private $anualtarifa;

    function getCodtarifa() {
        return $this->codtarifa;
    }

    function getCodproducto() {
        return $this->codproducto;
    }

    function getDiastarifa() {
        return $this->diastarifa;
    }

    function getValortarifa() {
        return $this->valortarifa;
    }

    function getAnualtarifa() {
        return $this->anualtarifa;
    }

    function setCodproducto($codproducto) {
        $this->codproducto = $codproducto;
    }

    function setDiastarifa($diastarifa) {
        $this->diastarifa = $diastarifa;
    }

    function setValortarifa(decimal $valortarifa) {
        $this->valortarifa = $valortarifa;
    }

    function setAnualtarifa($anualtarifa) {
        $this->anualtarifa = $anualtarifa;
    }



}