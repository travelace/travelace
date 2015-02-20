<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblservicios
 *
 * @ORM\Table(name="tblservicios")
 * @ORM\Entity
 */
class Tblservicios
{
    /**
     * @var integer $ids
     *
     * @ORM\Column(name="ids", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ids;

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string $servicio
     *
     * @ORM\Column(name="servicio", type="string", length=40, nullable=false)
     */
    private $servicio;

    /**
     * @var string $alcance
     *
     * @ORM\Column(name="alcance", type="string", length=100, nullable=false)
     */
    private $alcance;

    function getIds() {
        return $this->ids;
    }

    function getId() {
        return $this->id;
    }

    function getServicio() {
        return $this->servicio;
    }

    function getAlcance() {
        return $this->alcance;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setServicio($servicio) {
        $this->servicio = $servicio;
    }

    function setAlcance($alcance) {
        $this->alcance = $alcance;
    }



}