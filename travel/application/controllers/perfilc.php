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

class Perfilc extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }

    public function perfilCombo() {



        $perfilesCombo = $this->em->getRepository("Entity\Tblperfiles")->findAll();
        $data = array();
        foreach ($perfilesCombo as $perfilcombo) {
            $data[] = array(
                "perfil" => $perfilcombo->getNombreperfil(),
                "id" => $perfilcombo->getCodperfil(),
                
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'perfilcombo' => $data)));
    }

}

/* Location: ./application/controllers/estimar.php */