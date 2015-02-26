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

class Estados extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }

    public function estadoCombo() {
        
         $estados = $this->em->getRepository('Entity\Tblestados')->findByCodpais($this->input->get("paisId"));

        $data = array();
        foreach ($estados as $estado) {
            $data[] = array(
                "id" => $estado->getCodestado(),
                "estado" => utf8_encode($estado->getNombreestado()),
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'estados' => $data)));
       
         
        
    }

   
}

/* Location: ./application/controllers/estimar.php */