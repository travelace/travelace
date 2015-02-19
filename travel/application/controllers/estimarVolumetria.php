<?php

/*
  -------------------------------------------
  Archivo creado por Charli Vivenes
  Mail: cvivenes@corpwimac.com
  -------------------------------------------
  Framework Extjs 4.2.2
  -------------------------------------------
  Framework Codeigniter 2
  -------------------------------------------
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class EstimarVolumetria extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }

    public function volumetria() {
        switch ($this->input->get("tipoTransaccion")) {
            case 'nuevo':
                $datosVolumetria = new Entity\Volumetria();
                $producto = $this->em->getRepository('Entity\Producto')->findOneByDescripcion($this->input->get("producto"));
                $advalorem = $this->em->getRepository('Entity\Advalorem')->find($producto->getAdvalorem());
                $estimacion = $this->em->getRepository('Entity\Estimacion')->find($this->input->get("estimacion_id"));
            
                $datosVolumetria->setEstimacion($estimacion);
                $datosVolumetria->setProducto($producto);
                $datosVolumetria->setAltoPaleta($this->input->get("alto_paleta"));
                $datosVolumetria->setAnchoPaleta($this->input->get("ancho_paleta"));
                $datosVolumetria->setCajaPaleta($this->input->get("caja_paleta"));
                $datosVolumetria->setCatidadPaleta($this->input->get("catidad_paleta"));
                $datosVolumetria->setCostoUnidad($this->input->get("costo_unidad"));
                $datosVolumetria->setLargoPaleta($this->input->get("largo_paleta"));
                $datosVolumetria->setPesoPaleta($this->input->get("peso_paleta"));
                $datosVolumetria->setUnidadCaja($this->input->get("unidad_caja"));
                $datosVolumetria->setMargenGanancia($this->input->get("margen_ganancia"));
                $datosVolumetria->setTarifaDolar(0);
                $datosVolumetria->setSeguroPn(0);
                $datosVolumetria->setSeguro(0);
                $datosVolumetria->setAdv($advalorem->getPorcentaje());

                $this->em->persist($datosVolumetria);
                $this->em->flush();
                $dato = $datosVolumetria->getEstimacion();
                $this->cargaVolumetria($dato);
                break;
            case 'nuevoFalso':
                $volumetrias = $this->em->getRepository('Entity\Volumetria')->findByEstimacion($this->input->get("estimacion_id"));
                $data = array();
                foreach ($volumetrias as $volumetria) {
                    $productos = $this->em->getRepository('Entity\Producto')->find($volumetria->getProducto());
                    $data[] = array(
                        "id" => $volumetria->getId(),
                        "alto_paleta" => $volumetria->getAltoPaleta(),
                        "ancho_paleta" => $volumetria->getAnchoPaleta(),
                        "caja_paleta" => $volumetria->getCajaPaleta(),
                        "catidad_paleta" => $volumetria->getCatidadPaleta(),
                        "costo_unidad" => $volumetria->getCostoUnidad(),
                        "largo_paleta" => $volumetria->getLargoPaleta(),
                        "peso_paleta" => $volumetria->getPesoPaleta(),
                        "unidad_caja" => $volumetria->getUnidadCaja(),
                        "producto" => $productos->getDescripcion(),
                        "codigo" => $productos->getCodigo(),
                        "margen_ganancia" => $volumetria->getMargenGanancia()
                    );
                }
                /*
                 * Crear una línea en blanco para mostrar en la grilla 
                 * ya que no se puede guardar en blanco en la BD.
                 */
          
                                
                $data[] = array(
                    "id" => 0,
                    "alto_paleta" => "1",
                    "ancho_paleta" => "1",
                    "caja_paleta" => "1",
                    "catidad_paleta" => "1",
                    "costo_unidad" => "0",
                    "largo_paleta" => "1",
                    "peso_paleta" => "1",
                    "unidad_caja" => "1",
                    "producto" => "",
                    "codigo" => "",
                    "margen_ganancia" => ""
               );
                $this->output
                        ->set_content_type('application/json')
                        ->set_output(json_encode(array('totalCount' => count($data), 'volumetria' => $data)));
                break;
            case 'editar':
                $datosVolumetria = $this->em->getRepository("Entity\Volumetria")->find($this->input->get("id"));
                $producto = $this->em->getRepository('Entity\Producto')->findOneByDescripcion($this->input->get("producto"));
                $datosVolumetria->setProducto($producto);
                $datosVolumetria->setAltoPaleta($this->input->get("alto_paleta"));
                $datosVolumetria->setAnchoPaleta($this->input->get("ancho_paleta"));
                $datosVolumetria->setCajaPaleta($this->input->get("caja_paleta"));
                $datosVolumetria->setCatidadPaleta($this->input->get("catidad_paleta"));
                $datosVolumetria->setCostoUnidad($this->input->get("costo_unidad"));
                $datosVolumetria->setLargoPaleta($this->input->get("largo_paleta"));
                $datosVolumetria->setPesoPaleta($this->input->get("peso_paleta"));
                $datosVolumetria->setUnidadCaja($this->input->get("unidad_caja"));
                $datosVolumetria->setMargenGanancia($this->input->get("margen_ganancia"));

                $this->em->persist($datosVolumetria);
                $this->em->flush();
                
                $dato = $datosVolumetria->getEstimacion();
                $this->cargaVolumetria($dato);
                break;
            case 'eliminar':
                $objetoseleccionado = $this->input->get("objetoseleciondo");
                $datosVolumetria = $this->em->getRepository('Entity\Volumetria')->find($objetoseleccionado);

                $this->em->remove($datosVolumetria);
                $this->em->flush();
                $dato = $datosVolumetria->getEstimacion();
                $this->cargaVolumetria($dato);
                break;
            case 'cargar':
                $this->cargaVolumetria($this->input->get("estimacion_id"));
                break;
        }
    }

    public function cargaVolumetria($dato) {
        $volumetrias = $this->em->getRepository('Entity\Volumetria')->findByEstimacion($dato);
        $data = array();
        foreach ($volumetrias as $volumetria) {
            $producto = $this->em->getRepository('Entity\Producto')->find($volumetria->getProducto());
            $data[] = array(
                "id" => $volumetria->getId(),
                "alto_paleta" => $volumetria->getAltoPaleta(),
                "ancho_paleta" => $volumetria->getAnchoPaleta(),
                "caja_paleta" => $volumetria->getCajaPaleta(),
                "catidad_paleta" => $volumetria->getCatidadPaleta(),
                "costo_unidad" => $volumetria->getCostoUnidad(),
                "largo_paleta" => $volumetria->getLargoPaleta(),
                "peso_paleta" => $volumetria->getPesoPaleta(),
                "unidad_caja" => $volumetria->getUnidadCaja(),
                "producto" => $producto->getDescripcion(),
                "codigo" => $producto->getCodigo(),
                "margen_ganancia" => $volumetria->getMargenGanancia(),
                "tarifa_dolar" => $volumetria->getTarifaDolar()
            );
        }
        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'volumetria' => $data)));
    }

    public function buscarProducto() {

        $productos = $this->em->getRepository('Entity\Producto')->findAll();
        $data = array();
        foreach ($productos as $producto) {
            $data[] = array(
                "id" => $producto->getId(),
                "descripcion" => utf8_encode($producto->getDescripcion()),
                "codigo" => utf8_encode($producto->getCodigo())
            );
        }
        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'producto' => $data)));
    }

}
