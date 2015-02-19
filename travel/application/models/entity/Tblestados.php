<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblestados
 *
 * @ORM\Table(name="tblestados")
 * @ORM\Entity
 */
class Tblestados
{
    /**
     * @var integer $codestado
     *
     * @ORM\Column(name="codEstado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codestado;

    /**
     * @var string $nombreestado
     *
     * @ORM\Column(name="nombreEstado", type="string", length=45, nullable=true)
     */
    private $nombreestado;

    /**
     * @var integer $codpais
     *
     * @ORM\Column(name="codPais", type="integer", nullable=true)
     */
    private $codpais;

    /**
     * @var boolean $zonafranca
     *
     * @ORM\Column(name="zonaFranca", type="boolean", nullable=false)
     */
    private $zonafranca;


}