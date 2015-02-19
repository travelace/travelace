<?php

class menu extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }

    public function panelMenu() {
        $x = $this->session->userdata('username');

        $usuario = $this->em->getRepository("Entity\Usuario")->findOneBy(array("id" => $x));
        $perfil = $usuario->getPerfil()->getId();

        $users = $this->em->getRepository("Entity\Opciones")->findOneByOpcionesMenuUsuario($perfil);
        
        $pro = 1;
        $da = array();
        $nivel2 = array();
        foreach ($users as $user) {
            if ($user["id"] === $pro) {
                if ($user["nivel"] === 1) {
                    $da[] = array(
                        "text" => utf8_encode($user["nombre"]),
                        "id" => $user["idnombre"],
                        "expanded" => true,
                        "children" => $nivel2
                    );
                } elseif ($user["nivel"] === 2) {
                    $nivel2[] = array(
                        "text" => utf8_encode($user["nombre"]),
                        "id" => $user["idnombre"],
                        "leaf" => "true"
                    );

                }
            } else {
                $pro ++;
                $nivel2 = null;
                $nivel2 = array();
            }
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($da));
    }

}
