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

class bancos extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }

    public function BancosGrilla() {

        if ($this->input->get("tipoTransaccion") == '') {
            $this->cargaBancosGrilla();
        } else if ($this->input->get("tipoTransaccion") == 'editar') {

            $bancos = $this->em->getRepository("Entity\Tblbancos")->find($this->input->get("id"));

            $bancos->setNombrebanco($this->input->get("banco"));
            
            if($this->input->get("activo")=='true'){$activo=1;}else{$activo=0;}
            $bancos->setActivo($activo);
            $this->em->persist($bancos);
            $this->em->flush();
            $this->cargaBancosGrilla();
        } else if ($this->input->get("tipoTransaccion") == 'nuevoFalso') {
            $bancos = $this->em->getRepository('Entity\Tblbancos')->findAll();
            $data = array();
            foreach ($bancos as $banco) {
                $data[] = array(
                    "id" => $banco->getCodbanco(),
                    "banco" => utf8_encode($banco->getNombrebanco()),
                    "activo"=>$banco->getActivo(),
                );
            }
             $data[] = array(
                    "id"=> 0,
                    "banco" => '',
                    "activo"=>'',
                );
            
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => count($data), 'banco' => $data)));
        }else if ($this->input->get("tipoTransaccion") == 'nuevo') {
            $bancos = new Entity\Tblbancos();

            $bancos->setNombrebanco($this->input->get("banco"));
            $bancos->setActivo(1);
            $this->em->persist($bancos);
            $this->em->flush();
            $this->cargaBancosGrilla();
        }
        
        
        
    }

    public function cargaBancosGrilla() {
        $bancos = $this->em->getRepository('Entity\Tblbancos')->findAll();
        $data = array();
        foreach ($bancos as $banco) {
            $data[] = array(
                "id" => $banco->getCodbanco(),
                "banco" => utf8_encode($banco->getNombrebanco()),
                "activo"=>$banco->getActivo(),
                    
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'banco' => $data)));
    }

    public function buscarPaises() {

        $paises = $this->em->getRepository('Entity\Pais')->findAll();
        $data = array();
        foreach ($paises as $pais) {
            $data[] = array(
                "id" => $pais->getId(),
                "nombre" => utf8_encode($pais->getNombre()),
                "estatus_id" => $pais->getEstatus()
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'paises' => $data)));
    }

    public function buscarEstado() {

        $pais = $this->input->get("pais_id");
        $estados = $this->em->getRepository('Entity\Estado')->findBy(array("pais" => $pais));
        $data = array();
        foreach ($estados as $estado) {
            $data[] = array(
                "id" => $estado->getId(),
                "nombre" => utf8_encode($estado->getNombre()),
                "pais_id" => $estado->getPais(),
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'estado' => $data)));
    }

    public function buscarSocioNegocio($tipo) {

        $limit = $this->input->get("limit");
        $start = $this->input->get("start");

        $total = $this->em->getRepository('Entity\SocioNegocio')->totalCountSocioNegocio($tipo);
        if ($limit) {
            $clientes = $this->em->getRepository('Entity\SocioNegocio')->findBy(array("tipoSocioNegocio" => $tipo), array(), $limit, $start);
        } else {
            $clientes = $this->em->getRepository('Entity\SocioNegocio')->findBy(array("tipoSocioNegocio" => $tipo));
        }
        $data = array();
        foreach ($clientes as $cliente) {
            $estatus = $this->em->getRepository('Entity\Estatus')->find($cliente->getEstatus());
            $pais = $this->em->getRepository('Entity\Pais')->find($cliente->getPais());
            $grupo = $this->em->getRepository('Entity\Grupo')->find($cliente->getGrupo());
            $moneda = $this->em->getRepository('Entity\Moneda')->find($cliente->getMoneda());
            $data[] = array(
                "id" => $cliente->getId(),
                "estatus" => utf8_encode($estatus->getDescripcion()),
                "nombre" => utf8_encode($cliente->getNombre()),
                "pais" => utf8_encode($pais->getNombre()),
                "nombreExtranjero" => utf8_encode($cliente->getNombreExtranjero()),
                "alias" => utf8_encode($cliente->getAlias()),
                "grupo" => utf8_encode($grupo->getNombre()),
                "moneda" => utf8_encode($moneda->getNombre()),
                "rif" => $cliente->getRif(),
                "idfiscal" => $cliente->getIdfiscal(),
                "web" => $cliente->getWeb()
            );
        }
        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => $total, 'socionegocio' => $data)));
    }

    public function buscarIncoterm() {

        $incoterms = $this->em->getRepository('Entity\Incoterms')->findAll();
        $data = array();
        foreach ($incoterms as $incoterm) {
            $data[] = array(
                "id" => $incoterm->getId(),
                "incoterm" => utf8_encode($incoterm->getIncoterm()),
                "estatus_id" => $incoterm->getEstatus()
            );
        }
        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'incoterm' => $data)));
    }

    public function buscarPuertoOrigen() {
        /*
         * Este valor viene de la funcion load. utilizada en FclienteProveedores
         * para obtener el pais actual y realizar la busqueda de puerto segun el pais 
         */
        $pais = $this->input->get("pais_origen_id");

        $puertos = $this->em->getRepository('Entity\Puerto')->findBy(array("pais" => $pais));
        $data = array();
        foreach ($puertos as $puerto) {
            $data[] = array(
                "id" => $puerto->getId(),
                "nombre" => utf8_encode($puerto->getNombre()),
                "aereo" => $puerto->getAereo(),
                "maritimo" => $puerto->getMaritimo(),
                "terrestre" => $puerto->getTerrestre(),
                "pais" => $puerto->getPais(),
                "estatus_id" => $puerto->getEstatus()
            );
        }
        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'puertoOrigen' => $data)));
    }

    public function buscarPuertoDestino() {

        //////////////////////////////$this->input->get("pais_origen_id");
        //////////////////////////////este valor viene de la funcion load. utilizada en FclienteProveedores
        //////////////////////////////para obtener el pais actual y realizar la busqueda de puerto segun el pais
        $pais = $this->input->get("pais_destino_id");

        $puertos = $this->em->getRepository('Entity\Puerto')->findBy(array("pais" => $pais));
        $data = array();
        foreach ($puertos as $puerto) {
            $data[] = array(
                "id" => $puerto->getId(),
                "nombre" => utf8_encode($puerto->getNombre()),
                "aereo" => $puerto->getAereo(),
                "maritimo" => $puerto->getMaritimo(),
                "terrestre" => $puerto->getTerrestre(),
                "pais" => $puerto->getPais(),
                "estatus_id" => $puerto->getEstatus()
            );
        }
        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'puertoDestino' => $data)));
    }

    public function moneda() {

        $monedas = $this->em->getRepository('Entity\Moneda')->findAll();
        $data = array();
        foreach ($monedas as $moneda) {
            $data[] = array(
                "id" => $moneda->getId(),
                "nombre" => utf8_encode($moneda->getNombre()),
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'monedas' => $data)));
    }

    public function grupo() {

        $grupos = $this->em->getRepository('Entity\Grupo')->findAll();
        $data = array();
        foreach ($grupos as $grupo) {
            $data[] = array(
                "id" => $grupo->getId(),
                "nombre" => utf8_encode($grupo->getNombre()),
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'grupo' => $data)));
    }

    public function estatus() {

        $estatus = $this->em->getRepository('Entity\Estatus')->findAll();
        $data = array();
        foreach ($estatus as $estatu) {
            $data[] = array(
                "id" => $estatu->getId(),
                "descripcion" => utf8_encode($estatu->getDescripcion()),
            );
        }
        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'estatus' => $data)));
    }

    public function tipoFreight($tipofreight, $estima) {

        $estimacion = $this->em->getRepository('Entity\Estimacion')->find($estima);
        $estimacion->setTipoFreight($tipofreight);
        $this->em->persist($estimacion);
        $this->em->flush();
    }

    public function costoCbm($cbm, $estima) {

        $estimacion = $this->em->getRepository('Entity\Estimacion')->find($estima);
        $estimacion->setCostoPorCbm($cbm);
        $this->em->persist($estimacion);
        $this->em->flush();
    }

}

/* Location: ./application/controllers/estimar.php */