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

class Promotores extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }
    
     public function promotoresCombo() {
        $promotores = $this->em->getRepository('Entity\Tbllogin')->createQueryBuilder('login')
                ->where('login.codperfil = 6')
                ->getQuery()
                ->getResult();

        $data = array();
        foreach ($promotores as $promotor) {
            $data[] = array(
                
                "promotor" => utf8_encode($promotor->getNombreusuario()),
                "id" => $promotor->getCodusuario(),
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'promotor' => $data)));
    
         
     }
      public function promotoresXagenciaGrilla() {
        if ($this->input->get("tipoTransaccion") == '') {
            $this->cargaPromotoresXagenciaGrilla();
        } 
         else if ($this->input->get("tipoTransaccion") == 'editar') {

            $promotores = $this->em->getRepository("Entity\Tblpromotoresagencia")->find($this->input->get("id"));
               
            if($this->input->get("promotor")==0){}
            else{
            $promotores->setCodigousuario($this->input->get("promotor"));
            }
            $promotores->setComision($this->input->get("comision"));
            $promotores->setComisiongrupo($this->input->get("grupo"));
            if ($this->input->get("principal")=="false"){
                $principal=0;
            }else {$principal=1;}
            $promotores->setPrincipal($principal);
         
            $this->em->persist($promotores);
            $this->em->flush();
            $this->cargaPromotoresXagenciaGrilla();
        } else if ($this->input->get("tipoTransaccion") == 'nuevoFalso') {
            $promotores= $this->em->getRepository('Entity\Tblpromotoresagencia')->findByCodagencia($this->input->get("agencia"));
            $data = array();
        foreach ($promotores as $promotor) {
            $promo= $this->em->getRepository('Entity\Tbllogin')->find($promotor->getCodigousuario());
           if($promotor->getPrincipal()==true){$principal=1;}
           else{$principal=0;}
            
            $data[] = array(
                "id" => $promotor->getId(),
                "agencia" => $promotor->getCodagencia(),
                "promotor" => utf8_encode($promo->getNombreusuario()),
                "comision" => $promotor->getComision(),
                "grupo" => $promotor->getComisiongrupo(),
                "principal" => $principal
            );
        }

          $data[] = array(
                "id" => 0,
                "agencia" => $this->input->get("agencia"),
                "promotor" =>'',
                "comision" => '',
                "grupo" => '',
                "principal" => 0
            );
        
        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'promotores' => $data)));
        }else if ($this->input->get("tipoTransaccion") == 'nuevo') {
            $promotores = new Entity\Tblpromotoresagencia();

            if($this->input->get("promotor")==0){}
            else{
            $promotores->setCodigousuario($this->input->get("promotor"));
            }
            $promotores->setCodagencia($this->input->get("agencia"));
            $promotores->setComision($this->input->get("comision"));
            $promotores->setComisiongrupo($this->input->get("grupo"));
            if ($this->input->get("principal")=="false"){
                $principal=0;
            }else {$principal=1;}
            $promotores->setPrincipal($principal);
         
            $this->em->persist($promotores);
            $this->em->flush();
            $this->cargaPromotoresXagenciaGrilla();
        }else if ($this->input->get("tipoTransaccion") == 'eliminar') {
            $promotores = $this->em->getRepository("Entity\Tblpromotoresagencia")->find($this->input->get("id"));
            $this->em->remove($promotores);
            $this->em->flush();
            $this->cargaPromotoresXagenciaGrilla();
        }        
        
        
      }     
      
      public function cargaPromotoresXagenciaGrilla() {    
        $promotores= $this->em->getRepository('Entity\Tblpromotoresagencia')->findByCodagencia($this->input->get("agencia"));
            $data = array();
        foreach ($promotores as $promotor) {
            $promo= $this->em->getRepository('Entity\Tbllogin')->find($promotor->getCodigousuario());
           if($promotor->getPrincipal()==true){$principal=1;}
           else{$principal=0;}
            
            $data[] = array(
                "id" => $promotor->getId(),
                "agencia" => $promotor->getCodagencia(),
                "promotor" => utf8_encode($promo->getNombreusuario()),
                "comision" => $promotor->getComision(),
                "grupo" => $promotor->getComisiongrupo(),
                "principal" => $principal
            );
        }

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('totalCount' => count($data), 'promotores' => $data)));
          
      }
     

}

/* Location: ./application/controllers/estimar.php */