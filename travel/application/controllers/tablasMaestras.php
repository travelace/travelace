<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class TablasMaestras extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
        $this->load->library('session');
    }

    public function view() {
        
    }

    public function paises() {
        if ($this->input->get("tipoTransaccion") == '') {
            $this->cargaPaises();
        } else if ($this->input->get("tipoTransaccion") == 'editar') {

            $paises = $this->em->getRepository("Entity\Pais")->find($this->input->get("id"));

            $paises->setNombre(utf8_decode($this->input->get("nombre")));
            $this->em->persist($paises);
            $this->em->flush();
            $this->cargaPaises();
        } else if ($this->input->get("tipoTransaccion") == 'nuevoFalso') {
            $paises = $this->em->getRepository('Entity\Pais')->findBy(array("estatus" => 1));
            $data = array();
            foreach ($paises as $pais) {
                $data[] = array(
                    "id" => $pais->getId(),
                    "nombre" => utf8_encode($pais->getNombre()),
                    "estatus_id" => $pais->getEstatus()
                );
            }

            $data[] = array(
                "id" => '',
                "nombre" => '',
                "estatus_id" => '');
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => count($data), 'paises' => $data)));
        } else if ($this->input->get("tipoTransaccion") == 'nuevo') {
            $paises = new Entity\Pais();

            $estatuses = $this->em->getRepository('Entity\Estatus')->findAll();
            foreach ($estatuses as $estatus) {
                if (1 == $estatus->getId()) {
                    $edo = $estatus;
                }
            }

            $paises->setNombre(utf8_decode($this->input->get("nombre")));
            $paises->setEstatus($edo);
            $this->em->persist($paises);
            $this->em->flush();
            $this->cargaPaises();
        } else if ($this->input->get("tipoTransaccion") == 'eliminar') {
            $paises = $this->em->getRepository("Entity\Pais")->find($this->input->get("id"));
            $estatus = $this->em->getRepository("Entity\Estatus")->find(2);
            $paises->setEstatus($estatus); ////////estatus inactivo
            $this->em->persist($paises);
            $this->em->flush();
            $this->cargaPaises();
        }
    }

    public function cargaPaises() {

        $paises = $this->em->getRepository('Entity\Pais')->findBy(array("estatus" => 1));
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

    public function estado() {
        if ($this->input->get("tipoTransaccion") == 'cargar') {
            $dato = $this->input->get("pais_id");
            $this->cargaEstado($dato);
        } else if ($this->input->get("tipoTransaccion") == 'nuevoFalso') {
            $dato = $this->input->get("pais_id");
            $estados = $this->em->getRepository('Entity\Estado')->findBy(array("pais" => $dato, "estatus" => 1));
            $data = array();
            foreach ($estados as $estado) {
                $pais = $this->em->getRepository('Entity\Pais')->find($estado->getPais());
                $data[] = array(
                    "id" => $estado->getId(),
                    "nombre" => utf8_encode($estado->getNombre()),
                    "pais" => utf8_encode($pais->getNombre()),
                    "pais_id" => $estado->getPais()
                );
            }
            $data[] = array(
                "id" => '',
                "nombre" => '',
                "pais" => '',
                "pais_id" => '',
            );
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => count($data), 'estado' => $data)));
        } else if ($this->input->get("tipoTransaccion") == 'editar') {

            $estados = $this->em->getRepository('Entity\Estado')->find($this->input->get("id"));

            $estados->setNombre(utf8_decode($this->input->get("nombre")));
            $this->em->persist($estados);
            $this->em->flush();
            $dato = $estados->getPais();
            $this->cargaEstado($dato);
        } else if ($this->input->get("tipoTransaccion") == 'nuevo') {
            $estado = new Entity\Estado();

            $estatus = $this->em->getRepository("Entity\Estatus")->find(1);
            $pa = $this->em->getRepository('Entity\Pais')->find($this->input->get("pais_id"));
            $estado->setNombre(utf8_decode($this->input->get("nombre")));
            $estado->setPais($pa);
            $estado->setEstatus($estatus);
            $this->em->persist($estado);
            $this->em->flush();
            $dato = $estado->getPais();
            $this->cargaEstado($dato);
        } else if ($this->input->get("tipoTransaccion") == 'eliminar') {
            $estados = $this->em->getRepository('Entity\Estado')->find($this->input->get("id"));
            $estatus = $this->em->getRepository("Entity\Estatus")->find(2);
            $estados->setEstatus($estatus);
            $this->em->persist($estados);
            $this->em->flush();
            $dato = $estados->getPais();
            $this->cargaEstado($dato);
        }
    }

    public function cargaEstado($dato) {

        $estados = $this->em->getRepository('Entity\Estado')->findBy(array("pais" => $dato, "estatus" => 1));
        $data = array();
        foreach ($estados as $estado) {
            $pais = $this->em->getRepository('Entity\Pais')->find($estado->getPais());
            $data[] = array(
                "id" => $estado->getId(),
                "nombre" => utf8_encode($estado->getNombre()),
                "pais" => utf8_encode($pais->getNombre()),
                "pais_id" => $estado->getPais()
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'estado' => $data)));
    }

    public function puerto() {
        if ($this->input->get("tipoTransaccion") == 'cargar') {
            $dato = $this->input->get("pais_id");
            $this->cargaPuerto($dato);
        } else if ($this->input->get("tipoTransaccion") == 'nuevoFalso') {
            $dato = $this->input->get("pais_id");
            $puertos = $this->em->getRepository('Entity\Puerto')->findBy(array("pais" => $dato, "estatus" => 1));
            $data = array();
            foreach ($puertos as $puerto) {
                $pais = $this->em->getRepository('Entity\Pais')->find($puerto->getPais());
                $data[] = array(
                    "id" => $puerto->getId(),
                    "nombre" => utf8_encode($puerto->getNombre()),
                    "pais" => utf8_encode($pais->getNombre()),
                    "pais_id" => $puerto->getPais(),
                    "aereo" => utf8_encode($puerto->getAereo()),
                    "maritimo" => utf8_encode($puerto->getMaritimo()),
                    "terrestre" => utf8_encode($puerto->getTerrestre()),
                );
            }

            $data[] = array(
                "id" => '',
                "nombre" => '',
                "pais" => '',
                "pais_id" => '',
                "aereo" => '',
                "maritimo" => '',
                "terrestre" => '',
            );

            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => count($data), 'puerto' => $data)));
        } else if ($this->input->get("tipoTransaccion") == 'editar') {

            $puertos = $this->em->getRepository('Entity\Puerto')->find($this->input->get("id"));

            if ($this->input->get("aereo") == 'true') {
                $aero = 1;
            } else {
                $aero = 0;
            }
            if ($this->input->get("maritimo") == 'true') {
                $maritimo = 1;
            } else {
                $maritimo = 0;
            }
            if ($this->input->get("terrestre") == 'true') {
                $terrestre = 1;
            } else {
                $terrestre = 0;
            }

            $puertos->setNombre(utf8_decode($this->input->get("nombre")));
            $puertos->setAereo($aero);
            $puertos->setMaritimo($maritimo);
            $puertos->setTerrestre($terrestre);

            $this->em->persist($puertos);
            $this->em->flush();
            $dato = $puertos->getPais();
            $this->cargaPuerto($dato);
        } else if ($this->input->get("tipoTransaccion") == 'nuevo') {
            $puertos = new Entity\Puerto();

            $edo = $this->em->getRepository('Entity\Estatus')->find(1);
            $pa = $this->em->getRepository('Entity\Pais')->find($this->input->get("pais_id"));
            if ($this->input->get("aereo") == 'true') {
                $aero = 1;
            } else {
                $aero = 0;
            }
            if ($this->input->get("maritimo") == 'true') {
                $maritimo = 1;
            } else {
                $maritimo = 0;
            }
            if ($this->input->get("terrestre") == 'true') {
                $terrestre = 1;
            } else {
                $terrestre = 0;
            }

            $puertos->setNombre(utf8_decode($this->input->get("nombre")));
            $puertos->setAereo($aero);
            $puertos->setMaritimo($maritimo);
            $puertos->setTerrestre($terrestre);
            $puertos->setPais($pa);
            $puertos->setEstatus($edo);
            $this->em->persist($puertos);
            $this->em->flush();
            $dato = $puertos->getPais();
            $this->cargaPuerto($dato);
        }else if ($this->input->get("tipoTransaccion") == 'eliminar') {
            $Puerto = $this->em->getRepository('Entity\Puerto')->find($this->input->get("id"));
            $estatus = $this->em->getRepository("Entity\Estatus")->find(2);
            $Puerto->setEstatus($estatus);
            $this->em->persist($Puerto);
            $this->em->flush();
            $dato = $Puerto->getPais();
            $this->cargaPuerto($dato);
        }
    }

    public function cargaPuerto($dato) {
        $puertos = $this->em->getRepository('Entity\Puerto')->findBy(array("pais" => $dato, "estatus" => 1));
        $data = array();
        foreach ($puertos as $puerto) {
            $pais = $this->em->getRepository('Entity\Pais')->find($puerto->getPais());
            $data[] = array(
                "id" => $puerto->getId(),
                "nombre" => utf8_encode($puerto->getNombre()),
                "pais" => utf8_encode($pais->getNombre()),
                "pais_id" => $puerto->getPais(),
                "aereo" => $puerto->getAereo(),
                "maritimo" => $puerto->getMaritimo(),
                "terrestre" => $puerto->getTerrestre(),
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'puerto' => $data)));
    }

    public function freight() {
        if ($this->input->get("tipoTransaccion") == '') {
            $this->cargaFreight();
        } else if ($this->input->get("tipoTransaccion") == 'editar') {

            $tipoFreight = $this->em->getRepository("Entity\Freight")->find($this->input->get("id"));

            $tipoFreight->setDescripcion($this->input->get("freight"));
            $this->em->persist($tipoFreight);
            $this->em->flush();
            $this->cargaFreight();
        } else if ($this->input->get("tipoTransaccion") == 'nuevoFalso') {

            $tipoFreight = $this->em->getRepository('Entity\Freight')->findBy(array("estatus" => 1));
            $data = array();
            foreach ($tipoFreight as $Freight) {
                $data[] = array(
                    "id" => $Freight->getId(),
                    "freight" => utf8_encode($Freight->getDescripcion())
                );
            }

            $data[] = array(
                "id" => '',
                "freight" => ''
            );
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => count($data), 'Freight' => $data)));
        } else if ($this->input->get("tipoTransaccion") == 'nuevo') {

            $estatus = $this->em->getRepository("Entity\Estatus")->find(1);
            $tipoFreight = new Entity\Freight();
            $tipoFreight->setDescripcion($this->input->get("freight"));
            $tipoFreight->setEstatus($estatus);
            $this->em->persist($tipoFreight);
            $this->em->flush();
            $this->cargaFreight();
        }else if ($this->input->get("tipoTransaccion") == 'eliminar') {
           $freight = $this->em->getRepository('Entity\Freight')->find($this->input->get("id"));
            $estatus = $this->em->getRepository("Entity\Estatus")->find(2);
            $freight->setEstatus($estatus);
            $this->em->persist($freight);
            $this->em->flush();
            $this->cargaFreight();
        }
    }

    public function cargaFreight() {

        $tipoFreight = $this->em->getRepository('Entity\Freight')->findBy(array("estatus" => 1));
        $data = array();
        foreach ($tipoFreight as $Freight) {
            $data[] = array(
                "id" => $Freight->getId(),
                "freight" => utf8_encode($Freight->getDescripcion())
            );
        }
        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'Freight' => $data)));
    }

    public function advalorem() {
        if ($this->input->get("tipoTransaccion") == '') {
            $this->cargaAdvalorem();
        } else if ($this->input->get("tipoTransaccion") == 'editar') {

            $advalorems = $this->em->getRepository("Entity\Advalorem")->find($this->input->get("id"));

            $advalorems->setCategoria(utf8_decode($this->input->get("categoria")));
            $advalorems->setPorcentaje($this->input->get("porcentaje"));
            $this->em->persist($advalorems);
            $this->em->flush();
            $this->cargaAdvalorem();
        } else if ($this->input->get("tipoTransaccion") == 'nuevoFalso') {
            $advalorems = $this->em->getRepository('Entity\Advalorem')->findBy(array("estatus" => 1));
            $data = array();
            foreach ($advalorems as $advalorem) {
                $data[] = array(
                    "id" => $advalorem->getId(),
                    "categoria" => utf8_encode($advalorem->getCategoria()),
                    "porcentaje" => utf8_encode($advalorem->getPorcentaje())
                );
            }
            $data[] = array(
                "id" => '',
                "categoria" => '',
                "porcentaje" => ''
            );
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => count($data), 'advalorem' => $data)));
        } else if ($this->input->get("tipoTransaccion") == 'nuevo') {
 
            $estatus = $this->em->getRepository("Entity\Estatus")->find(1);
            $advalorems = new Entity\Advalorem();

            $advalorems->setCategoria(utf8_decode($this->input->get("categoria")));
            $advalorems->setPorcentaje($this->input->get("porcentaje"));
            $advalorems->setEstatus($estatus);
            $this->em->persist($advalorems);
            $this->em->flush();
            $this->cargaAdvalorem();
        }else if ($this->input->get("tipoTransaccion") == 'eliminar') {
            $advalorem = $this->em->getRepository('Entity\Advalorem')->find($this->input->get("id"));
            $estatus = $this->em->getRepository("Entity\Estatus")->find(2);
            $advalorem->setEstatus($estatus);
            $this->em->persist($advalorem);
            $this->em->flush();
            $this->cargaAdvalorem();
        }
    }

    public function cargaAdvalorem() {

        $advalorems = $this->em->getRepository('Entity\Advalorem')->findBy(array("estatus" => 1));
        $data = array();
        foreach ($advalorems as $advalorem) {
            $data[] = array(
                "id" => $advalorem->getId(),
                "categoria" => utf8_encode($advalorem->getCategoria()),
                "porcentaje" => utf8_encode($advalorem->getPorcentaje())
            );
        }
        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'advalorem' => $data)));
    }

    public function incoterm() {
        if ($this->input->get("tipoTransaccion") == '') {
            $this->cargaIncoterm();
        } else if ($this->input->get("tipoTransaccion") == 'editar') {

            $incoterms = $this->em->getRepository("Entity\Incoterms")->find($this->input->get("id"));

            if ($this->input->get("aereo") == 'true') {
                $aero = 1;
            } else {
                $aero = 0;
            }
            if ($this->input->get("maritimo") == 'true') {
                $maritimo = 1;
            } else {
                $maritimo = 0;
            }
            if ($this->input->get("terrestre") == 'true') {
                $terrestre = 1;
            } else {
                $terrestre = 0;
            }


            $incoterms->setIncoterm($this->input->get("incoterm"));
            $incoterms->setDescription($this->input->get("description"));
            $incoterms->setAereo($aero);
            $incoterms->setMaritimo($maritimo);
            $incoterms->setTerrestre($terrestre);



            $this->em->persist($incoterms);
            $this->em->flush();
            $this->cargaIncoterm();
        } else if ($this->input->get("tipoTransaccion") == 'nuevoFalso') {

            $incoterms = $this->em->getRepository('Entity\Incoterms')->findBy(array("estatus" => 1));
            $data = array();
            foreach ($incoterms as $incoterm) {
                $data[] = array(
                    "id" => $incoterm->getId(),
                    "incoterm" => utf8_encode($incoterm->getIncoterm()),
                    "description" => utf8_encode($incoterm->getDescription()),
                    "aereo" => utf8_encode($incoterm->getAereo()),
                    "maritimo" => utf8_encode($incoterm->getMaritimo()),
                    "terrestre" => utf8_encode($incoterm->getTerrestre())
                );
            }

            $data[] = array(
                "id" => '',
                "incoterm" => '',
                "description" => '',
                "aereo" => '',
                "maritimo" => '',
                "terrestre" => ''
            );

            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => count($data), 'incoterm' => $data)));
        } else if ($this->input->get("tipoTransaccion") == 'nuevo') {
            $incoterms = new Entity\Incoterms();

            $estatus = $this->em->getRepository("Entity\Estatus")->find(1);

            if ($this->input->get("aereo") == 'true') {
                $aero = 1;
            } else {
                $aero = 0;
            }
            if ($this->input->get("maritimo") == 'true') {
                $maritimo = 1;
            } else {
                $maritimo = 0;
            }
            if ($this->input->get("terrestre") == 'true') {
                $terrestre = 1;
            } else {
                $terrestre = 0;
            }


            $incoterms->setIncoterm($this->input->get("incoterm"));
            $incoterms->setDescription($this->input->get("description"));
            $incoterms->setAereo($aero);
            $incoterms->setMaritimo($maritimo);
            $incoterms->setTerrestre($terrestre);
            $incoterms->setEstatus($estatus);



            $this->em->persist($incoterms);
            $this->em->flush();
            $this->cargaIncoterm();
        }
        else if ($this->input->get("tipoTransaccion") == 'eliminar') {
            $incoterms = $this->em->getRepository('Entity\Incoterms')->find($this->input->get("id"));
            $estatus = $this->em->getRepository("Entity\Estatus")->find(2);
            $incoterms->setEstatus($estatus);
            $this->em->persist($incoterms);
            $this->em->flush();
            $this->cargaIncoterm();
        }
    }

    public function cargaIncoterm() {
        $incoterms = $this->em->getRepository('Entity\Incoterms')->findBy(array("estatus" => 1));
        $data = array();
        foreach ($incoterms as $incoterm) {
            $data[] = array(
                "id" => $incoterm->getId(),
                "incoterm" => utf8_encode($incoterm->getIncoterm()),
                "description" => utf8_encode($incoterm->getDescription()),
                "aereo" => utf8_encode($incoterm->getAereo()),
                "maritimo" => utf8_encode($incoterm->getMaritimo()),
                "terrestre" => utf8_encode($incoterm->getTerrestre())
            );
        }
        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'incoterm' => $data)));
    }

    public function grupo() {
        if ($this->input->get("tipoTransaccion") == '') {
            $this->cargaGrupo();
        } else if ($this->input->get("tipoTransaccion") == 'editar') {

            $grupos = $this->em->getRepository("Entity\Grupo")->find($this->input->get("id"));

            $grupos->setNombre($this->input->get("nombre"));
            $this->em->persist($grupos);
            $this->em->flush();
            $this->cargaGrupo();
        } else if ($this->input->get("tipoTransaccion") == 'nuevoFalso') {
            $grupos = $this->em->getRepository('Entity\Grupo')->findBy(array("estatus" => 1));
            $data = array();
            foreach ($grupos as $grupo) {
                $data[] = array(
                    "id" => $grupo->getId(),
                    "nombre" => utf8_encode($grupo->getNombre()),
                );
            }

            $data[] = array(
                "id" => '',
                "nombre" => '',
            );
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => count($data), 'grupo' => $data)));
        } else if ($this->input->get("tipoTransaccion") == 'nuevo') {
            $grupos = new Entity\Grupo();
             $estatus = $this->em->getRepository("Entity\Estatus")->find(1);
             
            $grupos->setNombre($this->input->get("nombre"));
            $grupos->setEstatus($estatus);
            $this->em->persist($grupos);
            $this->em->flush();
            $this->cargaGrupo();
        }else if ($this->input->get("tipoTransaccion") == 'eliminar') {
            $grupo = $this->em->getRepository('Entity\Grupo')->find($this->input->get("id"));
            $estatus = $this->em->getRepository("Entity\Estatus")->find(2);
            $grupo->setEstatus($estatus);
            $this->em->persist($grupo);
            $this->em->flush();
            $this->cargaGrupo();
        }
    }

    public function cargaGrupo() {
        $grupos = $this->em->getRepository('Entity\Grupo')->findBy(array("estatus" => 1));
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

    public function moneda() {
        if ($this->input->get("tipoTransaccion") == '') {
            $this->cargaMoneda();
        } else if ($this->input->get("tipoTransaccion") == 'editar') {

            $monedas = $this->em->getRepository("Entity\Moneda")->find($this->input->get("id"));

            $monedas->setNombre(utf8_decode($this->input->get("nombre")));
            $this->em->persist($monedas);
            $this->em->flush();
            $this->cargaMoneda();
        } else if ($this->input->get("tipoTransaccion") == 'nuevoFalso') {
            $monedas = $this->em->getRepository('Entity\Moneda')->findBy(array("estatus" => 1));
            $data = array();
            foreach ($monedas as $moneda) {
                $data[] = array(
                    "id" => $moneda->getId(),
                    "nombre" => utf8_encode($moneda->getNombre()),
                );
            }

            $data[] = array(
                "id" => '',
                "nombre" => '',
            );
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => count($data), 'monedas' => $data)));
        } else if ($this->input->get("tipoTransaccion") == 'nuevo') {
            $monedas = new Entity\Moneda();

            $estatus = $this->em->getRepository("Entity\Estatus")->find(1);
            $monedas->setNombre(utf8_decode($this->input->get("nombre")));
            $monedas->setEstatus($estatus);
            $this->em->persist($monedas);
            $this->em->flush();
            $this->cargaMoneda();
        }else if ($this->input->get("tipoTransaccion") == 'eliminar') {
             $moneda = $this->em->getRepository('Entity\Moneda')->find($this->input->get("id"));
            $estatus = $this->em->getRepository("Entity\Estatus")->find(2);
            $moneda->setEstatus($estatus);
            $this->em->persist($moneda);
            $this->em->flush();
            $this->cargaMoneda();
          
        }
    }

    public function cargaMoneda() {
        $monedas = $this->em->getRepository('Entity\Moneda')->findBy(array("estatus" => 1));
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

    public function producto() {
        if ($this->input->get("tipoTransaccion") == '') {
            $this->cargaProducto();
        } else if ($this->input->get("tipoTransaccion") == 'editar') {

            $r = 0;
            if (is_numeric($this->input->get("advalorem"))) {
                $r = 1;
            }

            $Productos = $this->em->getRepository("Entity\Producto")->find($this->input->get("id"));
            // $estatus = $this->em->getRepository("Entity\Estatus")->find(1);
            $Productos->setCodigo(utf8_decode($this->input->get("codigo")));
            $Productos->setDescripcion(utf8_decode($this->input->get("descripcion")));
            if ($r == 1) {
                $adv = $this->em->getRepository("Entity\Advalorem")->find($this->input->get("advalorem"));
                $Productos->setAdvalorem($adv);
            }
            // $Productos->setEstatus(utf8_decode($this->input->get("advalorem")));
            $this->em->persist($Productos);
            $this->em->flush();
            $this->cargaProducto();
        } else if ($this->input->get("tipoTransaccion") == 'nuevoFalso') {
            $Productos = $this->em->getRepository('Entity\Producto')->findBy(array("estatus" => 1));
            $data = array();
            foreach ($Productos as $Producto) {
                $adv = $this->em->getRepository("Entity\Advalorem")->find($Producto->getAdvalorem());
                $data[] = array(
                    "id" => $Producto->getId(),
                    "descripcion" => utf8_encode($Producto->getDescripcion()),
                    "codigo" => utf8_encode($Producto->getCodigo()),
                    "advalorem" => utf8_encode($adv->getCategoria())
                );
            }

            $data[] = array(
                "id" => '',
                "descripcion" => '',
                "codigo" => '',
                "advalorem" => ''
            );

            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => count($data), 'producto' => $data)));
        } else if ($this->input->get("tipoTransaccion") == 'nuevo') {

            $Productos = new Entity\Producto();
            $estatus = $this->em->getRepository("Entity\Estatus")->find(1);
            $adv = $this->em->getRepository("Entity\Advalorem")->find($this->input->get("advalorem"));

            $Productos->setCodigo(utf8_decode($this->input->get("codigo")));
            $Productos->setDescripcion(utf8_decode($this->input->get("descripcion")));
            $Productos->setAdvalorem($adv);
            $Productos->setEstatus($estatus);

            $this->em->persist($Productos);
            $this->em->flush();
            $this->cargaProducto();
        }else if ($this->input->get("tipoTransaccion") == 'eliminar') {
             $producto = $this->em->getRepository('Entity\Producto')->find($this->input->get("id"));
            $estatus = $this->em->getRepository("Entity\Estatus")->find(2);
            $producto->setEstatus($estatus);
            $this->em->persist($producto);
            $this->em->flush();
            $this->cargaProducto();
          
        }
    }

    public function cargaProducto() {

        $Productos = $this->em->getRepository('Entity\Producto')->findBy(array("estatus" => 1));
        $data = array();
        foreach ($Productos as $Producto) {
            $adv = $this->em->getRepository("Entity\Advalorem")->find($Producto->getAdvalorem());
            $data[] = array(
                "id" => $Producto->getId(),
                "descripcion" => utf8_encode($Producto->getDescripcion()),
                "codigo" => utf8_encode($Producto->getCodigo()),
                "advalorem" => utf8_encode($adv->getCategoria())
            );
        }
        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'producto' => $data)));
    }

    public function cargarTasas() {
        $tasas = $this->em->getRepository('Entity\Tasa')->findAll();
        $data = array();
        foreach ($tasas as $tasa) {
            $data[] = array(
                "id" => $tasa->getId(),
                "nombre" => utf8_encode($tasa->getNombre()),
                "porcentaje" => utf8_encode($tasa->getPorcentaje())
            );
        }
        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'tasas' => $data)));
    }
    
    
    public function guardarTasas(){
         $tsa = $this->em->getRepository('Entity\Tasa')->find(1);
         $tsa->setPorcentaje($this->input->post("tsa"));
         $this->em->persist($tsa);
         $this->em->flush();
         $iva = $this->em->getRepository('Entity\Tasa')->find(2);
         $iva->setPorcentaje($this->input->post("iva"));
         $this->em->persist($iva);
         $this->em->flush();
         $tss= $this->em->getRepository('Entity\Tasa')->find(3);
         $tss->setPorcentaje($this->input->post("tss"));
         $this->em->persist($tss);
         $this->em->flush();
    }

}
