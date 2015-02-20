<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblcomisionagencia
 *
 * @ORM\Table(name="tblcomisionagencia")
 * @ORM\Entity
 */
class Tblcomisionagencia
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
     * @var integer $producto
     *
     * @ORM\Column(name="producto", type="integer", nullable=false)
     */
    private $producto;

    /**
     * @var integer $comision
     *
     * @ORM\Column(name="comision", type="integer", nullable=false)
     */
    private $comision;

    function getId() {
        return $this->id;
    }

    function getCodagencia() {
        return $this->codagencia;
    }

    function getProducto() {
        return $this->producto;
    }

    function getComision() {
        return $this->comision;
    }

    function setCodagencia($codagencia) {
        $this->codagencia = $codagencia;
    }

    function setProducto($producto) {
        $this->producto = $producto;
    }

    function setComision($comision) {
        $this->comision = $comision;
    }


    
}