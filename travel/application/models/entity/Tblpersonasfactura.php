<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblpersonasfactura
 *
 * @ORM\Table(name="tblpersonasfactura")
 * @ORM\Entity
 */
class Tblpersonasfactura
{
    /**
     * @var integer $codagencia
     *
     * @ORM\Column(name="codAgencia", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codagencia;

    /**
     * @var string $nombreagencia
     *
     * @ORM\Column(name="nombreAgencia", type="string", length=60, nullable=false)
     */
    private $nombreagencia;

    /**
     * @var string $nombrecompleto
     *
     * @ORM\Column(name="nombreCompleto", type="string", length=60, nullable=false)
     */
    private $nombrecompleto;

    /**
     * @var string $groupoagencia
     *
     * @ORM\Column(name="groupoAgencia", type="string", length=60, nullable=false)
     */
    private $groupoagencia;

    /**
     * @var string $ubicacionagencia
     *
     * @ORM\Column(name="ubicacionAgencia", type="string", length=130, nullable=false)
     */
    private $ubicacionagencia;

    /**
     * @var string $sciudadagencia
     *
     * @ORM\Column(name="sciudadAgencia", type="string", length=60, nullable=false)
     */
    private $sciudadagencia;

    /**
     * @var string $ciudadagencia
     *
     * @ORM\Column(name="ciudadAgencia", type="string", length=60, nullable=false)
     */
    private $ciudadagencia;

    /**
     * @var string $estadoagencia
     *
     * @ORM\Column(name="estadoAgencia", type="string", length=60, nullable=false)
     */
    private $estadoagencia;

    /**
     * @var string $telefonoagencia
     *
     * @ORM\Column(name="telefonoAgencia", type="string", length=60, nullable=false)
     */
    private $telefonoagencia;

    /**
     * @var string $emailagencia
     *
     * @ORM\Column(name="emailAgencia", type="string", length=60, nullable=false)
     */
    private $emailagencia;

    /**
     * @var string $contactoagencia
     *
     * @ORM\Column(name="contactoAgencia", type="string", length=60, nullable=false)
     */
    private $contactoagencia;

    /**
     * @var string $promotoragencia
     *
     * @ORM\Column(name="promotorAgencia", type="string", length=60, nullable=false)
     */
    private $promotoragencia;

    /**
     * @var date $fechainicioagencia
     *
     * @ORM\Column(name="fechaInicioAgencia", type="date", nullable=false)
     */
    private $fechainicioagencia;

    /**
     * @var date $ultimamodificacion
     *
     * @ORM\Column(name="ultimaModificacion", type="date", nullable=false)
     */
    private $ultimamodificacion;

    /**
     * @var string $rifagencia
     *
     * @ORM\Column(name="rifAgencia", type="string", length=60, nullable=false)
     */
    private $rifagencia;

    /**
     * @var string $nitagencia
     *
     * @ORM\Column(name="nitAgencia", type="string", length=60, nullable=false)
     */
    private $nitagencia;

    /**
     * @var boolean $isragencia
     *
     * @ORM\Column(name="isrAgencia", type="boolean", nullable=false)
     */
    private $isragencia;

    /**
     * @var boolean $freeagencia
     *
     * @ORM\Column(name="freeAgencia", type="boolean", nullable=false)
     */
    private $freeagencia;

    /**
     * @var string $usuariomodificacion
     *
     * @ORM\Column(name="usuarioModificacion", type="string", length=60, nullable=false)
     */
    private $usuariomodificacion;

    /**
     * @var boolean $acagciaAgcia
     *
     * @ORM\Column(name="acagcia_agcia", type="boolean", nullable=false)
     */
    private $acagciaAgcia;

    /**
     * @var boolean $acagteAgcia
     *
     * @ORM\Column(name="acagte_agcia", type="boolean", nullable=false)
     */
    private $acagteAgcia;

    /**
     * @var string $ciafactAgcia
     *
     * @ORM\Column(name="ciafact_agcia", type="string", length=60, nullable=false)
     */
    private $ciafactAgcia;

    /**
     * @var boolean $esagencia
     *
     * @ORM\Column(name="esAgencia", type="boolean", nullable=false)
     */
    private $esagencia;


}