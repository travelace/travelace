<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tbltipovoucher
 *
 * @ORM\Table(name="tbltipovoucher")
 * @ORM\Entity
 */
class Tbltipovoucher
{
    /**
     * @var integer $codtipovoucher
     *
     * @ORM\Column(name="codTipoVoucher", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codtipovoucher;

    /**
     * @var string $nombretipovoucher
     *
     * @ORM\Column(name="nombreTipoVoucher", type="string", length=30, nullable=false)
     */
    private $nombretipovoucher;


}