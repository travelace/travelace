<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Ingresoproveedor extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
        $this->load->library('session');
    }

    public function ingresarProveedor() {

        $proveedor = new Entity\SocioNegocio();

        $estatus = $this->em->getRepository('Entity\Estatus')->findAll();
        foreach ($estatus as $estatu) {
            if (trim($this->input->post("estaus_doc")) == $estatu->getDescripcion()) {
                $esta = $estatu;
            }
        }

        $paises = $this->em->getRepository('Entity\Pais')->findAll();
        foreach ($paises as $pais) {
            if ($this->input->post("pais_proveedor") == utf8_encode($pais->getNombre())) {
                $pa = $pais;
            }
        }

        $grupos = $this->em->getRepository('Entity\Grupo')->findAll();
        foreach ($grupos as $grupo) {
            if (trim($this->input->post("grupo_proveedor")) == utf8_encode($grupo->getNombre())) {
                $gru = $grupo;
            }
        }

        $monedas = $this->em->getRepository('Entity\Moneda')->findAll();
        foreach ($monedas as $moneda) {
            if (trim($this->input->post("moneda_proveedor")) == utf8_encode($moneda->getNombre())) {
                $mon = $moneda;
            }
        }
        
        $tipoSocioNegocio = $this->em->getRepository('Entity\TipoSocioNegocio')->find(1);


        $proveedor->setEstatus($esta);
        $proveedor->setNombreExtranjero($this->input->post("nombre_extranjero"));
        $proveedor->setAlias($this->input->post("alias_proveedor"));
        $proveedor->setRif($this->input->post("rif_proveedor"));
        $proveedor->setIdfiscal($this->input->post("id_fiscal_unificado"));
        $proveedor->setWeb($this->input->post("sitio_web"));
        $proveedor->setGrupo($gru);
        $proveedor->setMoneda($mon);
        $proveedor->setPais($pa);
        $proveedor->setTipoSocioNegocio($tipoSocioNegocio);
        $proveedor->setNombre(trim($this->input->post("nombre_proveedor")));

        $this->em->persist($proveedor);
        $this->em->flush();

        $dato = $proveedor->getId();

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('success' => 'true', 'dato' => $dato)));
    }

    public function modificarProveedor() {

        $proveedor = $this->em->getRepository('Entity\SocioNegocio')->find($this->input->post("pro"));
        $estatus = $this->em->getRepository('Entity\Estatus')->findAll();
        foreach ($estatus as $estatu) {
            if (trim($this->input->post("estaus_doc")) == $estatu->getDescripcion()) {
                $esta = $estatu;
            }
        }

        $paises = $this->em->getRepository('Entity\Pais')->findAll();
        foreach ($paises as $pais) {
            if ($this->input->post("pais_proveedor") == utf8_encode($pais->getNombre())) {
                $pa = $pais;
            }
        }

        $grupos = $this->em->getRepository('Entity\Grupo')->findAll();
        foreach ($grupos as $grupo) {
            if (trim($this->input->post("grupo_proveedor")) == utf8_encode($grupo->getNombre())) {
                $gru = $grupo;
            }
        }

        $monedas = $this->em->getRepository('Entity\Moneda')->findAll();
        foreach ($monedas as $moneda) {
            if (trim($this->input->post("moneda_proveedor")) == utf8_encode($moneda->getNombre())) {
                $mon = $moneda;
            }
        }
        
      
        $proveedor->setEstatus($esta);
        $proveedor->setNombreExtranjero($this->input->post("nombre_extranjero"));
        $proveedor->setAlias($this->input->post("alias_proveedor"));
        $proveedor->setRif($this->input->post("rif_proveedor"));
        $proveedor->setIdfiscal($this->input->post("id_fiscal_unificado"));
        $proveedor->setWeb($this->input->post("sitio_web"));
        $proveedor->setGrupo($gru);
        $proveedor->setMoneda($mon);
        $proveedor->setPais($pa);
        $proveedor->setNombre(trim($this->input->post("nombre_proveedor")));

        $this->em->persist($proveedor);
        $this->em->flush();

        $dato = $proveedor->getId();

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('success' => 'true', 'dato' => $dato)));
    }

    public function ingresarDatosContacto() {

        $datosContactos = new Entity\DatosContacto();

        $proveedores = $this->em->getRepository('Entity\SocioNegocio')->findAll();
        foreach ($proveedores as $proveedor) {
            if (trim($this->input->post("proveedor_id")) == $proveedor->getId()) {
                $pro = $proveedor;
            }
        }

        $paises = $this->em->getRepository('Entity\Pais')->findAll();
        foreach ($paises as $pais) {
            if ($this->input->post("pais") == utf8_encode($pais->getNombre())) {
                $pa = $pais;
            }
        }

        $estados = $this->em->getRepository('Entity\Estado')->findAll();
        foreach ($estados as $estado) {
            if ($this->input->post("estado") == utf8_encode($estado->getNombre())) {
                $esta = $estado;
            }
        }

        $fecha_nacimiento = $this->input->post("fecha_nacimiento");

        $datosContactos->setProveedor($pro);
        $datosContactos->setNombre($this->input->post("nombre"));
        $datosContactos->setSegundoNombre($this->input->post("segundo_nombre"));
        $datosContactos->setApellido($this->input->post("apellido"));
        $datosContactos->setTitulo($this->input->post("titulo"));
        $datosContactos->setPosicion($this->input->post("posicion"));
        $datosContactos->setDireccion($this->input->post("direccion"));
        $datosContactos->setTelefono1($this->input->post("telefono1"));
        $datosContactos->setTelefono2($this->input->post("telefono2"));
        $datosContactos->setTelefonoMovil($this->input->post("telefono_movil"));
        $datosContactos->setFax($this->input->post("fax"));
        $datosContactos->setEmail($this->input->post("email"));
        $datosContactos->setPager($this->input->post("pager"));
        $datosContactos->setObservacion1($this->input->post("observacion1"));
        $datosContactos->setObservacion2($this->input->post("observacion2"));
        $datosContactos->setClave($this->input->post("clave"));
        $datosContactos->setFechaNacimiento(new \DateTime($fecha_nacimiento));
        $datosContactos->setPais($pa);
        $datosContactos->setEstado($esta);
        $datosContactos->setProfesion($this->input->post("profesion"));
        $datosContactos->setSexo($this->input->post("sexos"));
        $datosContactos->setPrincipal(0);

        $this->em->persist($datosContactos);
        $this->em->flush();
        ////////////// aqui culmina el insert del nuevo elemento y comienza la carga de los datos en la vista
        // $dato = $datosContactos->getProveedor();
        // $this->cargadatoscontacto($dato);
    }
    
    
       public function modificarDatosContacto() {

        $datosContactos = $this->em->getRepository('Entity\DatosContacto')->find($this->input->post("id_contacto"));

        $paises = $this->em->getRepository('Entity\Pais')->findAll();
        foreach ($paises as $pais) {
            if ($this->input->post("pais") == utf8_encode($pais->getNombre())) {
                $pa = $pais;
            }
        }

        $estados = $this->em->getRepository('Entity\Estado')->findAll();
        foreach ($estados as $estado) {
            if ($this->input->post("estado") == utf8_encode($estado->getNombre())) {
                $esta = $estado;
            }
        }

        $fecha_nacimiento = $this->input->post("fecha_nacimiento");

      
        $datosContactos->setNombre($this->input->post("nombre"));
        $datosContactos->setSegundoNombre($this->input->post("segundo_nombre"));
        $datosContactos->setApellido($this->input->post("apellido"));
        $datosContactos->setTitulo($this->input->post("titulo"));
        $datosContactos->setPosicion($this->input->post("posicion"));
        $datosContactos->setDireccion($this->input->post("direccion"));
        $datosContactos->setTelefono1($this->input->post("telefono1"));
        $datosContactos->setTelefono2($this->input->post("telefono2"));
        $datosContactos->setTelefonoMovil($this->input->post("telefono_movil"));
        $datosContactos->setFax($this->input->post("fax"));
        $datosContactos->setEmail($this->input->post("email"));
        $datosContactos->setPager($this->input->post("pager"));
        $datosContactos->setObservacion1($this->input->post("observacion1"));
        $datosContactos->setObservacion2($this->input->post("observacion2"));
        $datosContactos->setClave($this->input->post("clave"));
        $datosContactos->setFechaNacimiento(new \DateTime($fecha_nacimiento));
        $datosContactos->setPais($pa);
        $datosContactos->setEstado($esta);
        $datosContactos->setProfesion($this->input->post("profesion"));
        $datosContactos->setSexo($this->input->post("sexos"));

        $this->em->persist($datosContactos);
        $this->em->flush();
        ////////////// aqui culmina el insert del nuevo elemento y comienza la carga de los datos en la vista
        // $dato = $datosContactos->getProveedor();
        // $this->cargadatoscontacto($dato);
    }

    public function buscarTipoDatoContacto() {

        $tipoContactos = $this->em->getRepository('Entity\TipoDatosContacto')->findAll();
        $data = array();
        foreach ($tipoContactos as $tipoContactos) {
            $data[] = array(
                "id" => $tipoContactos->getId(),
                "nombre" => utf8_encode($tipoContactos->getNombre())
            );
        }
        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'tipoContacto' => $data)));
    }

    public function ingresarDireccion() {
        ////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////
        if ($this->input->get("tipoTransaccion") == 'nuevoFalso') {

            $direcciones = $this->em->getRepository('Entity\Direccion')->findByProveedor($this->input->get("proveedor_id"));
            $data = array();
            foreach ($direcciones as $direccion) {
                $pais = $this->em->getRepository('Entity\Pais')->find($direccion->getPais());
                $estado = $this->em->getRepository('Entity\Estado')->find($direccion->getPais());
                $data[] = array(
                    "id" => $direccion->getId(),
                    "proveedor_id" => $direccion->getProveedor(),
                    "linea1" => utf8_encode($direccion->getLinea1()),
                    "linea2" => utf8_encode($direccion->getLinea2()),
                    "ciudad" => utf8_encode($direccion->getCiudad()),
                    "municipio" => utf8_encode($direccion->getMunicipio()),
                    "impuesto" => utf8_encode($direccion->getImpuesto()),
                    "observacion" => utf8_encode($direccion->getObservacion()),
                    "pais" => utf8_encode($pais->getNombre()),
                    "pais_id" => utf8_encode($pais->getId()),
                    "estado" => utf8_encode($estado->getNombre())
                );
            }

            $data[] = array(
                "id" => 0,
                "proveedor_id" => $this->input->get("proveedor_id"),
                "linea1" => "",
                "linea2" => "",
                "ciudad" => "",
                "municipio" => "",
                "impuesto" => "",
                "observacion" => "",
                "pais" => "",
                "pais_id" => "",
                "estado" => ""
            );

            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => count($data), 'datoDireccion' => $data)));
        }
        //////////////////////////////////////////////////nueva direccion
        if ($this->input->get("tipoTransaccion") == 'nuevo') {

            $datosDireccion = new Entity\Direccion();

            $proveedores = $this->em->getRepository('Entity\SocioNegocio')->findAll();
            foreach ($proveedores as $proveedor) {
                if (trim($this->input->get("proveedor_id")) == $proveedor->getId()) {
                    $pro = $proveedor;
                }
            }

            $paises = $this->em->getRepository('Entity\Pais')->findAll();
            foreach ($paises as $pais) {
                if ($this->input->get("pais") == utf8_encode($pais->getNombre())) {
                    $pa = $pais;
                }
            }

            $estados = $this->em->getRepository('Entity\Estado')->findAll();
            foreach ($estados as $estado) {
                if ($this->input->get("estado") == utf8_encode($estado->getNombre())) {
                    $esta = $estado;
                }
            }

            $datosDireccion->setLinea1($this->input->get("linea1"));
            $datosDireccion->setLinea2($this->input->get("linea2"));
            $datosDireccion->setProveedor($pro);
            $datosDireccion->setPais($pa);
            $datosDireccion->setEstado($esta);
            $datosDireccion->setMunicipio($this->input->get("municipio"));
            $datosDireccion->setCiudad($this->input->get("ciudad"));
            $datosDireccion->setImpuesto($this->input->get("impuesto"));
            $datosDireccion->setObservacion($this->input->get("observacion"));

            $this->em->persist($datosDireccion);
            $this->em->flush();
            $dato = $datosDireccion->getProveedor();
            $this->cargadireccion($dato);
        }
        ///////////////////////////////////fin nuevo dato
        //////////////////////////////// update dato
        if ($this->input->get("tipoTransaccion") == 'editar') {

            $datosDireccion = $this->em->getRepository('Entity\Direccion')->find($this->input->get("id"));

            $paises = $this->em->getRepository('Entity\Pais')->findAll();
            foreach ($paises as $pais) {
                if ($this->input->get("pais") == utf8_encode($pais->getNombre())) {
                    $pa = $pais;
                }
            }

            $estados = $this->em->getRepository('Entity\Estado')->findAll();
            foreach ($estados as $estado) {
                if ($this->input->get("estado") == utf8_encode($estado->getNombre())) {
                    $esta = $estado;
                }
            }

            $datosDireccion->setLinea1($this->input->get("linea1"));
            $datosDireccion->setLinea2($this->input->get("linea2"));
            $datosDireccion->setPais($pa);
            $datosDireccion->setEstado($esta);
            $datosDireccion->setMunicipio($this->input->get("municipio"));
            $datosDireccion->setCiudad($this->input->get("ciudad"));
            $datosDireccion->setImpuesto($this->input->get("impuesto"));
            $datosDireccion->setObservacion($this->input->get("observacion"));

            $this->em->persist($datosDireccion);
            $this->em->flush();
            $dato = $datosDireccion->getProveedor();
            $this->cargadireccion($dato);
        }
        //////////////////////////////// fin del update
        //////////////////////////////////eliminar
        if ($this->input->get("tipoTransaccion") == 'eliminar') {

            $objetoseleccionado = $this->input->get("objetoseleciondo");
            $direcciones = $this->em->getRepository('Entity\Direccion')->find($objetoseleccionado);

            $this->em->remove($direcciones);
            $this->em->flush();
            $dato = $direcciones->getProveedor();
            $this->cargadireccion($dato);
        }
        ////////////////////////////////////////fin eliminar
        /////////////////////////////cargar data
        if ($this->input->get("tipoTransaccion") == 'cargar') {

            $dato = $this->input->get("id");
            $this->cargadireccion($dato);
        }
    }

    public function ingresarProveedorHasFreight() {
        //////////////////////////////////////////////////nuevo ProveedorHasFreight
        if ($this->input->get("tipoTransaccion") == 'nuevo') {

            $datosProveedorHasFreight = new Entity\ProveedorHasFreight();

            $tipoFreight = $this->em->getRepository('Entity\Freight')->findAll();
            foreach ($tipoFreight as $Freight) {
                if (trim($this->input->get("freight")) == $Freight->getDescripcion()) {
                    $Fre = $Freight;
                }
            }

            $proveedores = $this->em->getRepository('Entity\SocioNegocio')->findAll();
            foreach ($proveedores as $proveedor) {
                if (trim($this->input->get("proveedor_id")) == $proveedor->getId()) {
                    $pro = $proveedor;
                }
            }

            $estimaciones = $this->em->getRepository('Entity\Estimacion')->findAll();
            foreach ($estimaciones as $estimacion) {
                if ($this->input->get("estimacion_id") == $estimacion->getId()) {
                    $estima = $estimacion;
                }
            }

            $datosProveedorHasFreight->setQtycbm(trim($this->input->get("qtycbm")));
            $datosProveedorHasFreight->setCosto(trim($this->input->get("costo")));
            $datosProveedorHasFreight->setProveedor($pro);
            $datosProveedorHasFreight->setFreight($Fre);
            $datosProveedorHasFreight->setEstimacion($estima);

            $this->em->persist($datosProveedorHasFreight);
            $this->em->flush();
            $dato = $datosProveedorHasFreight->getProveedor()->getId();
            $estimacion = $datosProveedorHasFreight->getEstimacion()->getId();
            $limit = $this->input->get("limit");
            $start = $this->input->get("start");
            $this->cargaProveedorHasFreight($dato, $estimacion, $start, $limit);
        }
        ///////////////////////////////////fin nuevo dato
        // ////////////////////////////////////////////nuevo guardado
        if ($this->input->get("tipoTransaccion") == 'nuevoFalso') {

            $limit = $this->input->get("limit");
            $start = $this->input->get("start");
            $estimaciones = $this->input->get("estimacion_id");
            $dato = $this->input->get("proveedor_id");

            $query = $this->em->createQuery('SELECT COUNT(p.id) FROM Entity\ProveedorHasFreight p WHERE p.proveedor=' . $dato . ' AND p.estimacion=' . $estimaciones . ' ');
            $totalresult = $query->getSingleScalarResult();

            $ProveedorHasFreight = $this->em->getRepository('Entity\ProveedorHasFreight')->findBy(array("proveedor" => $dato, "estimacion" => $estimaciones), array(), $limit, $start);
            $data = array();
            foreach ($ProveedorHasFreight as $ProveedorFreight) {
                $tiposFreight = $this->em->getRepository('Entity\Freight')->find($ProveedorFreight->getFreight());
                $proveedor = $this->em->getRepository('Entity\SocioNegocio')->find($ProveedorFreight->getProveedor());
                $pro = $proveedor->getId();
                $estimacion = $this->em->getRepository('Entity\Estimacion')->find($ProveedorFreight->getEstimacion());
                $estima = $estimacion->getId();
                $total = $ProveedorFreight->getQtycbm() * $ProveedorFreight->getCosto();
                $data[] = array(
                    "id" => $ProveedorFreight->getId(),
                    "proveedor_id" => $proveedor->getId(),
                    "estimacion_id" => $estimacion->getId(),
                    "qtycbm" => $ProveedorFreight->getQtycbm(),
                    "costo" => $ProveedorFreight->getCosto(),
                    "total" => $total,
                    "freight" => $tiposFreight->getDescripcion()
                );
            }

            $data[] = array(
                "id" => 0,
                "proveedor_id" => $dato,
                "estimacion_id" => $estimaciones,
                "qtycbm" => 0,
                "costo" => 0,
                "total" => 0,
                "freight" => ''
            );

            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => $totalresult, 'proveedorHasFreight' => $data)));
        }
        ////////////////////////////////////////////
        ////////////////////////////////////////////
        //////////////////////////////// update dato
        if ($this->input->get("tipoTransaccion") == 'editar') {

            $ProveedorHasFreight = $this->em->getRepository('Entity\ProveedorHasFreight')->find($this->input->get("id"));

            $tipoFreight = $this->em->getRepository('Entity\Freight')->findAll();
            foreach ($tipoFreight as $Freight) {
                if ($this->input->get("freight") == $Freight->getDescripcion()) {
                    $Fre = $Freight;
                }
            }

            $ProveedorHasFreight->setQtycbm($this->input->get("qtycbm"));
            $ProveedorHasFreight->setCosto($this->input->get("costo"));
            $ProveedorHasFreight->setFreight($Fre);
            $this->em->persist($ProveedorHasFreight);
            $this->em->flush();
            $dato = $ProveedorHasFreight->getProveedor()->getId();
            $estimacion = $ProveedorHasFreight->getEstimacion()->getId();
            $limit = $this->input->get("limit");
            $start = $this->input->get("start");
            $this->cargaProveedorHasFreight($dato, $estimacion, $start, $limit);
        }
        //////////////////////////////// fin del update
        //////////////////////////////////eliminar
        //////////////////////////////////eliminar
        if ($this->input->get("tipoTransaccion") == 'eliminar') {

            $objetoseleccionado = $this->input->get("objetoseleciondo");
            $ProveedorHasFreight = $this->em->getRepository('Entity\ProveedorHasFreight')->find($objetoseleccionado);

            $this->em->remove($ProveedorHasFreight);
            $this->em->flush();
            $dato = $ProveedorHasFreight->getProveedor()->getId();
            $estimacion = $ProveedorHasFreight->getEstimacion()->getId();
            $limit = $this->input->get("limit");
            $start = $this->input->get("start");
            $this->cargaProveedorHasFreight($dato, $estimacion, $start, $limit);
        }

        /////////////////////////////cargar data
        if ($this->input->get("tipoTransaccion") == 'cargar') {

            $dato = $this->input->get("id");
            $estimacion_id = $this->input->get("estimacion_id");
            if ($estimacion_id == "nada" or $estimacion_id == "") {
                $query = $this->em->createQuery('SELECT IDENTITY(p.estimacion) FROM Entity\ProveedorHasFreight p WHERE p.proveedor=' . $dato . ' ORDER BY p.id DESC');
                $estimacion_id = $query->setMaxResults(1)->getSingleScalarResult();
            }
            $limit = $this->input->get("limit");
            $start = $this->input->get("start");


            $this->cargaProveedorHasFreight($dato, $estimacion_id, $start, $limit);
        }
    }

    public function buscarTipoDireccion() {

        $tipoDirecciones = $this->em->getRepository('Entity\TipoDireccion')->findAll();
        $data = array();
        foreach ($tipoDirecciones as $tipoDireccion) {
            $data[] = array(
                "id" => $tipoDireccion->getId(),
                "nombre" => utf8_encode($tipoDireccion->getNombre())
            );
        }
        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'tipoDireccion' => $data)));
    }

    public function buscarFreight() {

        $tipoFreight = $this->em->getRepository('Entity\Freight')->findAll();
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

    public function cargadireccion($dato) {

        $direcciones = $this->em->getRepository('Entity\Direccion')->findByProveedor($dato);
        $data = array();
        foreach ($direcciones as $direccion) {
            $pais = $this->em->getRepository('Entity\Pais')->find($direccion->getPais());
            $estado = $this->em->getRepository('Entity\Estado')->find($direccion->getPais());
            $data[] = array(
                "id" => $direccion->getId(),
                "proveedor_id" => $direccion->getProveedor(),
                "linea1" => utf8_encode($direccion->getLinea1()),
                "linea2" => utf8_encode($direccion->getLinea2()),
                "ciudad" => utf8_encode($direccion->getCiudad()),
                "municipio" => utf8_encode($direccion->getMunicipio()),
                "impuesto" => utf8_encode($direccion->getImpuesto()),
                "observacion" => utf8_encode($direccion->getObservacion()),
                "pais" => utf8_encode($pais->getNombre()),
                "estado" => utf8_encode($estado->getNombre())
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'datoDireccion' => $data)));
    }

    public function cargadatoscontacto() {
        if ($this->input->get("tipoTransaccion") == 'cargar') {
            $dato = $this->input->get("id");
            $Contactos = $this->em->getRepository('Entity\DatosContacto')->findByProveedor($dato);
            $data = array();
            foreach ($Contactos as $Contacto) {
                $pais = $this->em->getRepository('Entity\Pais')->find($Contacto->getPais());
                $estado = $this->em->getRepository('Entity\Estado')->find($Contacto->getEstado());
                $data[] = array(
                    "id" => $Contacto->getId(),
                    "nombre" => utf8_encode($Contacto->getNombre()),
                    "segundo_nombre" => utf8_encode($Contacto->getSegundoNombre()),
                    "apellido" => utf8_encode($Contacto->getApellido()),
                    "titulo" => utf8_encode($Contacto->getTitulo()),
                    "posicion" => utf8_encode($Contacto->getPosicion()),
                    "direccion" => utf8_encode($Contacto->getDireccion()),
                    "telefono1" => utf8_encode($Contacto->getTelefono1()),
                    "telefono2" => utf8_encode($Contacto->getTelefono2()),
                    "telefono_movil" => utf8_encode($Contacto->getTelefonoMovil()),
                    "email" => utf8_encode($Contacto->getEmail()),
                    "fax" => utf8_encode($Contacto->getFax()),
                    "pager" => utf8_encode($Contacto->getPager()),
                    "observacion1" => utf8_encode($Contacto->getObservacion1()),
                    "observacion2" => utf8_encode($Contacto->getObservacion2()),
                    "clave" => utf8_encode($Contacto->getClave()),
                    "pais_id" => utf8_encode($pais->getId()),
                    "estado_id" => utf8_encode($estado->getId()),
                    "pais" => utf8_encode($pais->getNombre()),
                    "estado" => utf8_encode($estado->getNombre()),
                    "fecha_nacimiento" => $Contacto->getFechaNacimiento()->format('d-m-Y'),
                    "profesion" => utf8_encode($Contacto->getProfesion()),
                    "sexo" => utf8_encode($Contacto->getSexo()),
                    "principal" => utf8_encode($Contacto->getPrincipal()),
                );
            }

            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => count($data), 'datoContacto' => $data)));
        }

        if ($this->input->get("tipoTransaccion") == 'eliminar') {

            $objetoseleccionado = $this->input->get("objetoseleciondo");
            $DatosContacto = $this->em->getRepository('Entity\DatosContacto')->find($objetoseleccionado);

            $this->em->remove($DatosContacto);
            $this->em->flush();
            $dato = $DatosContacto->getProveedor()->getId();

            $Contactos = $this->em->getRepository('Entity\DatosContacto')->findByProveedor($dato);
            $data = array();
            foreach ($Contactos as $Contacto) {
                $pais = $this->em->getRepository('Entity\Pais')->find($Contacto->getPais());
                $estado = $this->em->getRepository('Entity\Estado')->find($Contacto->getEstado());
                $data[] = array(
                    "id" => $Contacto->getId(),
                    "nombre" => utf8_encode($Contacto->getNombre()),
                    "segundo_nombre" => utf8_encode($Contacto->getSegundoNombre()),
                    "apellido" => utf8_encode($Contacto->getApellido()),
                    "titulo" => utf8_encode($Contacto->getTitulo()),
                    "posicion" => utf8_encode($Contacto->getPosicion()),
                    "direccion" => utf8_encode($Contacto->getDireccion()),
                    "telefono1" => utf8_encode($Contacto->getTelefono1()),
                    "telefono2" => utf8_encode($Contacto->getTelefono2()),
                    "telefono_movil" => utf8_encode($Contacto->getTelefonoMovil()),
                    "email" => utf8_encode($Contacto->getEmail()),
                    "fax" => utf8_encode($Contacto->getFax()),
                    "pager" => utf8_encode($Contacto->getPager()),
                    "observacion1" => utf8_encode($Contacto->getObservacion1()),
                    "observacion2" => utf8_encode($Contacto->getObservacion2()),
                    "clave" => utf8_encode($Contacto->getClave()),
                    "pais_id" => utf8_encode($pais->getId()),
                    "estado_id" => utf8_encode($estado->getId()),
                    "pais" => utf8_encode($pais->getNombre()),
                    "estado" => utf8_encode($estado->getNombre()),
                    "fecha_nacimiento" => $Contacto->getFechaNacimiento()->format('d-m-Y'),
                    "profesion" => utf8_encode($Contacto->getProfesion()),
                    "sexo" => utf8_encode($Contacto->getSexo()),
                    "principal" => utf8_encode($Contacto->getPrincipal()),
                );
            }

            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => count($data), 'datoContacto' => $data)));
        }
        
         if ($this->input->get("tipoTransaccion") == 'principal') {
               $objetoseleccionado = $this->input->get("objetoseleciondo");
            $DatosContacto = $this->em->getRepository('Entity\DatosContacto')->find($objetoseleccionado);

            $dato = $DatosContacto->getProveedor()->getId();
            
            $Contactos = $this->em->getRepository('Entity\DatosContacto')->findByProveedor($dato);
             foreach ($Contactos as $Contacto) {
                $Contacto->setPrincipal(0);
                  $this->em->persist($Contacto);
                 $this->em->flush();
            }
          
            
            $DatosContacto->setPrincipal(1);
            
            $this->em->persist($DatosContacto);
            $this->em->flush();
            $dato = $DatosContacto->getProveedor()->getId();
            
              $Contactos = $this->em->getRepository('Entity\DatosContacto')->findByProveedor($dato);
            $data = array();
            foreach ($Contactos as $Contacto) {
                $pais = $this->em->getRepository('Entity\Pais')->find($Contacto->getPais());
                $estado = $this->em->getRepository('Entity\Estado')->find($Contacto->getEstado());
                $fecha=$Contacto->getFechaNacimiento();
                
                        
                $data[] = array(
                    "id" => $Contacto->getId(),
                    "nombre" => utf8_encode($Contacto->getNombre()),
                    "segundo_nombre" => utf8_encode($Contacto->getSegundoNombre()),
                    "apellido" => utf8_encode($Contacto->getApellido()),
                    "titulo" => utf8_encode($Contacto->getTitulo()),
                    "posicion" => utf8_encode($Contacto->getPosicion()),
                    "direccion" => utf8_encode($Contacto->getDireccion()),
                    "telefono1" => utf8_encode($Contacto->getTelefono1()),
                    "telefono2" => utf8_encode($Contacto->getTelefono2()),
                    "telefono_movil" => utf8_encode($Contacto->getTelefonoMovil()),
                    "email" => utf8_encode($Contacto->getEmail()),
                    "fax" => utf8_encode($Contacto->getFax()),
                    "pager" => utf8_encode($Contacto->getPager()),
                    "observacion1" => utf8_encode($Contacto->getObservacion1()),
                    "observacion2" => utf8_encode($Contacto->getObservacion2()),
                    "clave" => utf8_encode($Contacto->getClave()),
                    "pais_id" => utf8_encode($pais->getId()),
                    "estado_id" => utf8_encode($estado->getId()),
                    "pais" => utf8_encode($pais->getNombre()),
                    "estado" => utf8_encode($estado->getNombre()),
                    "fecha_nacimiento" => $fecha->format('d-m-Y'),
                    "profesion" => utf8_encode($Contacto->getProfesion()),
                    "sexo" => utf8_encode($Contacto->getSexo()),
                    "principal" => utf8_encode($Contacto->getPrincipal()),
                );
            }

            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => count($data), 'datoContacto' => $data))); 
             
         }
        
    }

    public function cargaProveedorHasFreight($dato, $estimacion, $start, $limit) {


        $query = $this->em->createQuery('SELECT COUNT(p.id) FROM Entity\ProveedorHasFreight p WHERE p.proveedor=' . $dato . ' AND p.estimacion=' . $estimacion . ' ');
        $totalresult = $query->getSingleScalarResult();

        $ProveedorHasFreight = $this->em->getRepository('Entity\ProveedorHasFreight')->findBy(array("proveedor" => $dato, "estimacion" => $estimacion), array(), $limit, $start);
        $data = array();
        foreach ($ProveedorHasFreight as $ProveedorFreight) {
            $tiposFreight = $this->em->getRepository('Entity\Freight')->find($ProveedorFreight->getFreight());
            $proveedor = $this->em->getRepository('Entity\SocioNegocio')->find($ProveedorFreight->getProveedor());
            $estimacion = $this->em->getRepository('Entity\Estimacion')->find($ProveedorFreight->getEstimacion());
            $total = $ProveedorFreight->getQtycbm() * $ProveedorFreight->getCosto();
            $data[] = array(
                "id" => $ProveedorFreight->getId(),
                "proveedor_id" => $proveedor->getId(),
                "estimacion_id" => $estimacion->getId(),
                "qtycbm" => $ProveedorFreight->getQtycbm(),
                "costo" => $ProveedorFreight->getCosto(),
                "total" => $total,
                "freight" => $tiposFreight->getDescripcion()
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => $totalresult, 'proveedorHasFreight' => $data)));
    }

}
