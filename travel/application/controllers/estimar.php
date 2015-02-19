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

class Estimar extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }

    public function guardar() {
        $estimacion = new Entity\Estimacion();

        $clientes = $this->em->getRepository('Entity\SocioNegocio')->findAll();
        foreach ($clientes as $cliente) {
            if (trim($this->input->post("cliente")) == $cliente->getId()) {
                $cli = $cliente;
            }
        }
        $proveedores = $this->em->getRepository('Entity\SocioNegocio')->findAll();
        foreach ($proveedores as $proveedore) {
            if (trim($this->input->post("proveedor")) == $proveedore->getId()) {
                $pro = $proveedore;
            }
        }
        $puertos = $this->em->getRepository('Entity\Puerto')->findAll();
        foreach ($puertos as $puerto) {
            if ($this->input->post("puerto_origen") == $puerto->getId()) {
                $portO = $puerto;
            }
            if ($this->input->post("puerto_destino") == $puerto->getId()) {
                $portD = $puerto;
            }
        }
        $incoterms = $this->em->getRepository('Entity\Incoterms')->findAll();
        foreach ($incoterms as $incoterm) {
            if (1 == $incoterm->getId()) {
                $inco = $incoterm;
            }
        }
        $estatuses = $this->em->getRepository('Entity\Estatus')->findAll();
        foreach ($estatuses as $estatus) {
            if (1 == $estatus->getId()) {
                $edo = $estatus;
            }
        }

        $TSA = $this->em->getRepository('Entity\Tasa')->find(1);
        $TSA = $TSA->getPorcentaje();

        $IVA = $this->em->getRepository('Entity\Tasa')->find(2);
        $IVA = $IVA->getPorcentaje();

        $TSS = $this->em->getRepository('Entity\Tasa')->find(3);
        $TSS = $TSS->getPorcentaje();

        $estimacion->setNombre(trim($this->input->post("nombre_estimacion")));
        $estimacion->setCliente($cli); //trim($this->input->post("cliente"))
        $estimacion->setProveedor($pro); //trim($this->input->post("proveedor"))
        $estimacion->setPuertoOrigen($portO); //trim($this->input->post("puerto_origen"))
        $estimacion->setPuertoDestino($portD); //trim($this->input->post("puerto_destino"))
        $estimacion->setDolarCif(trim($this->input->post("dolar_cif")));
        $estimacion->setDivVolumetric(trim($this->input->post("div_volumetric")));
        $estimacion->setDolarfreight(trim($this->input->post("dolar_freight")));
        $estimacion->setTipoIncoterm($inco);
        $estimacion->setEstatus($edo);
        $estimacion->setTipoFreight(0);
        $estimacion->setCostoPorCbm(0);
        $estimacion->setNota(trim($this->input->post("observaciones")));
        $estimacion->setTsa($TSA);
        $estimacion->setTss($TSS);
        $estimacion->setIva($IVA);




        $this->em->persist($estimacion);
        $this->em->flush();
        $dato = $estimacion->getId();

        if ($dato == 1) {

            $estimaciones = $this->em->getRepository('Entity\Estimacion')->findAll();
            foreach ($estimaciones as $estimacion) {
                if ($dato == $estimacion->getId()) {
                    $estima = $estimacion;
                }
            }

            $costo = new Entity\CostoIndirecto();
            $costo->setEstimacion($estima);
            $costo->setAdministrativosEstimados(0);
            $costo->setAnticipo(0);
            $costo->setApalancamientoFinanciero(0);
            $costo->setAporteSocial(0);
            $costo->setCicloPago(0);
            $costo->setComisionExito(0);
            $costo->setFianzaAnticipo(0);
            $costo->setFianzaFiel(0);
            $costo->setFletesNoContemplados(0);
            $costo->setPatenteMunicipal(0);
            $costo->setAdicionalFianzaAnticipo(0);

            $this->em->persist($costo);
            $this->em->flush();
        } else {
            ///////////////////////////////////////////////////////////////
            $CostoIndirectos = $this->em->getRepository('Entity\CostoIndirecto')->findByEstimacion($dato - 1);
            foreach ($CostoIndirectos as $CostoIndirecto) {

                $costo = new Entity\Custom();

                $estimaciones = $this->em->getRepository('Entity\Estimacion')->findAll();
                foreach ($estimaciones as $estimacion) {
                    if ($dato == $estimacion->getId()) {
                        $estima = $estimacion;
                    }
                }

                $costo = new Entity\CostoIndirecto();

                $costo->setEstimacion($estima);
                $costo->setAdministrativosEstimados($CostoIndirecto->getAdministrativosEstimados());
                $costo->setAnticipo($CostoIndirecto->getAnticipo());
                $costo->setApalancamientoFinanciero($CostoIndirecto->getApalancamientoFinanciero());
                $costo->setAporteSocial($CostoIndirecto->getAporteSocial());
                $costo->setCicloPago($CostoIndirecto->getCicloPago());
                $costo->setComisionExito($CostoIndirecto->getComisionExito());
                $costo->setFianzaAnticipo($CostoIndirecto->getFianzaAnticipo());
                $costo->setFianzaFiel($CostoIndirecto->getFianzaFiel());
                $costo->setFletesNoContemplados($CostoIndirecto->getFletesNoContemplados());
                $costo->setPatenteMunicipal($CostoIndirecto->getPatenteMunicipal());
                $costo->setAdicionalFianzaAnticipo($CostoIndirecto->getAdicionalFianzaAnticipo());

                $this->em->persist($costo);
                $this->em->flush();
            }


            ///////////////////////////////////////////////////////////// guardar ultimos impuestos en la nueva estimacion
            $customs = $this->em->getRepository('Entity\Custom')->findByEstimacion($dato - 1);
            foreach ($customs as $custom) {

                $descrip = $custom->getDescripcion();
                $valor = $custom->getValor();

                $custom = new Entity\Custom();

                $estimaciones = $this->em->getRepository('Entity\Estimacion')->findAll();
                foreach ($estimaciones as $estimacion) {
                    if ($dato == $estimacion->getId()) {
                        $estima = $estimacion;
                    }
                }

                $custom->setDescripcion($descrip);
                $custom->setEstimacion($estima); //trim($this->input->post("cliente"))
                $custom->setValor($valor); //trim($this->input->post("proveedor"))


                $this->em->persist($custom);
                $this->em->flush();
            }
            
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('success' => 'true', 'dato' => $dato)));
        }
    }

    public function modificar() {

        $clientes = $this->em->getRepository('Entity\SocioNegocio')->findAll();
        foreach ($clientes as $cliente) {
            if (trim($this->input->post("cliente")) == $cliente->getId()) {
                $cli = $cliente;
            }
        }
        $proveedores = $this->em->getRepository('Entity\SocioNegocio')->findAll();
        foreach ($proveedores as $proveedore) {
            if (trim($this->input->post("proveedor")) == $proveedore->getId()) {
                $pro = $proveedore;
            }
        }
        $puertos = $this->em->getRepository('Entity\Puerto')->findAll();
        foreach ($puertos as $puerto) {
            if ($this->input->post("puerto_origen") == $puerto->getId()) {
                $portO = $puerto;
            }
            if ($this->input->post("puerto_destino") == $puerto->getId()) {
                $portD = $puerto;
            }
        }
        $incoterms = $this->em->getRepository('Entity\Incoterms')->findAll();
        foreach ($incoterms as $incoterm) {
            if (1 == $incoterm->getId()) {
                $inco = $incoterm;
            }
        }
        $estatuses = $this->em->getRepository('Entity\Estatus')->findAll();
        foreach ($estatuses as $estatus) {
            if (1 == $estatus->getId()) {
                $edo = $estatus;
            }
        }

        $estimacion = $this->em->getRepository('Entity\Estimacion')->find($this->input->post("estimacion"));
        $estimacion->setNombre(trim($this->input->post("nombre_estimacion")));
        $estimacion->setCliente($cli);
        $estimacion->setProveedor($pro);
        $estimacion->setPuertoOrigen($portO);
        $estimacion->setPuertoDestino($portD);
        $estimacion->setDolarCif(trim($this->input->post("dolar_cif")));
        $estimacion->setDolarfreight(trim($this->input->post("dolar_freight")));
        $estimacion->setDivVolumetric(trim($this->input->post("div_volumetric")));
        $estimacion->setTipoIncoterm($inco);
        $estimacion->setEstatus($edo);
        $estimacion->setNota(trim($this->input->post("observaciones")));

        $this->em->persist($estimacion);
        $this->em->flush();
        $dato = $estimacion->getId();

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('success' => 'true', 'dato' => $dato)));
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