<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prueba extends CI_Controller {

	function _construct(){
		parent::_construct();
		#Carga de librerias
		#Carga de helpers
	}

	public function index()
	{
		$datos['nombre']="Angelica Barreda";
		$this->load->view('inicio',$datos);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */