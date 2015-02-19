<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Ingresocliente extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
        $this->load->library('session');
    }

    public function ingresarCliente() {

        $cliente = new Entity\SocioNegocio();

        $estatus = $this->em->getRepository('Entity\Estatus')->findAll();
        foreach ($estatus as $estatu) {
            if (trim($this->input->post("estaus_doc")) == $estatu->getDescripcion()) {
                $esta = $estatu;
            }
        }

        $paises = $this->em->getRepository('Entity\Pais')->findAll();
        foreach ($paises as $pais) {
            if ($this->input->post("pais_cliente") == utf8_encode($pais->getNombre())) {
                $pa = $pais;
            }
        }

        $grupos = $this->em->getRepository('Entity\Grupo')->findAll();
        foreach ($grupos as $grupo) {
            if (trim($this->input->post("grupo_cliente")) == utf8_encode($grupo->getNombre())) {
                $gru = $grupo;
            }
        }

        $monedas = $this->em->getRepository('Entity\Moneda')->findAll();
        foreach ($monedas as $moneda) {
            if (trim($this->input->post("moneda_cliente")) == utf8_encode($moneda->getNombre())) {
                $mon = $moneda;
            }
        }
        
        $tipoSocioNegocio = $this->em->getRepository('Entity\TipoSocioNegocio')->find(2);


        $cliente->setEstatus($esta);
        $cliente->setNombreExtranjero($this->input->post("nombre_extranjero"));
        $cliente->setAlias($this->input->post("alias_cliente"));
        $cliente->setRif($this->input->post("rif_cliente"));
        $cliente->setIdfiscal($this->input->post("id_fiscal_unificado"));
        $cliente->setWeb($this->input->post("sitio_web"));
        $cliente->setGrupo($gru);
        $cliente->setMoneda($mon);
        $cliente->setPais($pa);
        $cliente->setTipoSocioNegocio($tipoSocioNegocio);
        $cliente->setNombre(trim($this->input->post("nombre_cliente")));

        $this->em->persist($cliente);
        $this->em->flush();

        $dato = $cliente->getId();

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('success' => 'true', 'dato' => $dato)));
    }

    public function modificarCliente() {

        $cliente = $this->em->getRepository('Entity\SocioNegocio')->find($this->input->post("clien"));
        $estatus = $this->em->getRepository('Entity\Estatus')->findAll();
        foreach ($estatus as $estatu) {
            if (trim($this->input->post("estaus_doc")) == $estatu->getDescripcion()) {
                $esta = $estatu;
            }
        }

        $paises = $this->em->getRepository('Entity\Pais')->findAll();
        foreach ($paises as $pais) {
            if ($this->input->post("pais_cliente") == utf8_encode($pais->getNombre())) {
                $pa = $pais;
            }
        }

        $grupos = $this->em->getRepository('Entity\Grupo')->findAll();
        foreach ($grupos as $grupo) {
            if (trim($this->input->post("grupo_cliente")) == utf8_encode($grupo->getNombre())) {
                $gru = $grupo;
            }
        }

        $monedas = $this->em->getRepository('Entity\Moneda')->findAll();
        foreach ($monedas as $moneda) {
            if (trim($this->input->post("moneda_cliente")) == utf8_encode($moneda->getNombre())) {
                $mon = $moneda;
            }
        }
        
      
        $cliente->setEstatus($esta);
        $cliente->setNombreExtranjero($this->input->post("nombre_extranjero"));
        $cliente->setAlias($this->input->post("alias_cliente"));
        $cliente->setRif($this->input->post("rif_cliente"));
        $cliente->setIdfiscal($this->input->post("id_fiscal_unificado"));
        $cliente->setWeb($this->input->post("sitio_web"));
        $cliente->setGrupo($gru);
        $cliente->setMoneda($mon);
        $cliente->setPais($pa);
        $cliente->setNombre(trim($this->input->post("nombre_cliente")));

        $this->em->persist($cliente);
        $this->em->flush();

        $dato = $cliente->getId();

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('success' => 'true', 'dato' => $dato)));
    }

    public function ingresarDatosContacto() {

        $datosContactos = new Entity\DatosContacto();

        $clientees = $this->em->getRepository('Entity\SocioNegocio')->findAll();
        foreach ($clientees as $cliente) {
            if (trim($this->input->post("proveedor_id")) == $cliente->getId()) {
                $pro = $cliente;
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

            $clientees = $this->em->getRepository('Entity\SocioNegocio')->findAll();
            foreach ($clientees as $cliente) {
                if (trim($this->input->get("proveedor_id")) == $cliente->getId()) {
                    $pro = $cliente;
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

    

}
