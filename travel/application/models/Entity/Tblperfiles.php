<?php


namespace Entity;
//use Doctrine\Mapping as ORM;

/**
 * Tblperfiles
 *
 * @Table(name="tblperfiles")
 * @Entity
 */
class Tblperfiles
{
    /**
     * @var integer $codperfil
     *
     * @Column(name="codPerfil", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $codperfil;

    /**
     * @var string $nombreperfil
     *
     * @Column(name="nombrePerfil", type="string", length=250, nullable=false)
     */
    private $nombreperfil;

    /**
     * @var string $descripcionperfil
     *
     * @Column(name="descripcionPerfil", type="string", length=250, nullable=false)
     */
     private $descripcionperfil;
    
     
     /**
     * @var string $activo
     *
     * @Column(name="activo", type="boolean")
     */
    private $activo;
    
    function getCodperfil() {
        return $this->codperfil;
    }

    function getNombreperfil() {
        return $this->nombreperfil;
    }

    function getDescripcionperfil() {
        return $this->descripcionperfil;
    }

    function getActivo() {
        return $this->activo;
    }

        function setNombreperfil($nombreperfil) {
        $this->nombreperfil = $nombreperfil;
    }

    function setDescripcionperfil($descripcionperfil) {
        $this->descripcionperfil = $descripcionperfil;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }



}