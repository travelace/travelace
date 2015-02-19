<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblpais
 *
 * @ORM\Table(name="tblpais")
 * @ORM\Entity
 */
class Tblpais
{
    /**
     * @var integer $codpais
     *
     * @ORM\Column(name="codPais", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codpais;

    /**
     * @var string $nombrepais
     *
     * @ORM\Column(name="nombrePais", type="string", length=60, nullable=true)
     */
    private $nombrepais;

    function getCodpais() {
        return $this->codpais;
    }

    function getNombrepais() {
        return $this->nombrepais;
    }

    function setNombrepais($nombrepais) {
        $this->nombrepais = $nombrepais;
    }



}