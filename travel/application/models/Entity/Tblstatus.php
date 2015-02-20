<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblstatus
 *
 * @ORM\Table(name="tblstatus")
 * @ORM\Entity
 */
class Tblstatus
{
    /**
     * @var integer $codstatus
     *
     * @ORM\Column(name="codStatus", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codstatus;

    /**
     * @var string $nombrestatus
     *
     * @ORM\Column(name="nombreStatus", type="string", length=30, nullable=true)
     */
    private $nombrestatus;

    function getCodstatus() {
        return $this->codstatus;
    }

    function getNombrestatus() {
        return $this->nombrestatus;
    }

    function setNombrestatus($nombrestatus) {
        $this->nombrestatus = $nombrestatus;
    }



}