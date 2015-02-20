<?php


namespace Entity;
//use Doctrine\0RM\Mapping as ORM;

/**
 * Entity\Tblgrupoagencias
 *
 * @Table(name="tblgrupoagencias")
 * @Entity
 */
class Tblgrupoagencias
{
    /**
     * @var integer $codgrupo
     *
     * @Column(name="codGrupo", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $codgrupo;

    /**
     * @var string $nombregrupo
     *
     * @Column(name="nombreGrupo", type="string", length=45, nullable=true)
     */
    private $nombregrupo;

    /**
     * @var boolean $activogrupo
     *
     * @Column(name="activoGrupo", type="boolean", nullable=true)
     */
    private $activogrupo;

    /**
     * @var string $abrev
     *
     * @Column(name="abrev", type="string", length=10, nullable=true)
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

    public function __toString() {
        return $this->getNombregrupo();
    }

}