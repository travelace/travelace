<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblgrupoagencias
 *
 * @ORM\Table(name="tblgrupoagencias")
 * @ORM\Entity
 */
class Tblgrupoagencias
{
    /**
     * @var integer $codgrupo
     *
     * @ORM\Column(name="codGrupo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codgrupo;

    /**
     * @var string $nombregrupo
     *
     * @ORM\Column(name="nombreGrupo", type="string", length=45, nullable=true)
     */
    private $nombregrupo;

    /**
     * @var boolean $activogrupo
     *
     * @ORM\Column(name="activoGrupo", type="boolean", nullable=true)
     */
    private $activogrupo;

    /**
     * @var string $abrev
     *
     * @ORM\Column(name="abrev", type="string", length=10, nullable=true)
     */
    private $abrev;

    function getCodgrupo() {
        return $this->codgrupo;
    }

    function getNombregrupo() {
        return $this->nombregrupo;
    }

    function getActivogrupo() {
        return $this->activogrupo;
    }

    function getAbrev() {
        return $this->abrev;
    }

    function setNombregrupo($nombregrupo) {
        $this->nombregrupo = $nombregrupo;
    }

    function setActivogrupo($activogrupo) {
        $this->activogrupo = $activogrupo;
    }

    function setAbrev($abrev) {
        $this->abrev = $abrev;
    }



}