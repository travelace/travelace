<?php

class Login extends CI_Controller {

    private $em;
    private $auth;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
        $this->load->library('session');
        
       // $this->load->library('AuthLDAP');
    }

    function index() {
       // $this->session->keep_flashdata('tried_to');
        $this->validar();
    }

    public function validar() {
        //$this->session->keep_flashdata('tried_to');
        $usuarios = $this->em->getRepository('Entity\Usuario')->findByUsuario($this->input->post("username"));
        if($usuarios)
        {
       
            foreach ($usuarios as $usuario) {
              
                $this->session->set_userdata('username', $usuario->getUsuario());
          }
                
                $this->output
                        ->set_content_type('application/json')
                        ->set_output(json_encode(array('success' => 'true')));
                
            
        } else {
               
                $this->output
                        ->set_content_type('application/json')
                        ->set_output(json_encode(array('failure' => 'true')));
            }
        /* foreach ($usuarios as $usuario) {

          }
          if (!empty($usuario)) {
          $this->session->set_userdata('usuario', $usuario->getUsuario());
          $this->session->set_userdata('idUsuario', $usuario->getid());
          $this->output
          ->set_content_type('application/json')
          ->set_output(json_encode(array('success' => 'true')));
          } else {
          $this->output
          ->set_content_type('application/json')
          ->set_output(json_encode(array('failure' => 'true')));
          } */
    }

    public function session() {

        $x = $this->session->userdata('username');

        if ($x) {
            $this->output
                    ->set_content_type('application/json')
                    ->set_output("logeado");
        } else {

            $this->output
                    ->set_content_type('application/json')
                    ->set_output("deslogeado");
        }
    }

}
