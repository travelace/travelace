<?php

class menu extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }

    public function panelMenu() {
        
        $x = $this->session->userdata('username');

        $usuario = $this->em->getRepository("Entity\Usuario")->findOneBy(array("usuario" => $x));
        $perfil = $usuario->getPerfil()->getId();

        $users = $this->em->getRepository("Entity\Opciones")->findOneByOpcionesMenuUsuario($perfil);

        //$node = new \Util\Node();
        //$treeNodes = new \Util\TreeNodes();

        /* $treeNodes->add("id1", "sistema1", true, true, false, $node);
          $treeNodes->add("id2", "sistema2", false, true, false);
          $treeNodes->add("id3", "sistema3", true, true, false);

          echo $treeNodes->toJson(); */

        $pro = 1;
        $da = array();
        $nivel2 = array();
        //$node = array();
        foreach ($users as $user) {
            if ($user["id"] === $pro) {
                if ($user["nivel"] === 1) {
                    $da[] = array(
                        "text" => utf8_encode($user["nombre"]),
                        "id" => $user["idnombre"],
                        "expanded" => true,
                        "children" => $nivel2
                    );
                    //$treeNodes->add($user["idnombre"], utf8_encode($user["nombre"]), $node);
                } elseif ($user["nivel"] === 2) {
                    $nivel2[] = array(
                      "text" => utf8_encode($user["nombre"]),
                      "id" => $user["idnombre"],
                      "leaf" => true
                      );
                    //echo $node[] = new \Util\Node($user["idnombre"], utf8_encode($user["nombre"]));
                    //$treeNodes->add($user["idnombre"], utf8_encode($user["nombre"]), $node);
                }
            } else {
                $pro++;
                $nivel2 = null;
                $nivel2 = array();  
            }
        }
        $this->output
          ->set_content_type('application/json')
          ->set_output(json_encode($da));
          //->set_output($treeNodes->toJson());
    }
    
     public function opciones() {
         
         $x = $this->session->userdata('username');
         $usuario = $this->em->getRepository("Entity\Usuario")->findOneBy(array("usuario" => $x));
         $perfil = $usuario->getPerfil()->getId();

       $sql="SELECT o.id, o.nombre FROM  Entity\Opciones o WHERE NOT EXISTS (SELECT 1
FROM Entity\PerfilOpciones r WHERE o.id = r.opciones and r.perfil=$perfil ) ";
        $consulta = $this->em->createQuery($sql);
        $consulta=$consulta->getResult();
        $data=array();
          foreach ($consulta as $cons) {
             $data[]=array(
                 "nombre" => $cons["nombre"],
             );
             
        }
        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
        
     }

}
