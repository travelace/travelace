<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblfacturascomisionp
 *
 * @ORM\Table(name="tblfacturascomisionp")
 * @ORM\Entity
 */
class Tblfacturascomisionp
{
    /**
     * @var integer $idfactcomipag
     *
     * @ORM\Column(name="idFactComiPag", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfactcomipag;

    /**
     * @var integer $idfactcomi
     *
     * @ORM\Column(name="idFactComi", type="integer", nullable=false)
     */
    private $idfactcomi;

    /**
     * @var string $idfactura
     *
     * @ORM\Column(name="idFactura", type="string", length=11, nullable=false)
     */
    private $idfactura;


}