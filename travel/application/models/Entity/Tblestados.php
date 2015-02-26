<?php


namespace Entity;
//use Doctrine\Mapping as ORM;

/**
 * Tblestados
 *
 * @Table(name="tblestados")
 * @Entity
 */
class Tblestados
{
    /**
     * @var integer $codestado
     *
     * @Column(name="codEstado", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $codestado;

    /**
     * @var string $nombreestado
     *
     * @Column(name="nombreEstado", type="string", length=45, nullable=true)
     */
    private $nombreestado;

    /**
     * @var integer $codpais
     *
     * @Column(name="codPais", type="integer", nullable=true)
     */
    private $codpais;

    /**
     * @var boolean $zonafranca
     *
     * @Column(name="zonaFranca", type="boolean" )
     */
    private $zonafranca;

    function getCodestado() {
        return $this->codestado;
    }

    function getNombreestado() {
        return $this->nombreestado;
    }

    function getCodpais() {
        return $this->codpais;
    }

    function getZonafranca() {
        return $this->zonafranca;
    }

    function setNombreestado($nombreestado) {
        $this->nombreestado = $nombreestado;
    }

    function setCodpais($codpais) {
        $this->codpais = $codpais;
    }

    function setZonafranca($zonafranca) {
        $this->zonafranca = $zonafranca;
    }



}