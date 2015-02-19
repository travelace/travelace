<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tbltipopago
 *
 * @ORM\Table(name="tbltipopago")
 * @ORM\Entity
 */
class Tbltipopago
{
    /**
     * @var integer $codpago
     *
     * @ORM\Column(name="codPago", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codpago;

    /**
     * @var string $nombrepago
     *
     * @ORM\Column(name="nombrePago", type="string", length=30, nullable=false)
     */
    private $nombrepago;

    function getCodpago() {
        return $this->codpago;
    }

    function getNombrepago() {
        return $this->nombrepago;
    }

    function setNombrepago($nombrepago) {
        $this->nombrepago = $nombrepago;
    }



}