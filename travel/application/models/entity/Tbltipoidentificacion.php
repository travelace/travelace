<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tbltipoidentificacion
 *
 * @ORM\Table(name="tbltipoidentificacion")
 * @ORM\Entity
 */
class Tbltipoidentificacion
{
    /**
     * @var integer $codidentificacion
     *
     * @ORM\Column(name="codIdentificacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codidentificacion;

    /**
     * @var string $nombreidentificacion
     *
     * @ORM\Column(name="nombreIdentificacion", type="string", length=30, nullable=false)
     */
    private $nombreidentificacion;


}