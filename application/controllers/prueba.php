<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prueba extends CI_Controller {

	public function index()
	{
		$datos['nombre']="Angelica Barreda";
		$this->load->view('inicio',$datos);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */