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
    public function ciudadesGrilla() {

        if ($this->input->get("tipoTransaccion") == 'cargar') {
            $this->cargaCiudadesGrilla();
        } else if ($this->input->get("tipoTransaccion") == 'editar') {

            $ciudades = $this->em->getRepository("Entity\Tblciudades")->find($this->input->get("id"));
            $ciudades->setNombreciudad($this->input->get("nombre"));
            $this->em->persist($ciudades);
            $this->em->flush();
            $this->cargaCiudadesGrilla();
        } else if ($this->input->get("tipoTransaccion") == 'nuevoFalso') {
            $ciudades = $this->em->getRepository('Entity\Tblciudades')->findByCodestado($this->input->get("estado"));
            $data = array();
            foreach ($ciudades as $ciudad) {
                $data[] = array(
                    "id" => $ciudad->getCodciudad(),
                    "nombre" => utf8_encode($ciudad->getNombreciudad()),
                    "estadoId" => $ciudad->getCodestado()
                );
            }
             $data[] = array(
                    "id"=> 0,
                    "nombre" => '',
                 "estadoId" =>$this->input->get("estado")
                );
            
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => count($data), 'ciudad' => $data)));
        }else if ($this->input->get("tipoTransaccion") == 'nuevo') {
            $ciudades = new Entity\Tblciudades();

            $ciudades->setNombreciudad($this->input->get("nombre"));
            $ciudades->setCodestado($this->input->get("estado"));
            $this->em->persist($ciudades);
            $this->em->flush();
            $this->cargaCiudadesGrilla();
        }
        
        
        
    }

    public function cargaCiudadesGrilla() {
        $ciudades = $this->em->getRepository('Entity\Tblciudades')->findByCodestado($this->input->get("estado"));
        $data = array();
        foreach ($ciudades as $ciudad) {
            $data[] = array(
                "id" => $ciudad->getCodciudad(),
                "nombre" => utf8_encode($ciudad->getNombreciudad()),
                "estadoId" => $ciudad->getCodestado()
                    
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'ciudad' => $data)));
    }

   
}

/* Location: ./application/controllers/estimar.php */