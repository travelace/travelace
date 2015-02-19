<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tbldestinos
 *
 * @ORM\Table(name="tbldestinos")
 * @ORM\Entity
 */
class Tbldestinos
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
     * @var string $nombredestino
     *
     * @ORM\Column(name="nombreDestino", type="string", length=50, nullable=false)
     */
    private $nombredestino;


}