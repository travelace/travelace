<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblmenues
 *
 * @ORM\Table(name="tblmenues")
 * @ORM\Entity
 */
class Tblmenues
{
    /**
     * @var integer $idmenu
     *
     * @ORM\Column(name="idMenu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmenu;

    /**
     * @var string $nombremenu
     *
     * @ORM\Column(name="nombreMenu", type="string", length=50, nullable=false)
     */
    private $nombremenu;

    /**
     * @var string $descripcionmenu
     *
     * @ORM\Column(name="descripcionMenu", type="string", length=250, nullable=false)
     */
    private $descripcionmenu;

    /**
     * @var integer $nivelmenu
     *
     * @ORM\Column(name="nivelMenu", type="integer", nullable=false)
     */
    private $nivelmenu;

    /**
     * @var integer $idpadremenu
     *
     * @ORM\Column(name="idPadreMenu", type="integer", nullable=false)
     */
    private $idpadremenu;

    /**
     * @var string $urlmenu
     *
     * @ORM\Column(name="urlMenu", type="string", length=250, nullable=false)
     */
    private $urlmenu;

    /**
     * @var integer $ordmenu
     *
     * @ORM\Column(name="ordMenu", type="integer", nullable=false)
     */
    private $ordmenu;


}