<?php

class ResumenGlobal extends CI_Controller {

    private $em;

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
        
    }

    public function cicloPago($cicloPago,$estima) {

         $costoindi= $this->em->getRepository('Entity\CostoIndirecto')->findBy(array("estimacion" => $estima));
          foreach ($costoindi as $costoind) {
            $costoind->setCicloPago($cicloPago);
        }
         $this->em->persist($costoind);
         $this->em->flush();   
     }
     
     public function anticipo($anticipo,$estima) {

         $anticipoPorcentaje= $this->em->getRepository('Entity\CostoIndirecto')->findBy(array("estimacion" => $estima));
          foreach ($anticipoPorcentaje as $anticipoPorcenta) {
            $anticipoPorcenta->setAnticipo($anticipo);
        }
         $this->em->persist($anticipoPorcenta);
         $this->em->flush();   
     }
    
     public function gastosAdministrativos($gastoAdm,$estima) {

         $costoIndirecto= $this->em->getRepository('Entity\CostoIndirecto')->findBy(array("estimacion" => $estima));
          foreach ($costoIndirecto as $costoIndi) {
            $costoIndi->setAdministrativosEstimados($gastoAdm);
        }
         $this->em->persist($costoIndi);
         $this->em->flush();   
     }
     
      public function apalancamiento($apalancamiento,$estima) {

         $costoIndirecto= $this->em->getRepository('Entity\CostoIndirecto')->findBy(array("estimacion" => $estima));
          foreach ($costoIndirecto as $costoIndi) {
            $costoIndi->setApalancamientoFinanciero($apalancamiento);
        }
         $this->em->persist($costoIndi);
         $this->em->flush();   
     }
     
      public function fleteNacionales($flete,$estima) {

         $costoIndirecto= $this->em->getRepository('Entity\CostoIndirecto')->findBy(array("estimacion" => $estima));
          foreach ($costoIndirecto as $costoIndi) {
            $costoIndi->setFletesNoContemplados($flete);
        }
         $this->em->persist($costoIndi);
         $this->em->flush();   
     }
     
      public function fielCumplimiento($fiel,$estima) {

         $costoIndirecto= $this->em->getRepository('Entity\CostoIndirecto')->findBy(array("estimacion" => $estima));
          foreach ($costoIndirecto as $costoIndi) {
            $costoIndi->setFianzaFiel($fiel);
        }
         $this->em->persist($costoIndi);
         $this->em->flush();   
     }
    
      public function finanzaAnticipo($finanzaAnti,$estima) {

         $costoIndirecto= $this->em->getRepository('Entity\CostoIndirecto')->findBy(array("estimacion" => $estima));
          foreach ($costoIndirecto as $costoIndi) {
            $costoIndi->setFianzaAnticipo($finanzaAnti);
        }
         $this->em->persist($costoIndi);
         $this->em->flush();   
     }
     
      public function adicionalFinanzaAnticipo($finanzaAnti,$estima) {

         $costoIndirecto= $this->em->getRepository('Entity\CostoIndirecto')->findBy(array("estimacion" => $estima));
          foreach ($costoIndirecto as $costoIndi) {
            $costoIndi->setAdicionalFianzaAnticipo($finanzaAnti);
        }
         $this->em->persist($costoIndi);
         $this->em->flush();   
     }
     
      public function aporteSocial($aporteSocial,$estima) {

         $costoIndirecto= $this->em->getRepository('Entity\CostoIndirecto')->findBy(array("estimacion" => $estima));
          foreach ($costoIndirecto as $costoIndi) {
            $costoIndi->setAporteSocial($aporteSocial);
        }
         $this->em->persist($costoIndi);
         $this->em->flush();   
     }
      public function patenteMunicipal($patenteMunicipal,$estima) {

         $costoIndirecto= $this->em->getRepository('Entity\CostoIndirecto')->findBy(array("estimacion" => $estima));
          foreach ($costoIndirecto as $costoIndi) {
            $costoIndi->setPatenteMunicipal($patenteMunicipal);
        }
         $this->em->persist($costoIndi);
         $this->em->flush();   
     }
     
      public function comisionExito($comisionExito,$estima) {

         $costoIndirecto= $this->em->getRepository('Entity\CostoIndirecto')->findBy(array("estimacion" => $estima));
          foreach ($costoIndirecto as $costoIndi) {
            $costoIndi->setComisionExito($comisionExito);
        }
         $this->em->persist($costoIndi);
         $this->em->flush();   
     }
     
      public function cargarDato($estimacion) {
          $costoIndirecto= $this->em->getRepository('Entity\CostoIndirecto')->findBy(array("estimacion" => $estimacion));
          $data = array();
          foreach ($costoIndirecto as $costoIndi) {
                $data[] = array(
                    "id" => $costoIndi->getId(),
                    "estimacion_id" => $costoIndi->getEstimacion(),
                    "administrativos_estimados" => $costoIndi->getAdministrativosEstimados(),
                    "apalancamiento_financiero" => $costoIndi->getApalancamientoFinanciero(),
                    "fletes_no_contemplados" => $costoIndi->getFletesNoContemplados(),
                    "fianza_fiel" => $costoIndi->getFianzaFiel(),
                    "fianza_anticipo" => $costoIndi->getFianzaAnticipo(),
                    "adicionalFianzaAnticipo" => $costoIndi->getAdicionalFianzaAnticipo(),
                    "aporte_social" => $costoIndi->getAporteSocial(),
                    "patente_municipal" => $costoIndi->getPatenteMunicipal(),
                    "comision_exito" => $costoIndi->getComisionExito(),
                    "ciclo_pago" => $costoIndi->getCicloPago(),
                    "anticipo" => $costoIndi->getAnticipo()
                );
                
                  $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('totalCount' => count($data), 'volumetria' => $data)));
              
          }
          
      }

}
