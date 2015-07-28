<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data = array(
				'page_view' => 'user_entry'
		);
		
		$this->load->view('dashboard', $data);
	}
	
	public function add_user()
	{
		$this->load->model('user_model','model');
		
		$data = array(
					'user_email' 	=> $this->input->post('useremail'),
					'user_name' 	=> $this->input->post('username'),
					'created_by' 	=> $this->session->userdata('user_name'),
					'password' 		=> md5($this->input->post('password'))
				);
		
		$result = $this->model->add_user($data);
		
		if ($result)
		{
			redirect('admin/dashboard');
			return false;
		}
	}
	
	public function user_list()
	{
		if(!$this->session->userdata('user_email'))
		{
			redirect('admin');
			return false;
		}
		
		$this->load->model('user_model','model');
		
		$data = array(
				'users' => $this->model->get_user_list(),
				'page_view' => 'user_list'
		);
		
		$this->load->view('dashboard', $data);
	}
	
	public function delete_user()
	{
		// Load model
		$this->load->model('user_model','model');
		
		$return = $this->model->delete_user($this->input->post('id'));
		
		echo json_encode(true);
		
	}
	
	public function change_password()
	{
		$data = array(
				'page_view' => 'change_password'
		);
		
		$this->load->view('dashboard', $data);
	}
	
	public function match_password()
	{
		$this->load->model('user_model', 'model');
		
		$result = $this->model->match_password($this->input->post('curpassword'));
		
		echo json_encode($result);
	}
	
	public function update_password()
	{
		$this->load->model('user_model','model');
		
		$data = array(
					'password' 		=> md5($this->input->post('password'))
				);
		
		$result = $this->model->update_user($data);
		
		if ($result)
		{
			redirect('user/change_password');
			return false;
		}
	}
	
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */