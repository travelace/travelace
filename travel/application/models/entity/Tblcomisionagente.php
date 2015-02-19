<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblcomisionagente
 *
 * @ORM\Table(name="tblcomisionagente")
 * @ORM\Entity
 */
class Tblcomisionagente
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
     * @var integer $codagente
     *
     * @ORM\Column(name="codAgente", type="integer", nullable=false)
     */
    private $codagente;

    /**
     * @var integer $producto
     *
     * @ORM\Column(name="producto", type="integer", nullable=false)
     */
    private $producto;

    /**
     * @var integer $comision
     *
     * @ORM\Column(name="comision", type="integer", nullable=false)
     */
    private $comision;


}