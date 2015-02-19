<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblagenciayagenteonline
 *
 * @ORM\Table(name="tblagenciayagenteonline")
 * @ORM\Entity
 */
class Tblagenciayagenteonline
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
     * @var string $codagenciaagente
     *
     * @ORM\Column(name="codAgenciaAgente", type="string", length=100, nullable=false)
     */
    private $codagenciaagente;

    /**
     * @var string $login
     *
     * @ORM\Column(name="login", type="string", length=100, nullable=false)
     */
    private $login;

    /**
     * @var integer $tipo
     *
     * @ORM\Column(name="tipo", type="integer", nullable=false)
     */
    private $tipo;


}