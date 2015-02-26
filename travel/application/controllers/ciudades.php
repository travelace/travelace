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
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ciudades extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }

    public function cuidadCombo() {
        
         $ciudades = $this->em->getRepository('Entity\Tblciudades')->findByCodestado($this->input->get("estadoId"));

        $data = array();
        foreach ($ciudades as $ciudad) {
            $data[] = array(
                "id" => $ciudad->getCodciudad(),
                "ciudad" => utf8_encode($ciudad->getNombreciudad()),
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'ciudades' => $data)));
       
         
        
    }

   
}

/* Location: ./application/controllers/estimar.php */