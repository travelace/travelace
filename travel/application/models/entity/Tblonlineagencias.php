<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblonlineagencias
 *
 * @ORM\Table(name="tblonlineagencias")
 * @ORM\Entity
 */
class Tblonlineagencias
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
     * @var string $login
     *
     * @ORM\Column(name="login", type="string", length=20, nullable=false)
     */
    private $login;

    /**
     * @var string $agencia
     *
     * @ORM\Column(name="agencia", type="string", length=50, nullable=false)
     */
    private $agencia;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string $razonsocial
     *
     * @ORM\Column(name="razonSocial", type="string", length=120, nullable=false)
     */
    private $razonsocial;

    /**
     * @var string $rif
     *
     * @ORM\Column(name="rif", type="string", length=50, nullable=false)
     */
    private $rif;


}