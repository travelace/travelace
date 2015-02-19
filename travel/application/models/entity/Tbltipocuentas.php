<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tbltipocuentas
 *
 * @ORM\Table(name="tbltipocuentas")
 * @ORM\Entity
 */
class Tbltipocuentas
{
    /**
     * @var integer $codtipocuenta
     *
     * @ORM\Column(name="codTipoCuenta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codtipocuenta;

    /**
     * @var string $nombretcuenta
     *
     * @ORM\Column(name="nombreTCuenta", type="string", length=30, nullable=false)
     */
    private $nombretcuenta;

    function getCodtipocuenta() {
        return $this->codtipocuenta;
    }

    function getNombretcuenta() {
        return $this->nombretcuenta;
    }

    function setNombretcuenta($nombretcuenta) {
        $this->nombretcuenta = $nombretcuenta;
    }



}