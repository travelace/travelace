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

class Usuarios extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }

    public function usuariosGrilla() {

        if ($this->input->get("tipoTransaccion") == '') {
            $this->cargaUsuariosGrilla();
        } else if ($this->input->get("tipoTransaccion") == 'editar') {
                    
            
            $usuarios = $this->em->getRepository("Entity\Tbllogin")->find($this->input->get("id"));
            $usuarios->setNombreusuario($this->input->get("nombre"));
            $usuarios->setUser($this->input->get("usuario"));
            $usuarios->setPassword($this->input->get("contrasena"));
            if (is_numeric($this->input->get("perfil"))){$usuarios->setCodperfil($this->input->get("perfil"));}
            
            
            

            //if($this->input->get("activo")=='true'){$activo=1;}else{$activo=0;}
            // $bancos->setActivo($activo);
            $this->em->persist($usuarios);
            $this->em->flush();
            $this->cargaUsuariosGrilla();
        } else if ($this->input->get("tipoTransaccion") == 'nuevoFalso') {
            $usuarios = $this->em->getRepository('Entity\Tbllogin')->findAll();
            $data = array();
            foreach ($usuarios as $usuario) {
                $data[] = array(
                    "id" => $usuario->getCodusuario(),
                    "nombre" => utf8_encode($usuario->getNombreusuario()),
                    "usuario" => $usuario->getUser(),
                    "contrasena" => $usuario->getPassword(),
                    "perfil" => $usuario->getCodperfil(),
                    
                );
            }
            $data[] = array(
                "id" => 0,
                "nombre" => '',
                    "usuario" => '',
                    "contrasena" => '',
                    "perfil" => '',
                
            );

            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => count($data), 'usuario' => $data)));
        } else if ($this->input->get("tipoTransaccion") == 'nuevo') {
            $usuarios = new Entity\Tbllogin();
            $usuarios->setNombreusuario($this->input->get("nombre"));
            $usuarios->setUser($this->input->get("usuario"));
            $usuarios->setPassword($this->input->get("contrasena"));
            $usuarios->setCodperfil($this->input->get("perfil"));
           
            $this->em->persist($usuarios);
            $this->em->flush();
            $this->cargaUsuariosGrilla();
        }
    }

    public function cargaUsuariosGrilla() {
        $usuarios = $this->em->getRepository('Entity\Tbllogin')->findAll();
        $data = array();
        foreach ($usuarios as $usuario) {
            
            $perfiles1 = $this->em->getRepository('Entity\Tblperfiles')->find($usuario->getCodperfil());
            $data[] = array(
                    "id" => $usuario->getCodusuario(),
                    "nombre" => utf8_encode($usuario->getNombreusuario()),
                    "usuario" => $usuario->getUser(),
                    "contrasena" => $usuario->getPassword(),
                    "perfil" => $perfiles1->getNombreperfil(),
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'usuario' => $data)));
    }

    

}

/* Location: ./application/controllers/estimar.php */