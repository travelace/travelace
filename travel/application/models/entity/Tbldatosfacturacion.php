<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tbldatosfacturacion
 *
 * @ORM\Table(name="tbldatosfacturacion")
 * @ORM\Entity
 */
class Tbldatosfacturacion
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
     * @var integer $nrovoucherfacturacion
     *
     * @ORM\Column(name="nroVoucherFacturacion", type="integer", nullable=false)
     */
    private $nrovoucherfacturacion;

    /**
     * @var string $riffacturacion
     *
     * @ORM\Column(name="rifFacturacion", type="string", length=15, nullable=false)
     */
    private $riffacturacion;

    /**
     * @var string $razonsocialfacturacion
     *
     * @ORM\Column(name="razonSocialFacturacion", type="string", length=50, nullable=false)
     */
    private $razonsocialfacturacion;

    /**
     * @var string $direccionfacturacion
     *
     * @ORM\Column(name="direccionFacturacion", type="string", length=300, nullable=false)
     */
    private $direccionfacturacion;

    /**
     * @var string $estadofacturacion
     *
     * @ORM\Column(name="estadoFacturacion", type="string", length=30, nullable=false)
     */
    private $estadofacturacion;

    /**
     * @var string $ciudadfacturacion
     *
     * @ORM\Column(name="ciudadFacturacion", type="string", length=30, nullable=false)
     */
    private $ciudadfacturacion;

    /**
     * @var string $correofacturacion
     *
     * @ORM\Column(name="correoFacturacion", type="string", length=60, nullable=false)
     */
    private $correofacturacion;

    /**
     * @var string $telefonofacturacion
     *
     * @ORM\Column(name="telefonoFacturacion", type="string", length=30, nullable=false)
     */
    private $telefonofacturacion;

    function getId() {
        return $this->id;
    }

    function getNrovoucherfacturacion() {
        return $this->nrovoucherfacturacion;
    }

    function getRiffacturacion() {
        return $this->riffacturacion;
    }

    function getRazonsocialfacturacion() {
        return $this->razonsocialfacturacion;
    }

    function getDireccionfacturacion() {
        return $this->direccionfacturacion;
    }

    function getEstadofacturacion() {
        return $this->estadofacturacion;
    }

    function getCiudadfacturacion() {
        return $this->ciudadfacturacion;
    }

    function getCorreofacturacion() {
        return $this->correofacturacion;
    }

    function getTelefonofacturacion() {
        return $this->telefonofacturacion;
    }

    function setNrovoucherfacturacion($nrovoucherfacturacion) {
        $this->nrovoucherfacturacion = $nrovoucherfacturacion;
    }

    function setRiffacturacion($riffacturacion) {
        $this->riffacturacion = $riffacturacion;
    }

    function setRazonsocialfacturacion($razonsocialfacturacion) {
        $this->razonsocialfacturacion = $razonsocialfacturacion;
    }

    function setDireccionfacturacion($direccionfacturacion) {
        $this->direccionfacturacion = $direccionfacturacion;
    }

    function setEstadofacturacion($estadofacturacion) {
        $this->estadofacturacion = $estadofacturacion;
    }

    function setCiudadfacturacion($ciudadfacturacion) {
        $this->ciudadfacturacion = $ciudadfacturacion;
    }

    function setCorreofacturacion($correofacturacion) {
        $this->correofacturacion = $correofacturacion;
    }

    function setTelefonofacturacion($telefonofacturacion) {
        $this->telefonofacturacion = $telefonofacturacion;
    }



}