<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblciudades
 *
 * @ORM\Table(name="tblciudades")
 * @ORM\Entity
 */
class Tblciudades
{
    /**
     * @var integer $codciudad
     *
     * @ORM\Column(name="codCiudad", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codciudad;

    /**
     * @var string $nombreciudad
     *
     * @ORM\Column(name="nombreCiudad", type="string", length=45, nullable=true)
     */
    private $nombreciudad;

    /**
     * @var integer $codestado
     *
     * @ORM\Column(name="codEstado", type="integer", nullable=true)
     */
    private $codestado;


}