<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tablax
 *
 * @ORM\Table(name="tablax")
 * @ORM\Entity
 */
class Tablax
{
    /**
     * @var integer $idcomision
     *
     * @ORM\Column(name="idcomision", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcomision;

    /**
     * @var integer $agencia
     *
     * @ORM\Column(name="agencia", type="integer", nullable=false)
     */
    private $agencia;

    /**
     * @var string $plancomision
     *
     * @ORM\Column(name="planComision", type="string", length=10, nullable=false)
     */
    private $plancomision;

    /**
     * @var float $agenciacomis
     *
     * @ORM\Column(name="agenciaComis", type="float", nullable=false)
     */
    private $agenciacomis;

    /**
     * @var float $agentecomision
     *
     * @ORM\Column(name="agenteComision", type="float", nullable=false)
     */
    private $agentecomision;


}