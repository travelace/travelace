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

class Productos extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }

    public function productosGrilla() {

        if ($this->input->get("tipoTransaccion") == '') {
            $this->cargaProductosGrilla();
        } else if ($this->input->get("tipoTransaccion") == 'editar') {

            $productos = $this->em->getRepository("Entity\Tblproducto")->find($this->input->get("codigo"));

            $productos->setAbreviaturaproducto($this->input->get("abreviatura"));
            $productos->setNombreproducto($this->input->get("nombre"));
            if ($this->input->get("activo") == 'true') {
                $activo = 1;
            } else {
                $activo = 0;
            }
            $productos->setActivo($activo);
            $this->em->persist($productos);
            $this->em->flush();
            $this->cargaProductosGrilla();
        } else if ($this->input->get("tipoTransaccion") == 'nuevoFalso') {
            $productos = $this->em->getRepository('Entity\Tblproducto')->findAll();
            $data = array();
            foreach ($productos as $producto) {
                $data[] = array(
                    "codigo" => $producto->getCodproducto(),
                    "abreviatura" => $producto->getAbreviaturaproducto(),
                    "nombre" => utf8_encode($producto->getNombreproducto()),
                    "activo" => $producto->getActivo(),
                );
            }
            $data[] = array(
                "codigo" => 0,
                "abreviatura" => '',
                "nombre" => '',
                "activo" => '',
            );

            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => count($data), 'producto' => $data)));
        } else if ($this->input->get("tipoTransaccion") == 'nuevo') {
            $productos = new Entity\Tblproducto();

            $productos->setAbreviaturaproducto($this->input->get("abreviatura"));
            $productos->setNombreproducto($this->input->get("nombre"));
            $this->em->persist($productos);
            $this->em->flush();
            $this->cargaProductosGrilla();
        }
    }

    public function cargaProductosGrilla() {
        $productos = $this->em->getRepository('Entity\Tblproducto')->findAll();
        $data = array();
        foreach ($productos as $producto) {
            $data[] = array(
                "codigo" => $producto->getCodproducto(),
                "abreviatura" => $producto->getAbreviaturaproducto(),
                "nombre" => utf8_encode($producto->getNombreproducto()),
                "activo" => $producto->getActivo(),
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'producto' => $data)));
    }

    public function guardarModulos($modulo, $codigoProducto) {
        $productos = $this->em->getRepository("Entity\Tblproducto")->find($codigoProducto);
        $productos->setModulos($modulo);
        $this->em->persist($productos);
        $this->em->flush();
    }

    public function consultaProductos($codigo) {
        $productos = $this->em->getRepository("Entity\Tblproducto")->find($codigo);
        $data = array();
        $modulo = $productos->getModulos();
        if ($modulo == true) {
            $modulo = 1;
        } else {
            $modulo = 0;
        };
        $modulodm = $productos->getModulolargaestadia();
        if ($modulodm == true) {
            $modulodm = 1;
        } else {
            $modulodm = 0;
        };
        $corporativo = $productos->getCorporativo();
        $largaestadia = $productos->getLargaestadiaproducto();
        $largaestadialimi = $productos->getLargasestadiaslimiedad();
        $anual = $productos->getAnuales();
        $dosporuno = $productos->getDosporuno();

        $data[] = array(
            "modulo" => $modulo,
            "dias" => $productos->getDiaadicionalproducto(),
            "maxp" => $productos->getMaxpersona(),
            "limited" => $productos->getLimitediasproductos(),
            "edadm" => $productos->getMaximaedadproducto(),
            "edadmin" => $productos->getMinimaedadproducto(),
            "descuentof" => $productos->getDescuentofamiliarproducto(),
            "recargoe" => $productos->getRecargoedadproducto(),
            "mayoresa" => $productos->getMayoresa(),
            "porcentajer" => $productos->getRecargoedadproducto(),
            "corporativo" => $corporativo,
            "largaestadia" => $largaestadia,
            "largaestadiatarifa" => $productos->getTarifaestalarga(),
            "modulodm" => $modulodm,
            "largaestadialimi" => $largaestadialimi,
            "anual" => $anual,
            "descuento" => $productos->getDescuento(),
            "dosporuno" => $dosporuno,
            "iniciopromo" => $productos->getDesdepromo()->format('Y-m-d'),
            "finpromo" => $productos->getHastapromo()->format('Y-m-d'),

        );
        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'producto' => $data)));
    }
 public function tarifasGrilla() {
      $tarifas = $this->em->getRepository('Entity\Tbltarifas')->createQueryBuilder('tarifas')
                ->where('tarifas.anualtarifa=0')
               ->andWhere('tarifas.codproducto = '.$this->input->get("codigo").'')
                //->setParameter('codigo', $this->input->get("codigo"))
                //->setMaxResults(50)
                ->getQuery()
                ->getResult();
       // $tarifas = $this->em->getRepository('Entity\Tbltarifas')->find();
     
        $data = array();
        foreach ($tarifas as $tarifa) {
            $data[] = array(
                "codigo" => $tarifa->getCodproducto(),
                "dias" => $tarifa->getDiastarifa(),
                "monto" => $tarifa->getValortarifa()
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'producto' => $data)));
    }
}

/* Location: ./application/controllers/estimar.php */