<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblperfiles
 *
 * @ORM\Table(name="tblperfiles")
 * @ORM\Entity
 */
class Tblperfiles
{
    /**
     * @var integer $codperfil
     *
     * @ORM\Column(name="codPerfil", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codperfil;

    /**
     * @var string $nombreperfil
     *
     * @ORM\Column(name="nombrePerfil", type="string", length=250, nullable=false)
     */
    private $nombreperfil;

    /**
     * @var string $descripcionperfil
     *
     * @ORM\Column(name="descripcionPerfil", type="string", length=250, nullable=false)
     */
    private $descripcionperfil;
    
    function getCodperfil() {
        return $this->codperfil;
    }

    function getNombreperfil() {
        return $this->nombreperfil;
    }

    function getDescripcionperfil() {
        return $this->descripcionperfil;
    }

    function setNombreperfil($nombreperfil) {
        $this->nombreperfil = $nombreperfil;
    }

    function setDescripcionperfil($descripcionperfil) {
        $this->descripcionperfil = $descripcionperfil;
    }



}