<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblproductosxagencia
 *
 * @ORM\Table(name="tblproductosxagencia")
 * @ORM\Entity
 */
class Tblproductosxagencia
{
    /**
     * @var integer $idproductoxagencia
     *
     * @ORM\Column(name="idProductoxagencia", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproductoxagencia;

    /**
     * @var integer $codagencia
     *
     * @ORM\Column(name="codAgencia", type="integer", nullable=true)
     */
    private $codagencia;

    /**
     * @var integer $codproducto
     *
     * @ORM\Column(name="codProducto", type="integer", nullable=true)
     */
    private $codproducto;

    /**
     * @var decimal $comisionagencia
     *
     * @ORM\Column(name="comisionAgencia", type="decimal", nullable=true)
     */
    private $comisionagencia;

    /**
     * @var decimal $comisionagente
     *
     * @ORM\Column(name="comisionAgente", type="decimal", nullable=true)
     */
    private $comisionagente;

    function getIdproductoxagencia() {
        return $this->idproductoxagencia;
    }

    function getCodagencia() {
        return $this->codagencia;
    }

    function getCodproducto() {
        return $this->codproducto;
    }

    function getComisionagencia() {
        return $this->comisionagencia;
    }

    function getComisionagente() {
        return $this->comisionagente;
    }

    function setCodagencia($codagencia) {
        $this->codagencia = $codagencia;
    }

    function setCodproducto($codproducto) {
        $this->codproducto = $codproducto;
    }

    function setComisionagencia(decimal $comisionagencia) {
        $this->comisionagencia = $comisionagencia;
    }

    function setComisionagente(decimal $comisionagente) {
        $this->comisionagente = $comisionagente;
    }



}