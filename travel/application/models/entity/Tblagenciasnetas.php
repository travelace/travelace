<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblagenciasnetas
 *
 * @ORM\Table(name="tblagenciasnetas")
 * @ORM\Entity
 */
class Tblagenciasnetas
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
     * @ORM\Column(name="nombreAgencia", type="string", length=50, nullable=false)
     */
    private $nombreagencia;

    /**
     * @var boolean $activa
     *
     * @ORM\Column(name="activa", type="boolean", nullable=false)
     */
    private $activa;


    function getCodagencia() {
        return $this->codagencia;
    }

    function getNombreagencia() {
        return $this->nombreagencia;
    }

    function getActiva() {
        return $this->activa;
    }

    function setNombreagencia($nombreagencia) {
        $this->nombreagencia = $nombreagencia;
    }

    function setActiva($activa) {
        $this->activa = $activa;
    }


    
}