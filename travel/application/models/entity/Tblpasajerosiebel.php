<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblpasajerosiebel
 *
 * @ORM\Table(name="tblpasajerosiebel")
 * @ORM\Entity
 */
class Tblpasajerosiebel
{
    /**
     * @var string $idpasajerovouchersiebel
     *
     * @ORM\Column(name="idpasajerovouchersiebel", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpasajerovouchersiebel;

    /**
     * @var string $codvouchersiebel
     *
     * @ORM\Column(name="codvouchersiebel", type="string", length=100, nullable=false)
     */
    private $codvouchersiebel;

    /**
     * @var string $nombresibel
     *
     * @ORM\Column(name="nombresibel", type="string", length=100, nullable=false)
     */
    private $nombresibel;

    /**
     * @var string $nrodocumento
     *
     * @ORM\Column(name="nrodocumento", type="string", length=100, nullable=false)
     */
    private $nrodocumento;

    /**
     * @var integer $edad
     *
     * @ORM\Column(name="edad", type="integer", nullable=false)
     */
    private $edad;

    /**
     * @var string $telefonoparticular
     *
     * @ORM\Column(name="telefonoparticular", type="string", length=30, nullable=false)
     */
    private $telefonoparticular;

    /**
     * @var string $telefonoemergecia
     *
     * @ORM\Column(name="telefonoemergecia", type="string", length=30, nullable=false)
     */
    private $telefonoemergecia;


}