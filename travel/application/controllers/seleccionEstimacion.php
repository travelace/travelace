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

class SeleccionEstimacion extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
        $this->load->library('session');
    }

    public function estimaciones() {
  
          $limit = $this->input->get("limit");
        $start = $this->input->get("start");
        
         $query = $this->em->createQuery('SELECT COUNT(e.id) FROM Entity\Estimacion e ');
        $total = $query->getSingleScalarResult();
        
        $estimaciones = $this->em->getRepository('Entity\Estimacion')->findBy(array(), array(), $limit, $start);
        $data = array();
        foreach ($estimaciones as $estimacion) {
           
            $cliente = $this->em->getRepository('Entity\SocioNegocio')->find($estimacion->getCliente());
            $proveedor = $this->em->getRepository('Entity\SocioNegocio')->find($estimacion->getProveedor());
            $puerto_origen = $this->em->getRepository('Entity\Puerto')->find($estimacion->getPuertoOrigen());
            $pais_origen = $this->em->getRepository('Entity\Pais')->find($puerto_origen->getPais());
            $puerto_destino = $this->em->getRepository('Entity\Puerto')->find($estimacion->getPuertoDestino());
            $pais_destino = $this->em->getRepository('Entity\Pais')->find($puerto_destino->getPais());
            $tipo_incoterm = $this->em->getRepository('Entity\Incoterms')->find($estimacion->getTipoIncoterm());
            $fecha=$estimacion->getFecha();
            $data[] = array(
                "id" => $estimacion->getId(),
                "nombre" =>utf8_encode($estimacion->getNombre()),
                "cliente" => utf8_encode($cliente->getNombre()),
                "cliente_id" => utf8_encode($cliente->getId()),
                "proveedor" =>utf8_encode( $proveedor->getNombre()),
                "proveedor_id" => utf8_encode($proveedor->getId()),
                "puerto_origen" => utf8_encode($puerto_origen->getNombre()),
                "puerto_origen_id" => utf8_encode($puerto_origen->getId()),
                "puerto_destino" =>utf8_encode( $puerto_destino->getNombre()),
                "puerto_destino_id" =>utf8_encode( $puerto_destino->getId()),
                "tipo_incoterm" => $tipo_incoterm->getIncoterm(),
                "tipo_incoterm_id" => $tipo_incoterm->getId(),
                "pais_origen" => utf8_encode($pais_origen->getId()),
                "pais_destino" => utf8_encode($pais_destino->getId()),
                "dolar_cif" => $estimacion->getDolarCif(),
                "dolar_freight" => $estimacion->getDolarfreight(),
                "div_volumetric" => $estimacion->getDivVolumetric(),
                "tipo_freight" => $estimacion->getTipoFreight(),
                "costo_por_cbm" => $estimacion->getCostoPorCbm(),
                "nota" => utf8_encode($estimacion->getNota()),
                "fecha" => $fecha->format("Y-m-d"),
            );
        }
        
          $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => $total , 'estimaciones' => $data)));
        
    }
    
    public function sesion($estimacion) {
        $this->session->set_userdata('estimacion',$estimacion);
        //echo $this->session->userdata('estimacion');
        
    }



}

/* Location: ./application/controllers/estimar.php */