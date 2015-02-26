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

class Pais extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }

    public function paisCombo() {
        
         $paises = $this->em->getRepository('Entity\Tblpais')->findAll();

        $data = array();
        foreach ($paises as $pais) {
            $data[] = array(
                "id" => $pais->getCodpais(),
                "pais" => utf8_encode($pais->getNombrepais()),
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'pais' => $data)));
       
         
        
    }

   
}

/* Location: ./application/controllers/estimar.php */