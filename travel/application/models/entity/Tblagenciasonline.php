<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblagenciasonline
 *
 * @ORM\Table(name="tblagenciasonline")
 * @ORM\Entity
 */
class Tblagenciasonline
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
     * @var string $agenciaonline
     *
     * @ORM\Column(name="agenciaonline", type="string", length=500, nullable=false)
     */
    private $agenciaonline;

    /**
     * @var string $agenteonline
     *
     * @ORM\Column(name="agenteonline", type="string", length=500, nullable=true)
     */
    private $agenteonline;

    /**
     * @var integer $idagenciavigas
     *
     * @ORM\Column(name="idagenciavigas", type="integer", nullable=false)
     */
    private $idagenciavigas;

    function getId() {
        return $this->id;
    }

    function getAgenciaonline() {
        return $this->agenciaonline;
    }

    function getAgenteonline() {
        return $this->agenteonline;
    }

    function getIdagenciavigas() {
        return $this->idagenciavigas;
    }


    function setAgenciaonline($agenciaonline) {
        $this->agenciaonline = $agenciaonline;
    }

    function setAgenteonline($agenteonline) {
        $this->agenteonline = $agenteonline;
    }

    function setIdagenciavigas($idagenciavigas) {
        $this->idagenciavigas = $idagenciavigas;
    }


}