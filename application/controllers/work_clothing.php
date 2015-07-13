<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Work_clothing extends CI_Controller {

	public function clothing($offset=0, $parent=0, $sub_category=0)
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
			'products'			=> $this->pmodel->get_all_products($parent, $sub_category, $offset, 6),
			'pagination'		=> $this->pagination_clothing($parent, $sub_category, $offset)
		);
		
		$this->load->view('work_clothing',$data);
	}
	
	private function pagination_clothing($parent=0, $sub_category=0, $offset=0)
	{
		
		$page['base_url'] = base_url()."/work_clothing/clothing";
		$page['total_rows'] = $this->num_records($parent, $sub_category);
		$page['prev_link'] = FALSE;
		$page['next_link'] = FALSE;
		$page['full_tag_open'] = "<ul class='pagination'>";
		$page['full_tag_close']	= '</ul>';
		$page['cur_tag_open'] = "<li class='active'><a href='javascript:;'>";
		$page['cur_tag_close'] = '</a></li>';
		$page['num_tag_open'] = "<li>";
		$page['num_tag_close'] = "</li>";
		$page['per_page'] = 6;
		
		$this->pagination->initialize($page);
		
		return $this->pagination->create_links();
	}
	
	private function num_records($parent, $sub_category)
	{
		$this->load->model('product_model','pmodel');
		$result = $this->pmodel->num_records($parent, $sub_category);
		return $result;
	}
}

/* End of file work_clothing.php */
/* Location: ./application/controllers/work_clothing.php */