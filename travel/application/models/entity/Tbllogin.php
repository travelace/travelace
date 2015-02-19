<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tbllogin
 *
 * @ORM\Table(name="tbllogin")
 * @ORM\Entity
 */
class Tbllogin
{
    /**
     * @var integer $codusuario
     *
     * @ORM\Column(name="codUsuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codusuario;

    /**
     * @var string $user
     *
     * @ORM\Column(name="user", type="string", length=20, nullable=false)
     */
    private $user;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=20, nullable=false)
     */
    private $password;

    /**
     * @var string $nombreusuario
     *
     * @ORM\Column(name="nombreUsuario", type="string", length=60, nullable=false)
     */
    private $nombreusuario;

    /**
     * @var integer $codperfil
     *
     * @ORM\Column(name="codPerfil", type="integer", nullable=false)
     */
    private $codperfil;


}