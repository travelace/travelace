<?php

namespace Entity;

//use Doctrine\Mapping as ORM;

/**
 * Tblpromotoresagencia
 *
 * @Table(name="tblpromotoresagencia")
 * @Entity
 */
class Tblpromotoresagencia
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer $codagencia
     *
     * @Column(name="codAgencia", type="integer", nullable=false)
     */
    private $codagencia;

    /**
     * @var integer $codigousuario
     *
     * @Column(name="codigoUsuario", type="integer", nullable=false)
     */
    private $codigousuario;

    /**
     * @var float $comision
     *
     * @Column(name="comision", type="float", nullable=false)
     */
    private $comision;

    /**
     * @var float $comisiongrupo
     *
     * @Column(name="comisionGrupo", type="float", nullable=false)
     */
    private $comisiongrupo;

    /**
     * @var string $principal
     *
     * @Column(name="principal", type="string", length=20, nullable=false)
     */
    private $principal;

    function getId() {
        return $this->id;
    }

    function getCodagencia() {
        return $this->codagencia;
    }

    function getCodigousuario() {
        return $this->codigousuario;
    }

    function getComision() {
        return $this->comision;
    }

    function getComisiongrupo() {
        return $this->comisiongrupo;
    }

    function getPrincipal() {
        return $this->principal;
    }

    function setCodagencia($codagencia) {
        $this->codagencia = $codagencia;
    }

    function setCodigousuario($codigousuario) {
        $this->codigousuario = $codigousuario;
    }

    function setComision($comision) {
        $this->comision = $comision;
    }

    function setComisiongrupo($comisiongrupo) {
        $this->comisiongrupo = $comisiongrupo;
    }

    function setPrincipal($principal) {
        $this->principal = $principal;
    }



}