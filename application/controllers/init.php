<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Init extends CI_Controller {

	public function index()
	{
		$data = array(
			'page' => 'home'
		);
		$this->load->view('home',$data);
	}
}

/* End of file init.php */
/* Location: ./application/controllers/init.php */