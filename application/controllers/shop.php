<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function our_shop()
	{
		$data = array(
			'page' => 'shop'
		);
		$this->load->view('our_shop',$data);
	}
	
	public function single_shop()
	{
		$data = array(
			'page' => 'work'
		);
		$this->load->view('single_shop',$data);
	}
}

/* End of file shop.php */
/* Location: ./application/controllers/shop.php */