<?php


namespace Entity;
//use Doctrine\Mapping as ORM;

/**
 * Tblproducto
 *
 * @Table(name="tblproducto")
 * @Entity
 */
class Tblproducto
{
    /**
     * @var integer $codproducto
     *
     * @Column(name="codProducto", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $codproducto;

    /**
     * @var string $abreviaturaproducto
     *
     * @Column(name="abreviaturaProducto", type="string", length=10, nullable=true)
     */
    private $abreviaturaproducto;

    /**
     * @var string $nombreproducto
     *
     * @Column(name="nombreProducto", type="string", length=50, nullable=true)
     */
    private $nombreproducto;

    /**
     * @var boolean $serviciosadicionalesproducto
     *
     * @Column(name="serviciosAdicionalesProducto", type="boolean", nullable=true)
     */
    private $serviciosadicionalesproducto;

    /**
     * @var decimal $diaadicionalproducto
     *
     * @Column(name="diaAdicionalProducto", type="decimal")
     */
    private $diaadicionalproducto;

    /**
     * @var integer $limitediasproductos
     *
     * @Column(name="limiteDiasProductos", type="integer")
     */
    private $limitediasproductos;

    /**
     * @var decimal $descuentofamiliarproducto
     *
     * @Column(name="descuentoFamiliarProducto", type="decimal")
     */
    private $descuentofamiliarproducto;

    /**
     * @var integer $minimaedadproducto
     *
     * @Column(name="minimaEdadProducto", type="integer")
     */
    private $minimaedadproducto;

    /**
     * @var integer $maximaedadproducto
     *
     * @Column(name="maximaEdadProducto", type="integer")
     */
    private $maximaedadproducto;

    /**
     * @var decimal $recargoedadproducto
     *
     * @Column(name="recargoEdadProducto", type="decimal")
     */
    private $recargoedadproducto;

    /**
     * @var integer $limitepaxgrpfproducto
     *
     * @Column(name="limitePaxGrpFProducto", type="integer")
     */
    private $limitepaxgrpfproducto;

    /**
     * @var integer $packfamiliarproducto
     *
     * @Column(name="packFamiliarProducto", type="integer")
     */
    private $packfamiliarproducto;

    /**
     * @var integer $largasestadiaslimiedad
     *
     * @Column(name="largasEstadiasLimiEdad", type="integer")
     */
    private $largasestadiaslimiedad;

    /**
     * @var decimal $tarifaestalarga
     *
     * @Column(name="tarifaEstaLarga", type="decimal")
     */
    private $tarifaestalarga;

    /**
     * @var integer $largaestadiaproducto
     *
     * @Column(name="largaEstadiaProducto", type="integer")
     */
    private $largaestadiaproducto;

    /**
     * @var boolean $activo
     *
     * @Column(name="activo", type="boolean")
     */
    private $activo;

    /**
     * @var boolean $modulos
     *
     * @Column(name="modulos", type="boolean", nullable=false)
     */
    private $modulos;

    /**
     * @var boolean $anuales
     *
     * @Column(name="anuales", type="boolean")
     */
    private $anuales;

    /**
     * @var boolean $dosporuno
     *
     * @Column(name="dosPorUno", type="boolean")
     */
    private $dosporuno;

    /**
     * @var date $desdepromo
     *
     * @Column(name="desdePromo", type="date")
     */
    private $desdepromo;

    /**
     * @var date $hastapromo
     *
     * @Column(name="hastaPromo", type="date")
     */
    private $hastapromo;

    /**
     * @var decimal $descuento
     *
     * @Column(name="descuento", type="decimal")
     */
    private $descuento;

    /**
     * @var decimal $maxpersona
     *
     * @Column(name="maxPersona", type="decimal")
     */
    private $maxpersona;
    /**
     * @var decimal $mayoresa
     *
     * @Column(name="mayoresA", type="decimal")
     */
    private $mayoresa;
    /**
     * @var boolean $corporativo
     *
     * @Column(name="corporativo", type="boolean", nullable=false)
     */
    private $corporativo;
  
    /**
     * @var decimal $modulolargaestadia
     *
     * @Column(name="moduloLargaEstadia", type="decimal")
     */
     private $modulolargaestadia;
     function getModulolargaestadia() {
         return $this->modulolargaestadia;
     }

         function getCorporativo() {
        return $this->corporativo;
    }
    
    function getMayoresa() {
        return $this->mayoresa;
    }

        function getMaxpersona() {
        return $this->maxpersona;
    }

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
    function setModulolargaestadia(decimal $modulolargaestadia) {
        $this->modulolargaestadia = $modulolargaestadia;
    }

        function setCorporativo($corporativo) {
        $this->corporativo = $corporativo;
    }

        function setMayoresa(decimal $mayoresa) {
        $this->mayoresa = $mayoresa;
    }

        function setMaxpersona(decimal $maxpersona) {
        $this->maxpersona = $maxpersona;
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