<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblfacturacontrol
 *
 * @ORM\Table(name="tblfacturacontrol")
 * @ORM\Entity
 */
class Tblfacturacontrol
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
     * @var string $agenciafacturacion
     *
     * @ORM\Column(name="agenciaFacturacion", type="string", length=10, nullable=false)
     */
    private $agenciafacturacion;

    /**
     * @var text $dire1
     *
     * @ORM\Column(name="dire1", type="text", nullable=false)
     */
    private $dire1;

    /**
     * @var text $dire2
     *
     * @ORM\Column(name="dire2", type="text", nullable=false)
     */
    private $dire2;

    /**
     * @var text $dire3
     *
     * @ORM\Column(name="dire3", type="text", nullable=false)
     */
    private $dire3;

    /**
     * @var integer $numerodesde
     *
     * @ORM\Column(name="numeroDesde", type="integer", nullable=false)
     */
    private $numerodesde;

    /**
     * @var integer $numerohasta
     *
     * @ORM\Column(name="numeroHasta", type="integer", nullable=false)
     */
    private $numerohasta;

    /**
     * @var integer $cantidad
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=false)
     */
    private $cantidad;

    /**
     * @var date $fecha
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;


}