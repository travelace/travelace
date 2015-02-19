<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblservicios
 *
 * @ORM\Table(name="tblservicios")
 * @ORM\Entity
 */
class Tblservicios
{
    /**
     * @var integer $ids
     *
     * @ORM\Column(name="ids", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ids;

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string $servicio
     *
     * @ORM\Column(name="servicio", type="string", length=40, nullable=false)
     */
    private $servicio;

    /**
     * @var string $alcance
     *
     * @ORM\Column(name="alcance", type="string", length=100, nullable=false)
     */
    private $alcance;


}