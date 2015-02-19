<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblbancos
 *
 * @ORM\Table(name="tblbancos")
 * @ORM\Entity
 */
class Tblbancos
{
    /**
     * @var integer $codbanco
     *
     * @ORM\Column(name="codBanco", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codbanco;

    /**
     * @var string $nombrebanco
     *
     * @ORM\Column(name="nombreBanco", type="string", length=45, nullable=true)
     */
    private $nombrebanco;

    /**
     * @var boolean $activo
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo;


}