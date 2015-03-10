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

class Grupos extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }

    public function gruposGrilla() {

        if ($this->input->get("tipoTransaccion") == '') {
            $this->cargaGruposGrilla();
        } else if ($this->input->get("tipoTransaccion") == 'editar') {

            $grupos = $this->em->getRepository("Entity\Tblgrupoagencias")->find($this->input->get("id"));

            $grupos->setNombregrupo($this->input->get("nombreGrupo"));
            $grupos->setAbrev($this->input->get("abreviatura"));
            if($this->input->get("activo")=='true'){$activo=1;}else{$activo=0;}
            $grupos->setActivogrupo($activo);
            $this->em->persist($grupos);
            $this->em->flush();
            $this->cargaGruposGrilla();
        } else if ($this->input->get("tipoTransaccion") == 'nuevoFalso') {
            $grupos = $this->em->getRepository('Entity\Tblgrupoagencias')->findAll();
            $data = array();
            foreach ($grupos as $grupo) {
                $data[] = array(
                    "id" => $grupo->getCodgrupo(),
                    "nombreGrupo" => utf8_encode($grupo->getNombregrupo()),
                    "abreviatura" => $grupo->getAbrev(),
                    "activo"=>$grupo->getActivogrupo(),
                );
            }
             $data[] = array(
                    "id"=> 0,
                    "nombreGrupo" => '',
                    "abreviatura" => '',
                    "activo"=>'',
                );
            
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => count($data), 'grupo' => $data)));
        }else if ($this->input->get("tipoTransaccion") == 'nuevo') {
            $grupos = new Entity\Tblgrupoagencias();

            $grupos->setNombregrupo($this->input->get("nombreGrupo"));
            $grupos->setAbrev($this->input->get("abreviatura"));
            $this->em->persist($grupos);
            $this->em->flush();
            $this->cargaGruposGrilla();
        }
        
        
        
    }

    public function cargaGruposGrilla() {
        $grupos = $this->em->getRepository('Entity\Tblgrupoagencias')->findAll();
        $data = array();
        foreach ($grupos as $grupo) {
            $data[] = array(
                "id" => $grupo->getCodgrupo(),
                "nombreGrupo" => utf8_encode($grupo->getNombregrupo()),
                "abreviatura" => $grupo->getAbrev(),
                "activo"=>$grupo->getActivogrupo(),
                    
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'grupo' => $data)));
    }

    public function gruposCombo() {
        
         $grupos = $this->em->getRepository('Entity\Tblgrupoagencias')->findAll();

        $data = array();
        foreach ($grupos as $grupo) {
            $data[] = array(
                "id" => $grupo->getCodgrupo(),
                "grupo" => utf8_encode($grupo->getNombregrupo()),
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'grupo' => $data)));
       
         
        
    }
}

/* Location: ./application/controllers/estimar.php */