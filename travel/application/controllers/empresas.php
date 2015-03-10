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

class Empresas extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }

    public function empresasGrilla() {

        if ($this->input->get("tipoTransaccion") == '') {
            $this->cargaEmpresasGrilla();
        } else if ($this->input->get("tipoTransaccion") == 'editar') {

            $empresas = $this->em->getRepository("Entity\Tblempresas")->find($this->input->get("id"));
            $empresas->setNombreempresa($this->input->get("nombreEmpresa"));
            $empresas->setAbreviaturaempresa($this->input->get("abreviatura"));
            $empresas->setIva($this->input->get("iva"));
            $empresas->setLimiteretencion($this->input->get("limiteRetencion"));
            $empresas->setPorcentajeretencion($this->input->get("retencion"));
            $empresas->setCambiooficial($this->input->get("oficial"));
            $empresas->setCambiomercado($this->input->get("mercado"));
            $empresas->setCambioespecial($this->input->get("especial"));

            //if($this->input->get("activo")=='true'){$activo=1;}else{$activo=0;}
            // $bancos->setActivo($activo);
            $this->em->persist($empresas);
            $this->em->flush();
            $this->cargaEmpresasGrilla();
        } else if ($this->input->get("tipoTransaccion") == 'nuevoFalso') {
            $empresas = $this->em->getRepository('Entity\Tblempresas')->findAll();
            $data = array();
            foreach ($empresas as $empresa) {
                $data[] = array(
                    "id" => $empresa->getCodempresa(),
                    "nombreEmpresa" => utf8_encode($empresa->getNombreempresa()),
                    "abreviatura" => $empresa->getAbreviaturaempresa(),
                    "iva" => $empresa->getIva(),
                    "limiteRetencion" => $empresa->getLimiteretencion(),
                    "retencion" => $empresa->getPorcentajeretencion(),
                    "oficial" => $empresa->getCambiooficial(),
                    "mercado" => $empresa->getCambiomercado(),
                    "especial" => $empresa->getCambioespecial(),
                );
            }
            $data[] = array(
                "id" => 0,
                "nombreEmpresa" => '',
                "abreviatura" => '',
                "iva" => '',
                "limiteRetencion" => '',
                "retencion" => '',
                "oficial" => '',
                "mercado" => '',
                "especial" => '',
            );

            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => count($data), 'empresa' => $data)));
        } else if ($this->input->get("tipoTransaccion") == 'nuevo') {
            $empresas = new Entity\Tblempresas();
            $empresas->setNombreempresa($this->input->get("nombreEmpresa"));
            $empresas->setAbreviaturaempresa($this->input->get("abreviatura"));
            $empresas->setIva($this->input->get("iva"));
            $empresas->setLimiteretencion($this->input->get("limiteRetencion"));
            $empresas->setPorcentajeretencion($this->input->get("retencion"));
            $empresas->setCambiooficial($this->input->get("oficial"));
            $empresas->setCambiomercado($this->input->get("mercado"));
            $empresas->setCambioespecial($this->input->get("especial"));
           
            $this->em->persist($empresas);
            $this->em->flush();
            $this->cargaEmpresasGrilla();
        }
    }

    public function cargaEmpresasGrilla() {
        $empresas = $this->em->getRepository('Entity\Tblempresas')->findAll();
        $data = array();
        foreach ($empresas as $empresa) {
            $data[] = array(
                    "id" => $empresa->getCodempresa(),
                    "nombreEmpresa" => utf8_encode($empresa->getNombreempresa()),
                    "abreviatura" => $empresa->getAbreviaturaempresa(),
                    "iva" => $empresa->getIva(),
                    "limiteRetencion" => $empresa->getLimiteretencion(),
                    "retencion" => $empresa->getPorcentajeretencion(),
                    "oficial" => $empresa->getCambiooficial(),
                    "mercado" => $empresa->getCambiomercado(),
                    "especial" => $empresa->getCambioespecial(),
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'empresa' => $data)));
    }

   public function empresasCombo() {
        
         $empresas = $this->em->getRepository('Entity\Tblempresas')->findAll();

        $data = array();
        foreach ($empresas as $empresa) {
            $data[] = array(
                "id" => $empresa->getCodempresa(),
                "empresa" => utf8_encode($empresa->getAbreviaturaempresa()),
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'empresa' => $data)));
       
         
        
    }
}

/* Location: ./application/controllers/estimar.php */