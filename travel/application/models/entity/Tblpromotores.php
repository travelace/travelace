<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblpromotores
 *
 * @ORM\Table(name="tblpromotores")
 * @ORM\Entity
 */
class Tblpromotores
{
    /**
     * @var integer $codpromotor
     *
     * @ORM\Column(name="codPromotor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codpromotor;

    /**
     * @var string $nombrepromotor
     *
     * @ORM\Column(name="nombrePromotor", type="string", length=40, nullable=false)
     */
    private $nombrepromotor;

    /**
     * @var boolean $activo
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo;


}