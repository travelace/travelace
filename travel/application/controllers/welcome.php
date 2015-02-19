<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
class Welcome extends CI_Controller {

	public function  __construct(){
		parent::__construct();		
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
}

/* Location: ./application/controllers/welcome.php */