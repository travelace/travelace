<?php


namespace Entity;
//use Doctrine\Mapping as ORM;

/**
 * Tblciudades
 *
 * @Table(name="tblciudades")
 * @Entity
 */
class Tblciudades
{
    /**
     * @var integer $codciudad
     *
     * @Column(name="codCiudad", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $codciudad;

    /**
     * @var string $nombreciudad
     *
     * @Column(name="nombreCiudad", type="string", length=45, nullable=true)
     */
    private $nombreciudad;

    /**
     * @var integer $codestado
     *
     * @Column(name="codEstado", type="integer", nullable=true)
     */
    private $codestado;

    function getCodciudad() {
        return $this->codciudad;
    }

    function getNombreciudad() {
        return $this->nombreciudad;
    }

    function getCodestado() {
        return $this->codestado;
    }

    function setNombreciudad($nombreciudad) {
        $this->nombreciudad = $nombreciudad;
    }

    function setCodestado($codestado) {
        $this->codestado = $codestado;
    }


}