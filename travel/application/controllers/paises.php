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

class Paises extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }

    public function paisesGrilla() {

        if ($this->input->get("tipoTransaccion") == '') {
            $this->cargaPaisesGrilla();
        } else if ($this->input->get("tipoTransaccion") == 'editar') {

            $paises = $this->em->getRepository("Entity\Tblpais")->find($this->input->get("id"));
            $paises->setNombrepais($this->input->get("nombre"));
            $this->em->persist($paises);
            $this->em->flush();
            $this->cargaPaisesGrilla();
        } else if ($this->input->get("tipoTransaccion") == 'nuevoFalso') {
            $paises = $this->em->getRepository('Entity\Tblpais')->findAll();
            $data = array();
            foreach ($paises as $pais) {
                $data[] = array(
                    "id" => $pais->getCodpais(),
                    "nombre" => utf8_encode($pais->getNombrepais()),
                );
            }
             $data[] = array(
                    "id"=> 0,
                    "nombre" => '',
                );
            
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => count($data), 'pais' => $data)));
        }else if ($this->input->get("tipoTransaccion") == 'nuevo') {
            $paises = new Entity\Tblpais();

            $paises->setNombrepais($this->input->get("nombre"));

            $this->em->persist($paises);
            $this->em->flush();
            $this->cargaPaisesGrilla();
        }
        
        
        
    }

    public function cargaPaisesGrilla() {
        $paises = $this->em->getRepository('Entity\Tblpais')->findAll();
        $data = array();
        foreach ($paises as $pais) {
            $data[] = array(
                "id" => $pais->getCodpais(),
                "nombre" => utf8_encode($pais->getNombrepais()),
                    
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'pais' => $data)));
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