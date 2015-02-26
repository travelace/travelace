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
	
    public function estadosGrilla() {

        if ($this->input->get("tipoTransaccion") == 'cargar') {
            $this->cargaEstadosGrilla();
        } else if ($this->input->get("tipoTransaccion") == 'editar') {

            $estados = $this->em->getRepository("Entity\Tblestados")->find($this->input->get("id"));
            $estados->setNombreestado($this->input->get("nombre"));
            $this->em->persist($estados);
            $this->em->flush();
            $this->cargaEstadosGrilla();
        } else if ($this->input->get("tipoTransaccion") == 'nuevoFalso') {
            $estados = $this->em->getRepository('Entity\Tblestados')->findByCodpais($this->input->get("pais"));
            $data = array();
            foreach ($estados as $estado) {
                $data[] = array(
                    "id" => $estado->getCodestado(),
                    "nombre" => utf8_encode($estado->getNombreestado()),
                    "paisId" => $estado->getCodpais()
                );
            }
             $data[] = array(
                    "id"=> 0,
                    "nombre" => '',
                 "paisId" =>$this->input->get("pais")
                );
            
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => count($data), 'estado' => $data)));
        }else if ($this->input->get("tipoTransaccion") == 'nuevo') {
            $estados = new Entity\Tblestados();

            $estados->setNombreestado($this->input->get("nombre"));
            $estados->setCodpais($this->input->get("pais"));
            $this->em->persist($estados);
            $this->em->flush();
            $this->cargaEstadosGrilla();
        }
        
        
        
    }

    public function cargaEstadosGrilla() {
        $estados = $this->em->getRepository('Entity\Tblestados')->findByCodpais($this->input->get("pais"));
        $data = array();
        foreach ($estados as $estado) {
            $data[] = array(
                "id" => $estado->getCodestado(),
                "nombre" => utf8_encode($estado->getNombreestado()),
                "paisId" => $estado->getCodpais()
                    
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'estado' => $data)));
    }

   
}

