<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tbltipodescuento
 *
 * @ORM\Table(name="tbltipodescuento")
 * @ORM\Entity
 */
class Tbltipodescuento
{
    /**
     * @var integer $coddescuento
     *
     * @ORM\Column(name="codDescuento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coddescuento;

    /**
     * @var string $nombredescuento
     *
     * @ORM\Column(name="nombreDescuento", type="string", length=30, nullable=false)
     */
    private $nombredescuento;

    function getCoddescuento() {
        return $this->coddescuento;
    }

    function getNombredescuento() {
        return $this->nombredescuento;
    }

    function setNombredescuento($nombredescuento) {
        $this->nombredescuento = $nombredescuento;
    }



}