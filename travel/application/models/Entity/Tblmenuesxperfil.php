<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblmenuesxperfil
 *
 * @ORM\Table(name="tblmenuesxperfil")
 * @ORM\Entity
 */
class Tblmenuesxperfil
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer $codperfil
     *
     * @ORM\Column(name="codPerfil", type="integer", nullable=false)
     */
    private $codperfil;

    /**
     * @var integer $idmenu
     *
     * @ORM\Column(name="idMenu", type="integer", nullable=false)
     */
    private $idmenu;

    function getId() {
        return $this->id;
    }

    function getCodperfil() {
        return $this->codperfil;
    }

    function getIdmenu() {
        return $this->idmenu;
    }

    function setCodperfil($codperfil) {
        $this->codperfil = $codperfil;
    }

    function setIdmenu($idmenu) {
        $this->idmenu = $idmenu;
    }



}