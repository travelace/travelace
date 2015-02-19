<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblfacturacontrol
 *
 * @ORM\Table(name="tblfacturacontrol")
 * @ORM\Entity
 */
class Tblfacturacontrol
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
     * @var string $agenciafacturacion
     *
     * @ORM\Column(name="agenciaFacturacion", type="string", length=10, nullable=false)
     */
    private $agenciafacturacion;

    /**
     * @var text $dire1
     *
     * @ORM\Column(name="dire1", type="text", nullable=false)
     */
    private $dire1;

    /**
     * @var text $dire2
     *
     * @ORM\Column(name="dire2", type="text", nullable=false)
     */
    private $dire2;

    /**
     * @var text $dire3
     *
     * @ORM\Column(name="dire3", type="text", nullable=false)
     */
    private $dire3;

    /**
     * @var integer $numerodesde
     *
     * @ORM\Column(name="numeroDesde", type="integer", nullable=false)
     */
    private $numerodesde;

    /**
     * @var integer $numerohasta
     *
     * @ORM\Column(name="numeroHasta", type="integer", nullable=false)
     */
    private $numerohasta;

    /**
     * @var integer $cantidad
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=false)
     */
    private $cantidad;

    /**
     * @var date $fecha
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    function getId() {
        return $this->id;
    }

    function getAgenciafacturacion() {
        return $this->agenciafacturacion;
    }

    function getDire1() {
        return $this->dire1;
    }

    function getDire2() {
        return $this->dire2;
    }

    function getDire3() {
        return $this->dire3;
    }

    function getNumerodesde() {
        return $this->numerodesde;
    }

    function getNumerohasta() {
        return $this->numerohasta;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getFecha() {
        return $this->fecha;
    }

    function setAgenciafacturacion($agenciafacturacion) {
        $this->agenciafacturacion = $agenciafacturacion;
    }

    function setDire1(text $dire1) {
        $this->dire1 = $dire1;
    }

    function setDire2(text $dire2) {
        $this->dire2 = $dire2;
    }

    function setDire3(text $dire3) {
        $this->dire3 = $dire3;
    }

    function setNumerodesde($numerodesde) {
        $this->numerodesde = $numerodesde;
    }

    function setNumerohasta($numerohasta) {
        $this->numerohasta = $numerohasta;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setFecha(date $fecha) {
        $this->fecha = $fecha;
    }



}