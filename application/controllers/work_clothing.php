<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Work_clothing extends CI_Controller {

	public function clothing($parent=0, $sub_category=0)
	{
		$this->load->model('category_model','model');
		$this->load->model('product_model','pmodel');
		
		$parent = $this->input->post('category')?$this->input->post('category'):$parent;
		$sub_category = $this->input->post('subcategory')?$this->input->post('subcategory'):$sub_category;
		
		// $category_for_overlap_image = $parent!=0?$this->model->get_category_by_id($parent):"";
		// $category_for_overlap_image = $sub_category!=0?$this->model->get_category_by_id($sub_category):"";
		
		$data = array(
			'page' 				=> 'work',
			'category'			=> $this->model->get_category(),
			'sub_category' 		=> $this->model->get_sub_category($parent),
			'parent_id'			=> $parent,
			'sub_category_id'	=> $sub_category,
			'products'			=> $this->pmodel->get_all_products($parent, $sub_category)
		);
		
		$this->load->view('work_clothing',$data);
	}
}

/* End of file work_clothing.php */
/* Location: ./application/controllers/work_clothing.php */