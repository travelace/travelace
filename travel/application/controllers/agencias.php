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
    
     public function agenciasCombo() {
        $agencias = $this->em->getRepository('Entity\Tblagencia')->createQueryBuilder('agencia')
                ->where('agencia.nombrecompleto like :nombreAgencia')
                ->andWhere('agencia.sucursal = 0')
                ->setParameter('nombreAgencia', "%".$this->input->get("agencia")."%")
                ->setMaxResults(50)
                ->getQuery()
                ->getResult();

        $data = array();
        foreach ($agencias as $agencia) {
            $data[] = array(
                
                "nombreAgencia" => utf8_encode($agencia->getNombrecompleto()),
                "id" => $agencia->getCodagencia(),
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'agencia' => $data)));
    
         
     }
     
      public function guardarAgencias() {
      
        $agencias = new Entity\Tblagencia();
        $agencias->setNombrecompleto($this->input->post("nombreAgencia"));
        $agencias->setLogin($this->input->post("loginOnline"));
        $agencias->setPassword($this->input->post("passwordOnline"));
        $agencias->setCodigosiebel($this->input->post("codigoSiebel"));
        $agencias->setGroupoagencia($this->input->post("grupoAgencia"));
        $agencias->setEstadoagencia($this->input->post("estadoAgencia"));
        $agencias->setCiudadagencia($this->input->post("ciudadAgencia"));
        $agencias->setObservaciones($this->input->post("observaciones"));
        $agencias->setUbicacionagencia($this->input->post("direccionAgencia"));
        $agencias->setTelefonoagencia($this->input->post("telefono1"));
        $agencias->setTelefonoagencia2($this->input->post("telefono2"));
        $agencias->setFax($this->input->post("fax"));
        $agencias->setRifagencia($this->input->post("rifAgencia"));
        $agencias->setEmailagencia($this->input->post("emailAgencia"));
        $agencias->setCorporativo($this->input->post("esCorporativoAgencia"));
        $agencias->setFreeagencia($this->input->post("freelanceAgencia"));
        $agencias->setCiafactAgcia($this->input->post("empresaFactura"));
        $agencias->setTipoFacturacion($this->input->post("facturacionAgencia"));
        $agencias->setCorporativoAgencia($this->input->post("corporativoAgencia"));
        $agencias->setPromotoragencia($this->input->post("promotorAgencia"));
        $agencias->setFechainicioagencia(new \DateTime("now"));
        $agencias->setUltimamodificacion(new \DateTime("now"));
        $agencias->setIsragencia(0);
        $agencias->setSucursal(0);
        $agencias->setSucursalagencia(0);
        $agencias->setUsuariomodificacion(1);
        $agencias->setEsagencia(1);
        $agencias->setNombreagencia("");
        $agencias->setContactoagencia($this->input->post("contactoAgencia"));
        $this->em->persist($agencias);
        $this->em->flush();
        
        
    }
    public function  cargarAgencias($agen){
     $agencias = $this->em->getRepository('Entity\Tblagencia')->find($agen);
     $data = array();
     $estados = $this->em->getRepository('Entity\Tblestados')->find($agencias->getEstadoagencia());
     $pais = $this->em->getRepository('Entity\Tblpais')->find($estados->getCodpais());
     
     $data[] = array(
       "id" => $agencias->getCodagencia(),
       "nombreAgencia" => $agencias->getNombrecompleto(),
       "login" => $agencias->getLogin(),
       "password" => $agencias->getPassword(),
       "codigoSiebel" => $agencias->getCodigosiebel(),
       "grupo" => $agencias->getGroupoagencia(),
       "paisId" => $estados->getCodpais(),
       "pais" =>  $pais->getNombrepais(),
       "estado" => $agencias->getEstadoagencia(),
       "cuidad" => $agencias->getCiudadagencia(),
       "observaciones" => $agencias->getObservaciones(),
       "ubicacion" => $agencias->getUbicacionagencia(),
       "telefono1" => $agencias->getTelefonoagencia(),
       "telefono2" => $agencias->getTelefonoagencia2(),
       "fax" => $agencias->getFax(),
       "rif" => $agencias->getRifagencia(),
       "email" => $agencias->getEmailagencia(),
       "corporativo" => $agencias->getCorporativo(),
       "free" => $agencias->getFreeagencia(),
       "facturacion" => $agencias->getCiafactAgcia(),
       "tipoFacturacion" => $agencias->getTipoFacturacion(),
       "agenciaCorporativo" => $agencias->getCorporativoAgencia(),
       "promotor" => $agencias->getPromotoragencia(),
       "fechaInicio" => $agencias->getFechainicioagencia(),
       "fechaUltima" => $agencias->getUltimamodificacion(),
       "isr" => $agencias->getIsragencia(),
       "sucursal" => $agencias->getSucursal(),
       "sucursalAgencia" => $agencias->getSucursalagencia(),
       "usuarioModificacion" => $agencias->getUsuariomodificacion(),
       "esagencia" => $agencias->getEsagencia(),
       "nombreAgenciaCorto" => $agencias->getNombreagencia(),
       "contactoAgencia" => $agencias->getContactoagencia(),
      );
        
         $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'agencia' => $data)));
        
    }
        

}

/* Location: ./application/controllers/estimar.php */