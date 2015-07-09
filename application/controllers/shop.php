<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function our_shop()
	{
		$data = array(
			'page' => 'shop'
		);
		$this->load->view('our_shop',$data);
	}
	
	public function single_shop($product_id, $parent, $sub_category)
	{
		$this->load->model('category_model','model');
		$this->load->model('product_model','pmodel');
		
		$data = array(
			'page' 				=> 'work',
			'category'			=> $this->model->get_category(),
			'sub_category' 		=> $this->model->get_sub_category($parent),
			'parent_id'			=> $parent,
			'sub_category_id'	=> $sub_category,
			'product'			=> $this->pmodel->get_product_by_id($product_id),
			'product_images'	=> $this->pmodel->get_product_image_by_id($product_id),
			'product_id'		=> $product_id
			
		);
		$this->load->view('single_shop',$data);
	}
}

/* End of file shop.php */
/* Location: ./application/controllers/shop.php */