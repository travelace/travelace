<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblservicioanuales
 *
 * @ORM\Table(name="tblservicioanuales")
 * @ORM\Entity
 */
class Tblservicioanuales
{
    /**
     * @var integer $codanual
     *
     * @ORM\Column(name="codAnual", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codanual;

    /**
     * @var string $nombreanual
     *
     * @ORM\Column(name="nombreAnual", type="string", length=100, nullable=false)
     */
    private $nombreanual;


}