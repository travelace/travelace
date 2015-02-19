<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tblvouchervigas
 *
 * @ORM\Table(name="tblvouchervigas")
 * @ORM\Entity
 */
class Tblvouchervigas
{
    /**
     * @var integer $idVoucher
     *
     * @ORM\Column(name="id_voucher", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVoucher;

    /**
     * @var text $codagVoucher
     *
     * @ORM\Column(name="codag_voucher", type="text", nullable=true)
     */
    private $codagVoucher;

    /**
     * @var text $agciaVoucher
     *
     * @ORM\Column(name="agcia_voucher", type="text", nullable=true)
     */
    private $agciaVoucher;

    /**
     * @var text $nroVoucher
     *
     * @ORM\Column(name="nro_voucher", type="text", nullable=true)
     */
    private $nroVoucher;

    /**
     * @var boolean $grupoVoucher
     *
     * @ORM\Column(name="grupo_voucher", type="boolean", nullable=true)
     */
    private $grupoVoucher;

    /**
     * @var integer $nperVoucher
     *
     * @ORM\Column(name="nper_voucher", type="integer", nullable=true)
     */
    private $nperVoucher;

    /**
     * @var date $fecemVoucher
     *
     * @ORM\Column(name="fecem_voucher", type="date", nullable=true)
     */
    private $fecemVoucher;

    /**
     * @var date $desdeVoucher
     *
     * @ORM\Column(name="desde_voucher", type="date", nullable=true)
     */
    private $desdeVoucher;

    /**
     * @var date $hastaVoucher
     *
     * @ORM\Column(name="hasta_voucher", type="date", nullable=true)
     */
    private $hastaVoucher;

    /**
     * @var text $areaVoucher
     *
     * @ORM\Column(name="area_voucher", type="text", nullable=true)
     */
    private $areaVoucher;

    /**
     * @var text $diasVoucher
     *
     * @ORM\Column(name="dias_voucher", type="text", nullable=true)
     */
    private $diasVoucher;

    /**
     * @var text $planVoucher
     *
     * @ORM\Column(name="plan_voucher", type="text", nullable=true)
     */
    private $planVoucher;

    /**
     * @var decimal $tarifaVoucher
     *
     * @ORM\Column(name="tarifa_voucher", type="decimal", nullable=true)
     */
    private $tarifaVoucher;

    /**
     * @var boolean $familiVoucher
     *
     * @ORM\Column(name="famili_voucher", type="boolean", nullable=true)
     */
    private $familiVoucher;

    /**
     * @var text $agteVoucher
     *
     * @ORM\Column(name="agte_voucher", type="text", nullable=true)
     */
    private $agteVoucher;

    /**
     * @var decimal $comagciaVoucher
     *
     * @ORM\Column(name="comagcia_voucher", type="decimal", nullable=true)
     */
    private $comagciaVoucher;

    /**
     * @var decimal $comagteVoucher
     *
     * @ORM\Column(name="comagte_voucher", type="decimal", nullable=true)
     */
    private $comagteVoucher;

    /**
     * @var text $statusVoucher
     *
     * @ORM\Column(name="status_voucher", type="text", nullable=true)
     */
    private $statusVoucher;

    /**
     * @var text $comenVoucher
     *
     * @ORM\Column(name="comen_voucher", type="text", nullable=true)
     */
    private $comenVoucher;

    /**
     * @var boolean $relpreVoucher
     *
     * @ORM\Column(name="relpre_voucher", type="boolean", nullable=true)
     */
    private $relpreVoucher;

    /**
     * @var date $fecrelVoucher
     *
     * @ORM\Column(name="fecrel_voucher", type="date", nullable=true)
     */
    private $fecrelVoucher;

    /**
     * @var boolean $relacVoucher
     *
     * @ORM\Column(name="relac_voucher", type="boolean", nullable=true)
     */
    private $relacVoucher;

    /**
     * @var boolean $estrelVoucher
     *
     * @ORM\Column(name="estrel_voucher", type="boolean", nullable=true)
     */
    private $estrelVoucher;

    /**
     * @var text $nrelVoucher
     *
     * @ORM\Column(name="nrel_voucher", type="text", nullable=true)
     */
    private $nrelVoucher;

    /**
     * @var date $frelVoucher
     *
     * @ORM\Column(name="frel_voucher", type="date", nullable=true)
     */
    private $frelVoucher;

    /**
     * @var boolean $esfactVoucher
     *
     * @ORM\Column(name="esfact_voucher", type="boolean", nullable=true)
     */
    private $esfactVoucher;

    /**
     * @var text $nfactVoucher
     *
     * @ORM\Column(name="nfact_voucher", type="text", nullable=true)
     */
    private $nfactVoucher;

    /**
     * @var date $ffactVoucher
     *
     * @ORM\Column(name="ffact_voucher", type="date", nullable=true)
     */
    private $ffactVoucher;

    /**
     * @var date $fproVoucher
     *
     * @ORM\Column(name="fpro_voucher", type="date", nullable=true)
     */
    private $fproVoucher;

    /**
     * @var text $userVoucher
     *
     * @ORM\Column(name="user_voucher", type="text", nullable=true)
     */
    private $userVoucher;

    /**
     * @var boolean $negVoucher
     *
     * @ORM\Column(name="neg_voucher", type="boolean", nullable=true)
     */
    private $negVoucher;

    /**
     * @var text $nvouscVoucher
     *
     * @ORM\Column(name="nvousc_voucher", type="text", nullable=true)
     */
    private $nvouscVoucher;

    /**
     * @var text $titgruVoucher
     *
     * @ORM\Column(name="titgru_voucher", type="text", nullable=true)
     */
    private $titgruVoucher;

    /**
     * @var text $selporVoucher
     *
     * @ORM\Column(name="selpor_voucher", type="text", nullable=true)
     */
    private $selporVoucher;

    /**
     * @var boolean $selrelacVoucher
     *
     * @ORM\Column(name="selrelac_voucher", type="boolean", nullable=true)
     */
    private $selrelacVoucher;

    /**
     * @var boolean $desc50Voucher
     *
     * @ORM\Column(name="desc50_voucher", type="boolean", nullable=true)
     */
    private $desc50Voucher;

    /**
     * @var float $tarifadolVoucher
     *
     * @ORM\Column(name="tarifadol_voucher", type="float", nullable=true)
     */
    private $tarifadolVoucher;

    /**
     * @var boolean $solodolVoucher
     *
     * @ORM\Column(name="solodol_voucher", type="boolean", nullable=true)
     */
    private $solodolVoucher;

    /**
     * @var decimal $promocVoucher
     *
     * @ORM\Column(name="promoc_voucher", type="decimal", nullable=true)
     */
    private $promocVoucher;

    /**
     * @var boolean $tvtaVoucher
     *
     * @ORM\Column(name="tvta_voucher", type="boolean", nullable=true)
     */
    private $tvtaVoucher;

    /**
     * @var text $ciaVoucher
     *
     * @ORM\Column(name="cia_voucher", type="text", nullable=true)
     */
    private $ciaVoucher;

    /**
     * @var boolean $cadivi
     *
     * @ORM\Column(name="cadivi", type="boolean", nullable=true)
     */
    private $cadivi;

    /**
     * @var decimal $tarifanorVoucher
     *
     * @ORM\Column(name="tarifanor_voucher", type="decimal", nullable=true)
     */
    private $tarifanorVoucher;

    /**
     * @var boolean $pcadiagciaVoucher
     *
     * @ORM\Column(name="pcadiagcia_voucher", type="boolean", nullable=true)
     */
    private $pcadiagciaVoucher;

    /**
     * @var date $fpcadiagciaVoucher
     *
     * @ORM\Column(name="fpcadiagcia_voucher", type="date", nullable=true)
     */
    private $fpcadiagciaVoucher;

    /**
     * @var boolean $pcadiagteVoucher
     *
     * @ORM\Column(name="pcadiagte_voucher", type="boolean", nullable=true)
     */
    private $pcadiagteVoucher;

    /**
     * @var date $fpcadiagteVoucher
     *
     * @ORM\Column(name="fpcadiagte_voucher", type="date", nullable=true)
     */
    private $fpcadiagteVoucher;


}