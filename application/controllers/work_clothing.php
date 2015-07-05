<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Work_clothing extends CI_Controller {

	public function index()
	{
		$data = array(
			'page' => 'work'
		);
		$this->load->view('work_clothing',$data);
	}
}

/* End of file work_clothing.php */
/* Location: ./application/controllers/work_clothing.php */