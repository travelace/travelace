<?php


namespace Entity;
//use Doctrine\Mapping as ORM;

/**
 * Tblpais
 *
 * @Table(name="tblpais")
 * @Entity
 */
class Tblpais
{
    /**
     * @var integer $codpais
     *
     * @Column(name="codPais", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $codpais;

    /**
     * @var string $nombrepais
     *
     * @Column(name="nombrePais", type="string", length=60, nullable=true)
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