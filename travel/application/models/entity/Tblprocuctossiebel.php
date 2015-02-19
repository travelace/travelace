<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblprocuctossiebel
 *
 * @ORM\Table(name="tblprocuctossiebel")
 * @ORM\Entity
 */
class Tblprocuctossiebel
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
     * @var string $nombreproducto
     *
     * @ORM\Column(name="nombreproducto", type="string", length=200, nullable=false)
     */
    private $nombreproducto;

    /**
     * @var string $codigoproductosiebel
     *
     * @ORM\Column(name="codigoproductosiebel", type="string", length=200, nullable=false)
     */
    private $codigoproductosiebel;

    /**
     * @var string $abreviaturaproductovigas
     *
     * @ORM\Column(name="abreviaturaproductovigas", type="string", length=200, nullable=false)
     */
    private $abreviaturaproductovigas;

    /**
     * @var integer $codigoproductovigas
     *
     * @ORM\Column(name="codigoproductovigas", type="integer", nullable=false)
     */
    private $codigoproductovigas;

    /**
     * @var integer $tipoventaproducto
     *
     * @ORM\Column(name="tipoVentaProducto", type="integer", nullable=false)
     */
    private $tipoventaproducto;


}