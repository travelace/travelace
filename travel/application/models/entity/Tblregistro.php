<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblregistro
 *
 * @ORM\Table(name="tblregistro")
 * @ORM\Entity
 */
class Tblregistro
{
    /**
     * @var integer $idregistro
     *
     * @ORM\Column(name="idRegistro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idregistro;

    /**
     * @var string $nombreagente
     *
     * @ORM\Column(name="nombreAgente", type="string", length=100, nullable=false)
     */
    private $nombreagente;

    /**
     * @var string $nombreagtvigas
     *
     * @ORM\Column(name="nombreAgtVigas", type="string", length=80, nullable=false)
     */
    private $nombreagtvigas;

    /**
     * @var integer $codagente
     *
     * @ORM\Column(name="codAgente", type="integer", nullable=false)
     */
    private $codagente;

    /**
     * @var string $nombreagencia
     *
     * @ORM\Column(name="nombreAgencia", type="string", length=100, nullable=false)
     */
    private $nombreagencia;

    /**
     * @var integer $codagencia
     *
     * @ORM\Column(name="codAgencia", type="integer", nullable=false)
     */
    private $codagencia;

    /**
     * @var string $banco
     *
     * @ORM\Column(name="banco", type="string", length=50, nullable=false)
     */
    private $banco;

    /**
     * @var string $numerocuenta
     *
     * @ORM\Column(name="numeroCuenta", type="string", length=22, nullable=false)
     */
    private $numerocuenta;

    /**
     * @var string $tipocuenta
     *
     * @ORM\Column(name="tipoCuenta", type="string", length=15, nullable=false)
     */
    private $tipocuenta;

    /**
     * @var string $correo
     *
     * @ORM\Column(name="correo", type="string", length=60, nullable=false)
     */
    private $correo;

    /**
     * @var string $cedula
     *
     * @ORM\Column(name="cedula", type="string", length=16, nullable=false)
     */
    private $cedula;

    /**
     * @var string $tipodocumento
     *
     * @ORM\Column(name="tipoDocumento", type="string", length=15, nullable=false)
     */
    private $tipodocumento;

    /**
     * @var string $rif
     *
     * @ORM\Column(name="rif", type="string", length=15, nullable=true)
     */
    private $rif;

    /**
     * @var date $fechainsc
     *
     * @ORM\Column(name="fechaInsc", type="date", nullable=true)
     */
    private $fechainsc;

    /**
     * @var date $fechacumple
     *
     * @ORM\Column(name="fechaCumple", type="date", nullable=true)
     */
    private $fechacumple;


}