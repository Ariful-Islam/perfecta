<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

	public function category_list()
	{
		if(!$this->session->userdata('user_email'))
		{
			redirect('admin');
			return false;
		}
		
		$this->load->model('category_model','model');
		
		$data = array(
				'categories' => $this->model->get_all_category_n_sub_category(),
				'page_view' => 'category_list'
		);
		
		$this->load->view('dashboard', $data);
	}
	
	public function category_entry()
	{
		$this->load->model('category_model','model');
		
		$data = array(
				'page_view' => 'category_entry',
				'category'	=> $this->model->get_category()
		);
		
		$this->load->view('dashboard', $data);
	}
	
	public function category_add()
	{
		// Load model
		$this->load->model('category_model');
		
		$parent_id = $this->input->post('parent')==0?NULL:$this->input->post('parent');
		
		// gathering data
		$data = array(
				'category' 				=> $this->input->post('category'),
				'parent_id'				=> $parent_id
		);
		
		// Insert data
		$return = $this->category_model->add_category_details($data);
		
		if($return)
		{
			redirect('category/category_entry');
		}
	}
	
	public function delete_message()
	{
		// Load model
		$this->load->model('category_model','model');
		
		// gathering data
		$data = array(
				'archive' => 0
		);
		
		$return = $this->model->delete_message($data, $this->input->post('id'));
		
		echo json_encode(true);
		
	}
}

/* End of file category.php */
/* Location: ./application/controllers/category.php */
