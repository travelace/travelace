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
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class DatosProducto extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
        $this->load->library('session');
    }

    public function buscarProducto() {
        ////////////////////////////////////////////
        ///////////////////////////////////////////editar
        if ($this->input->get("tipoTransaccion") == 'editar') {

            $datosVolumetria = $this->em->getRepository("Entity\Volumetria")->find($this->input->get("id"));



            $datosVolumetria->setCostoUnidad($this->input->get("costo_unidad"));
            $datosVolumetria->setMargenGanancia($this->input->get("margen_ganancia"));
            $datosVolumetria->setTarifaDolar($this->input->get("tarifa_dolar"));
            $datosVolumetria->setSeguro($this->input->get("seguro"));



            $this->em->persist($datosVolumetria);
            $this->em->flush();
            $dato = $datosVolumetria->getEstimacion()->getId();

            $query = $this->em->createQuery('SELECT SUM(v.catidadPaleta*v.cajaPaleta*v.unidadCaja) AS total FROM Entity\Volumetria v WHERE v.estimacion =' . $dato);
            $total = $query->getSingleScalarResult();
            $datosEstimacion = $this->em->getRepository("Entity\Estimacion")->find($dato);

            $dolarFreight = $datosEstimacion->getDolarfreight();
            $freight = $this->input->get("freight") * $dolarFreight / $total;
            $custom = $this->input->get("custom") / $total;

            $this->cargaDatosProducto($dato, $freight, $custom);
        }
        ///////////////////////////////////////////

        if ($this->input->get("tipoTransaccion") == 'cargar') {

            $query = $this->em->createQuery('SELECT SUM(v.catidadPaleta*v.cajaPaleta*v.unidadCaja) AS total FROM Entity\Volumetria v WHERE v.estimacion =' . $this->input->get("estimacion_id"));
            $total = $query->getSingleScalarResult();

            $dato = $this->input->get("estimacion_id");


            $this->input->get("freight");
            $freight = round($this->input->get("freight"), 2); //*$dolarFreight;

            $freight = round($freight, 2);

            //$freight=$freight /$total;
            //$freight= round($freight, 2);  
            $custom = $this->input->get("custom");
            //$freight= round($freight, 2);

            $this->cargaDatosProducto($dato, $freight, $custom);
        }
    }

    public function cargaDatosProducto($dato, $freight, $custom) {

        $datosEstimacion = $this->em->getRepository("Entity\Estimacion")->find($dato);
        $dolarFreight = $datosEstimacion->getDolarfreight();
        $queryDolarCif = $this->em->createQuery('SELECT e.dolarCif FROM Entity\Estimacion e WHERE e.id =' . $dato);
        $dolarCif = $queryDolarCif->getSingleScalarResult();
        $queryDivVolumietric = $this->em->createQuery('SELECT e.divVolumetric FROM Entity\Estimacion e WHERE e.id =' . $dato);
        $divVolumietric = $queryDivVolumietric->getSingleScalarResult();

        $IVA = $this->em->getRepository('Entity\Tasa')->find(2);
        $IVA = $IVA->getPorcentaje() / 100;

        $query = $this->em->createQuery('SELECT ((v.largoPaleta*v.anchoPaleta*v.altoPaleta/ 1000000)*v.catidadPaleta) AS valor, v.pesoPaleta * v.catidadPaleta AS peso FROM Entity\Volumetria v WHERE v.estimacion =' . $dato);
        $query = $query->getResult();
        $totalPeso = 0;
        $totalCBM = 0;
        $totalVolumetria = 0;
        foreach ($query as $resultado) {

            $totalCBM = $totalCBM + round($resultado["valor"], 2);
            $totalPeso = $totalPeso + round($resultado["peso"], 2);
            $totalVolumetria = $totalVolumetria + (round($resultado["valor"], 2) * 1000000 / $divVolumietric);
        }
        $mayorPeso = 0;
        if ($totalPeso > $totalVolumetria) {
            $mayorPeso = 1;
        }

        $query = $this->em->createQuery('SELECT SUM(v.catidadPaleta*v.cajaPaleta*v.unidadCaja) AS total FROM Entity\Volumetria v WHERE v.estimacion =' . $dato);
        $totalproddeddd = $query->getSingleScalarResult();
        ////total cif
        $totalcif = 0;
        $Volumetrias = $this->em->getRepository('Entity\Volumetria')->findByEstimacion($dato);
        $data = array();
        foreach ($Volumetrias as $Volumetria) {
            $costo_unitario = $Volumetria->getCostoUnidad();
            $seguro = $Volumetria->getSeguro();
            $seguroPn = $Volumetria->getSeguroPn();
            $totalProductos = $Volumetria->getCatidadPaleta() * $Volumetria->getCajaPaleta() * $Volumetria->getUnidadCaja();
            $preciototal = $totalProductos * $costo_unitario;

            if ($seguroPn == 0) {
                $formula = $preciototal + 0;
            } else if ($seguroPn == 1) {
                $formula = $preciototal * (1 + $seguro / 100 );
            } else {
                $formula = $preciototal + $seguro;
            }
            if ($mayorPeso == 0) {
                $CBM2 = ($Volumetria->getLargoPaleta() * $Volumetria->getAnchoPaleta() * $Volumetria->getAltoPaleta() / 1000000) * $Volumetria->getCatidadPaleta();
                $CBM2 = round($CBM2, 2);
                $div2 = $CBM2 * 100 / $totalCBM;
            } else {
                $Peso2 = ($Volumetria->getPesoPaleta() * $Volumetria->getCatidadPaleta());
                $peso2 = round($Peso2, 2);
                $div2 = $Peso2 * 100 / $totalPeso;
            }
            $cif = (($formula) + ($freight * $div2 / 100)) * $dolarCif;
            $cif = round($cif, 2);
            $totalcif = $totalcif + $cif;
        }
        ///////////////
        $Volumetrias = $this->em->getRepository('Entity\Volumetria')->findByEstimacion($dato);
        $data = array();
        foreach ($Volumetrias as $Volumetria) {

            if ($mayorPeso == 0) {
                $CBM = ($Volumetria->getLargoPaleta() * $Volumetria->getAnchoPaleta() * $Volumetria->getAltoPaleta() / 1000000) * $Volumetria->getCatidadPaleta();
                $CBM = round($CBM, 2);

                $freight2 = $freight * $CBM / $totalCBM;
                $freight2 = round($freight2, 2);
            }else{
                 $Peso = ($Volumetria->getPesoPaleta() * $Volumetria->getCatidadPaleta());
                 $peso = round($Peso, 2);
                 
                 $freight2 = $freight * $Peso / $totalPeso;
                 $freight2 = round($freight2, 2);
            }
            $freight2 = $freight2 * $dolarFreight;
            $freight2 = round($freight2, 2);
            $totalProductos = $Volumetria->getCatidadPaleta() * $Volumetria->getCajaPaleta() * $Volumetria->getUnidadCaja();
            $freight2 = $freight2 / $totalProductos;
            $freight2 = round($freight2, 2);
            //echo"//";

            $costo_unitario = $Volumetria->getCostoUnidad();
            $seguro = $Volumetria->getSeguro();
            $seguroPn = $Volumetria->getSeguroPn();
            $preciototal = $totalProductos * $costo_unitario;

            if ($seguroPn == 0) {
                $formula = $preciototal + 0;
            } else if ($seguroPn == 1) {
                $formula = $preciototal * (1 + $seguro / 100 );
            } else {
                $formula = $preciototal + $seguro;
            }
            if ($mayorPeso == 0) {
                $CBM2 = ($Volumetria->getLargoPaleta() * $Volumetria->getAnchoPaleta() * $Volumetria->getAltoPaleta() / 1000000) * $Volumetria->getCatidadPaleta();
                $CBM2 = round($CBM2, 2);
                $div2 = $CBM2 * 100 / $totalCBM;
            } else {
                $Peso2 = ($Volumetria->getPesoPaleta() * $Volumetria->getCatidadPaleta());
                $peso2 = round($Peso2, 2);
                $div2 = $Peso2 * 100 / $totalPeso;
            }
            $cif = (($formula) + ($freight * $div2 / 100)) * $dolarCif;
            $cif = round($cif, 2);
            $custom2=0;
            if ($custom!=0)
            {
            $custom2 = $custom * $cif / $totalcif;
            $custom2 = $custom2 / $totalProductos;
            //$custom= round($custom, 2);
            $custom2 = round($custom2, 2);
            }

            $Productos = $this->em->getRepository('Entity\Producto')->find($Volumetria->getProducto());
            $totalProductos = $Volumetria->getCatidadPaleta() * $Volumetria->getCajaPaleta() * $Volumetria->getUnidadCaja();
            $costo_unidad = $Volumetria->getCostoUnidad();
            $margen_ganancia = $Volumetria->getMargenGanancia();
            $tarifa_dolar = $Volumetria->getTarifaDolar();
            $costo_unidad_bs = $costo_unidad * $tarifa_dolar;
            $costo_unidad_bs = round($costo_unidad_bs, 2);
            $costo_unidad_bs_rubro = $costo_unidad_bs + $freight2 + $custom2;
            $costo_unidad_bs_total = $costo_unidad_bs_rubro * (1 + ($margen_ganancia / 100));
            $costo_unidad_bs_total = round($costo_unidad_bs_total, 2);
            $total_rubro = $costo_unidad_bs_rubro * $totalProductos;
            $total_rubro = round($total_rubro, 2);
            $total_sin_iva = $costo_unidad_bs_total * $totalProductos;
            $total_sin_iva = round($total_sin_iva, 2);
            $margen_absoluto = $total_sin_iva - $total_rubro;
            $margen_absoluto = round($margen_absoluto, 2);
            $ivaVolumetria = $total_sin_iva * $IVA;
            $ivaVolumetria = round($ivaVolumetria, 2);
            $total = $total_sin_iva + $ivaVolumetria;
            $total = round($total, 2);

            $data[] = array(
                "id" => $Volumetria->getId(),
                "producto" => $Productos->getDescripcion(),
                "codigo" => $Productos->getCodigo(),
                "costo_unidad" => $Volumetria->getCostoUnidad(),
                "margen_ganancia" => $Volumetria->getMargenGanancia(),
                "tarifa_dolar" => $Volumetria->getTarifaDolar(),
                "seguro" => $Volumetria->getSeguro(),
                "seguro_pn" => $Volumetria->getSeguroPn(),
                "costo_unidad_bs_rubro" => $costo_unidad_bs_rubro,
                "costo_unidad_bs_total" => $costo_unidad_bs_total,
                "total_rubro" => $total_rubro,
                "margen_absoluto" => $margen_absoluto,
                "total_sin_iva" => $total_sin_iva,
                "iva" => $ivaVolumetria,
                "total" => $total
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'producto' => $data)));
    }

    public function seguro($id, $valor) {


        $datosProductos = $this->em->getRepository('Entity\Volumetria')->findById($id);
        foreach ($datosProductos as $datosProducto) {
            $datosProducto->setSeguroPn($valor);
        }
        $this->em->persist($datosProducto);
        $this->em->flush();
    }

}

/* Location: ./application/controllers/estimar.php */