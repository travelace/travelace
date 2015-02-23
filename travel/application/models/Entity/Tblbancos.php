<?php

namespace Entity;

//use Doctrine\Mapping as ORM;

/**
 * Tblbancos
 *
 * @Table(name="tblbancos")
 * @Entity
 */
class Tblbancos
{
    /**
     * @var integer $codbanco
     *
     * @Column(name="codBanco", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $codbanco;

    /**
     * @var string $nombrebanco
     *
     * @Column(name="nombreBanco", type="string", length=45, nullable=true)
     */
    private $nombrebanco;

    /**
     * @var boolean $activo
     *
     * @Column(name="activo", type="boolean")
     */
    private $activo;


    function getCodbanco() {
        return $this->codbanco;
    }

    function getNombrebanco() {
        return $this->nombrebanco;
    }

    function getActivo() {
        return $this->activo;
    }

    function setNombrebanco($nombrebanco) {
        $this->nombrebanco = $nombrebanco;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }


    
}