<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblageciassibel
 *
 * @ORM\Table(name="tblageciassibel")
 * @ORM\Entity
 */
class Tblageciassibel
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
     * @var string $nombreagencia
     *
     * @ORM\Column(name="nombreagencia", type="string", length=200, nullable=false)
     */
    private $nombreagencia;

    /**
     * @var string $razonsocial
     *
     * @ORM\Column(name="razonsocial", type="string", length=200, nullable=false)
     */
    private $razonsocial;

    /**
     * @var integer $codigosiebel
     *
     * @ORM\Column(name="codigosiebel", type="integer", nullable=false)
     */
    private $codigosiebel;

    /**
     * @var integer $codigovigas
     *
     * @ORM\Column(name="codigovigas", type="integer", nullable=false)
     */
    private $codigovigas;

    /**
     * @var string $codigofinalsiebel
     *
     * @ORM\Column(name="codigofinalsiebel", type="string", length=100, nullable=false)
     */
    private $codigofinalsiebel;


}