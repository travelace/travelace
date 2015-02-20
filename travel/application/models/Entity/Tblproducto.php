<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblproducto
 *
 * @ORM\Table(name="tblproducto")
 * @ORM\Entity
 */
class Tblproducto
{
    /**
     * @var integer $codproducto
     *
     * @ORM\Column(name="codProducto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codproducto;

    /**
     * @var string $abreviaturaproducto
     *
     * @ORM\Column(name="abreviaturaProducto", type="string", length=10, nullable=true)
     */
    private $abreviaturaproducto;

    /**
     * @var string $nombreproducto
     *
     * @ORM\Column(name="nombreProducto", type="string", length=50, nullable=true)
     */
    private $nombreproducto;

    /**
     * @var boolean $serviciosadicionalesproducto
     *
     * @ORM\Column(name="serviciosAdicionalesProducto", type="boolean", nullable=true)
     */
    private $serviciosadicionalesproducto;

    /**
     * @var decimal $diaadicionalproducto
     *
     * @ORM\Column(name="diaAdicionalProducto", type="decimal", nullable=false)
     */
    private $diaadicionalproducto;

    /**
     * @var integer $limitediasproductos
     *
     * @ORM\Column(name="limiteDiasProductos", type="integer", nullable=false)
     */
    private $limitediasproductos;

    /**
     * @var decimal $descuentofamiliarproducto
     *
     * @ORM\Column(name="descuentoFamiliarProducto", type="decimal", nullable=false)
     */
    private $descuentofamiliarproducto;

    /**
     * @var integer $minimaedadproducto
     *
     * @ORM\Column(name="minimaEdadProducto", type="integer", nullable=false)
     */
    private $minimaedadproducto;

    /**
     * @var integer $maximaedadproducto
     *
     * @ORM\Column(name="maximaEdadProducto", type="integer", nullable=false)
     */
    private $maximaedadproducto;

    /**
     * @var decimal $recargoedadproducto
     *
     * @ORM\Column(name="recargoEdadProducto", type="decimal", nullable=false)
     */
    private $recargoedadproducto;

    /**
     * @var integer $limitepaxgrpfproducto
     *
     * @ORM\Column(name="limitePaxGrpFProducto", type="integer", nullable=false)
     */
    private $limitepaxgrpfproducto;

    /**
     * @var integer $packfamiliarproducto
     *
     * @ORM\Column(name="packFamiliarProducto", type="integer", nullable=false)
     */
    private $packfamiliarproducto;

    /**
     * @var integer $largasestadiaslimiedad
     *
     * @ORM\Column(name="largasEstadiasLimiEdad", type="integer", nullable=false)
     */
    private $largasestadiaslimiedad;

    /**
     * @var decimal $tarifaestalarga
     *
     * @ORM\Column(name="tarifaEstaLarga", type="decimal", nullable=false)
     */
    private $tarifaestalarga;

    /**
     * @var integer $largaestadiaproducto
     *
     * @ORM\Column(name="largaEstadiaProducto", type="integer", nullable=false)
     */
    private $largaestadiaproducto;

    /**
     * @var boolean $activo
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo;

    /**
     * @var boolean $modulos
     *
     * @ORM\Column(name="modulos", type="boolean", nullable=false)
     */
    private $modulos;

    /**
     * @var boolean $anuales
     *
     * @ORM\Column(name="anuales", type="boolean", nullable=false)
     */
    private $anuales;

    /**
     * @var boolean $dosporuno
     *
     * @ORM\Column(name="dosPorUno", type="boolean", nullable=false)
     */
    private $dosporuno;

    /**
     * @var date $desdepromo
     *
     * @ORM\Column(name="desdePromo", type="date", nullable=false)
     */
    private $desdepromo;

    /**
     * @var date $hastapromo
     *
     * @ORM\Column(name="hastaPromo", type="date", nullable=false)
     */
    private $hastapromo;

    /**
     * @var decimal $descuento
     *
     * @ORM\Column(name="descuento", type="decimal", nullable=false)
     */
    private $descuento;

    function getCodproducto() {
        return $this->codproducto;
    }

    function getAbreviaturaproducto() {
        return $this->abreviaturaproducto;
    }

    function getNombreproducto() {
        return $this->nombreproducto;
    }

    function getServiciosadicionalesproducto() {
        return $this->serviciosadicionalesproducto;
    }

    function getDiaadicionalproducto() {
        return $this->diaadicionalproducto;
    }

    function getLimitediasproductos() {
        return $this->limitediasproductos;
    }

    function getDescuentofamiliarproducto() {
        return $this->descuentofamiliarproducto;
    }

    function getMinimaedadproducto() {
        return $this->minimaedadproducto;
    }

    function getMaximaedadproducto() {
        return $this->maximaedadproducto;
    }

    function getRecargoedadproducto() {
        return $this->recargoedadproducto;
    }

    function getLimitepaxgrpfproducto() {
        return $this->limitepaxgrpfproducto;
    }

    function getPackfamiliarproducto() {
        return $this->packfamiliarproducto;
    }

    function getLargasestadiaslimiedad() {
        return $this->largasestadiaslimiedad;
    }

    function getTarifaestalarga() {
        return $this->tarifaestalarga;
    }

    function getLargaestadiaproducto() {
        return $this->largaestadiaproducto;
    }

    function getActivo() {
        return $this->activo;
    }

    function getModulos() {
        return $this->modulos;
    }

    function getAnuales() {
        return $this->anuales;
    }

    function getDosporuno() {
        return $this->dosporuno;
    }

    function getDesdepromo() {
        return $this->desdepromo;
    }

    function getHastapromo() {
        return $this->hastapromo;
    }

    function getDescuento() {
        return $this->descuento;
    }

    function setAbreviaturaproducto($abreviaturaproducto) {
        $this->abreviaturaproducto = $abreviaturaproducto;
    }

    function setNombreproducto($nombreproducto) {
        $this->nombreproducto = $nombreproducto;
    }

    function setServiciosadicionalesproducto($serviciosadicionalesproducto) {
        $this->serviciosadicionalesproducto = $serviciosadicionalesproducto;
    }

    function setDiaadicionalproducto(decimal $diaadicionalproducto) {
        $this->diaadicionalproducto = $diaadicionalproducto;
    }

    function setLimitediasproductos($limitediasproductos) {
        $this->limitediasproductos = $limitediasproductos;
    }

    function setDescuentofamiliarproducto(decimal $descuentofamiliarproducto) {
        $this->descuentofamiliarproducto = $descuentofamiliarproducto;
    }

    function setMinimaedadproducto($minimaedadproducto) {
        $this->minimaedadproducto = $minimaedadproducto;
    }

    function setMaximaedadproducto($maximaedadproducto) {
        $this->maximaedadproducto = $maximaedadproducto;
    }

    function setRecargoedadproducto(decimal $recargoedadproducto) {
        $this->recargoedadproducto = $recargoedadproducto;
    }

    function setLimitepaxgrpfproducto($limitepaxgrpfproducto) {
        $this->limitepaxgrpfproducto = $limitepaxgrpfproducto;
    }

    function setPackfamiliarproducto($packfamiliarproducto) {
        $this->packfamiliarproducto = $packfamiliarproducto;
    }

    function setLargasestadiaslimiedad($largasestadiaslimiedad) {
        $this->largasestadiaslimiedad = $largasestadiaslimiedad;
    }

    function setTarifaestalarga(decimal $tarifaestalarga) {
        $this->tarifaestalarga = $tarifaestalarga;
    }

    function setLargaestadiaproducto($largaestadiaproducto) {
        $this->largaestadiaproducto = $largaestadiaproducto;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }

    function setModulos($modulos) {
        $this->modulos = $modulos;
    }

    function setAnuales($anuales) {
        $this->anuales = $anuales;
    }

    function setDosporuno($dosporuno) {
        $this->dosporuno = $dosporuno;
    }

    function setDesdepromo(date $desdepromo) {
        $this->desdepromo = $desdepromo;
    }

    function setHastapromo(date $hastapromo) {
        $this->hastapromo = $hastapromo;
    }

    function setDescuento(decimal $descuento) {
        $this->descuento = $descuento;
    }



}