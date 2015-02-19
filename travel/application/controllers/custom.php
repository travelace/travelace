<?php

/*
  -------------------------------------------
  Archivo creado por Charli Vivenes
  Mail: cvivenes@wimac.biz
  -------------------------------------------
  Framework Extjs 4.2.2
  -------------------------------------------
  Framework Codeigniter 2
  -------------------------------------------
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Custom extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
        $this->load->library('session');
    }

    public function view() {
        
    }

    public function tasas() {

        $estimacion = $this->input->get("id");
       if ($estimacion== null){$estimacion=$this->session->userdata('estimacion');}
         $queryDivVolumietric = $this->em->createQuery('SELECT e.divVolumetric FROM Entity\Estimacion e WHERE e.id =' . $estimacion);
        $divVolumietric = $queryDivVolumietric->getSingleScalarResult();
        $query = $this->em->createQuery('SELECT ((v.largoPaleta*v.anchoPaleta*v.altoPaleta/ 1000000)*v.catidadPaleta) AS valor, v.pesoPaleta * v.catidadPaleta AS peso FROM Entity\Volumetria v WHERE v.estimacion =' . $estimacion);
        $query=$query->getResult();
        $totalPeso = 0;
        $totalCBM = 0;
        $totalVolumetria = 0;
        foreach ($query as $resultado) {
          
            $totalCBM= $totalCBM+ round($resultado["valor"],2);   
            $totalPeso = $totalPeso + round($resultado["peso"], 2);
            $totalVolumetria = $totalVolumetria + (round($resultado["valor"], 2) * 1000000 / $divVolumietric);
        }
        $mayorPeso = 0;
        if ($totalPeso > $totalVolumetria) {
            $mayorPeso = 1;
        }
        $queryDolarCif = $this->em->createQuery('SELECT e.dolarCif FROM Entity\Estimacion e WHERE e.id =' . $estimacion);
        $dolarCif = $queryDolarCif->getSingleScalarResult();
        
        $totalFreight =  $this->input->get("freight");
        
        $tasas = $this->em->getRepository('Entity\Estimacion')->find($estimacion);
        
        
        $TSA = $tasas->getTsa() / 100;
        $IVA = $tasas->getIva() / 100;
        $TSS = $tasas->getTss() / 100;

        $query = $this->em->createQuery('SELECT COUNT(p.id) FROM Entity\Volumetria p WHERE p.estimacion=' . $estimacion . ' ');
        $totalresult = $query->getSingleScalarResult();
        $limit = $this->input->get("limit");
        $start = $this->input->get("start");
        $Volumetrias = $this->em->getRepository('Entity\Volumetria')->findBy(array("estimacion" => $estimacion), array(), $limit, $start);
        $data = array();
        foreach ($Volumetrias as $Volumetria) {
            
            $Productos = $this->em->getRepository('Entity\Producto')->find($Volumetria->getProducto());
           // $advalorem = $this->em->getRepository('Entity\Advalorem')->find($Productos->getAdvalorem());

          
           $advPorcentaje = $Volumetria->getAdv();
           $advPorcentaje = $Volumetria->getAdv() / 100;
            $costo_unitario = $Volumetria->getCostoUnidad();
            $unidad_caja = $Volumetria->getUnidadCaja();
            $caja_paleta = $Volumetria->getCajaPaleta();
            $catidad_paleta = $Volumetria->getCatidadPaleta();
            $seguro = $Volumetria->getSeguro();
            $seguroPn= $Volumetria->getSeguroPn();
            $preciototal = $catidad_paleta * $caja_paleta * $unidad_caja * $costo_unitario;
           
            if( $seguroPn == 0){
                $formula=$preciototal + 0;
            }
           else if( $seguroPn == 1){
               $formula=$preciototal * (1 + $seguro/100 );
           }
           else {
                $formula=$preciototal + $seguro;
           }
           
           
           if ($mayorPeso == 0) {
                $CBM2 = ($Volumetria->getLargoPaleta() * $Volumetria->getAnchoPaleta() * $Volumetria->getAltoPaleta() / 1000000) * $Volumetria->getCatidadPaleta();
                $CBM2 = round($CBM2, 2);
                $div2 = $CBM2 * 100 / $totalCBM;
            } else {
                $Peso2 = ($Volumetria->getPesoPaleta() * $Volumetria->getCatidadPaleta());
                $peso2 = round($Peso2, 2);
                $div2 = $Peso2 * 100 / $totalPeso;
            }
           
            $cif = (($formula) + ($totalFreight * $div2 / 100)) * $dolarCif;
            $cif= round($cif, 2);
            $adv = $cif * $advPorcentaje;
            $adv= round($adv, 2);
            $tsaTotal = $cif * $TSA;
            $tsaTotal= round($tsaTotal, 2);
            $tssTotal = $cif * $TSS;
            $tssTotal= round($tssTotal, 2);
            $ivaTotal = ($cif + $adv + $tsaTotal + $tssTotal) * $IVA;
            $ivaTotal= round($ivaTotal, 2);
            $totalSuma = $adv + $tsaTotal + $ivaTotal;

            $data[] = array(
                "codigo" => $Productos->getCodigo(),
                "producto" => $Productos->getDescripcion(),
                "cif" => $cif,
                "adv" => $adv,
                "tsa" => $tsaTotal,
                "tss" => $tssTotal,
                "iva" => $ivaTotal,
                "total" => $totalSuma,
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => $totalresult, 'tasas' => $data)));
    }
////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////
        public function impuestos() {

        if ($this->input->get("tipoTransaccion") == 'nuevo') {

            $custom = new Entity\Custom();
            
            $estimaciones = $this->em->getRepository('Entity\Estimacion')->findAll();
            foreach ($estimaciones as $estimacion) {
                if (trim($this->input->get("estimacion")) == $estimacion->getId()) {
                    $estima = $estimacion;
                }
            }

            $custom->setDescripcion($this->input->get("descripcion"));
            $custom->setEstimacion($estima); //trim($this->input->post("cliente"))
            $custom->setValor($this->input->get("valor")); //trim($this->input->post("proveedor"))
         

            $this->em->persist($custom);
            $this->em->flush();
            
            $dato = $custom->getEstimacion()->getId();
             $limit = $this->input->get("limit");
            $start = $this->input->get("start");
            $this->cargaimpuestos($dato, $start, $limit);
        }
        ///////////////////////////////////fin nuevo dato
        //////////////////////////////// update dato
        if ($this->input->get("tipoTransaccion") == 'editar') {

              $custom = $this->em->getRepository('Entity\Custom')->find($this->input->get("id"));
            //$tipocontacto = $this->em->getRepository('Entity\TipoDatosContacto')->findByNombre($this->input->get("tipo_contacto"));

      

            $custom->setDescripcion($this->input->get("descripcion"));
            $custom->setValor($this->input->get("valor"));
            $this->em->persist($custom);
            $this->em->flush();

            $dato = $custom->getEstimacion()->getId();
             $limit = $this->input->get("limit");
            $start = $this->input->get("start");
            $this->cargaimpuestos($dato, $start, $limit);
        }
        //////////////////////////////// fin del update
        //////////////////////////////////eliminar
        if ($this->input->get("tipoTransaccion") == 'eliminar') {

            $objetoseleccionado = $this->input->get("objetoseleciondo");
            $custom = $this->em->getRepository('Entity\Custom')->find($objetoseleccionado);
            
            $this->em->remove($custom); 
           $this->em->flush();
             $dato = $custom->getEstimacion()->getId();
             $limit = $this->input->get("limit");
            $start = $this->input->get("start");
            $this->cargaimpuestos($dato, $start, $limit);
        }
        ////////////////////////////////////////fin eliminar
        /////////////////////////////cargar data
        if ($this->input->get("tipoTransaccion") == 'cargar' or $this->input->get("tipoTransaccion") == '') {

            $dato = $this->input->get("estimacion");
            
            $limit = $this->input->get("limit");
            $start = $this->input->get("start");
            $this->cargaimpuestos($dato, $start, $limit);
            
            
        }
    }
    
    
    
    public function cargaimpuestos($dato, $start, $limit) {
       
        if ($dato== null){$dato=$this->session->userdata('estimacion');}
        $query = $this->em->createQuery('SELECT COUNT(c.id) FROM Entity\Custom c WHERE c.estimacion=' . $dato . ' ');
        $totalresult = $query->getSingleScalarResult();
        
        $impuestos = $this->em->getRepository('Entity\Custom')->findBy(array("estimacion" => $dato), array(), $limit, $start);
        $data = array();
        foreach ($impuestos as $impuesto) {
            $estimacion = $this->em->getRepository('Entity\Estimacion')->find($impuesto->getEstimacion());
            $data[] = array(
                "id" => $impuesto->getId(),
                "estimacion" => $estimacion->getId(),
                "descripcion" => $impuesto->getDescripcion(),
                "valor" => $impuesto->getValor(),
            );
        }
        
          $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => $totalresult, 'impuestos' => $data)));
    }

}

/* Location: ./application/controllers/estimar.php */