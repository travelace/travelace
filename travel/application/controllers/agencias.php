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

class Agencias extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }

    public function agenciasGrilla() {

        if ($this->input->get("tipoTransaccion") == 'busqueda') {
            $busqueda = $this->input->get("busqueda");
            $this->cargaAgenciasGrilla($busqueda);
        }
    }

    public function cargaAgenciasGrilla($busqueda) {
        $agencias = $this->em->getRepository('Entity\Tblagencia')->createQueryBuilder('agencia')
                ->where('agencia.nombrecompleto like :nombreAgencia')
                ->andWhere('agencia.sucursal = 0')
                ->setParameter('nombreAgencia', "%" . $busqueda . "%")
                ->getQuery()
                ->getResult();

        $data = array();
        foreach ($agencias as $agencia) {
            $data[] = array(
                "id" => $agencia->getCodagencia(),
                "nombreAgencia" => utf8_encode($agencia->getNombrecompleto()),
                "grupoAgencia" => $agencia->getGroupoagencia(),
                "telefono" => $agencia->getTelefonoagencia(),
                "rif" => $agencia->getRifagencia(),
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'agencia' => $data)));
    }

    public function sucursalGrilla() {

        if ($this->input->get("tipoTransaccion") == 'cargar') {
            $agencia = $this->input->get("agencia");
            $this->cargaSucursalGrilla($agencia);
        }
    }

    public function cargaSucursalGrilla($agencia) {
        $agencias = $this->em->getRepository('Entity\Tblagencia')->createQueryBuilder('agencia')
                ->where('agencia.sucursalagencia like :codAgencia')
                ->andWhere('agencia.sucursal = 1')
                ->setParameter('codAgencia', $agencia)
                ->getQuery()
                ->getResult();

        $data = array();
        foreach ($agencias as $agencia) {
            
            $estados = $this->em->getRepository('Entity\Tblestados')->find($agencia->getEstadoagencia());
            $pais = $this->em->getRepository('Entity\Tblpais')->find($estados->getCodpais());
            $ciudad = $this->em->getRepository('Entity\Tblciudades')->find($agencia->getCiudadagencia());

            $data[] = array(
                "id" => $agencia->getCodagencia(),
                "direccion" => utf8_encode($agencia->getUbicacionagencia()),
                "nombre" => $agencia->getNombreagencia(),
                "telefono" => $agencia->getTelefonoagencia(),
                "correo" => $agencia->getEmailagencia(),
                "paisId" => $estados->getCodpais(),
                "pais" =>  $pais->getNombrepais(),
                "estado" => $estados->getNombreestado(),
                "estadoId" => $agencia->getEstadoagencia(),
                "ciudadId" => $agencia->getCiudadagencia(),
                "ciudad" => $ciudad->getNombreciudad(),
                "login" => $agencia->getLogin(),
                "Password" => $agencia->getPassword(),
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'sucursal' => $data)));
    }

}

/* Location: ./application/controllers/estimar.php */