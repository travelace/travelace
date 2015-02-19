<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblpromociones
 *
 * @ORM\Table(name="tblpromociones")
 * @ORM\Entity
 */
class Tblpromociones
{
    /**
     * @var integer $codpromocion
     *
     * @ORM\Column(name="codPromocion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codpromocion;

    /**
     * @var string $nombrepromocion
     *
     * @ORM\Column(name="nombrePromocion", type="string", length=50, nullable=false)
     */
    private $nombrepromocion;

    /**
     * @var date $fechainicionpromocion
     *
     * @ORM\Column(name="fechaInicionPromocion", type="date", nullable=false)
     */
    private $fechainicionpromocion;

    /**
     * @var date $fechafinpromocion
     *
     * @ORM\Column(name="fechaFinPromocion", type="date", nullable=false)
     */
    private $fechafinpromocion;


}