<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
	
	public function login()
	{
		$this->load->model('admin_signin_model','model');
		
		$data = array(
					'user_email' 	=> $this->input->post('email'),
					'password' 		=> $this->input->post('password')
				);
		
		$result = $this->model->sign_in($data);
		
		if ($result)
		{
			$this->session->set_userdata($data);
			redirect('admin/dashboard');
			return false;
		}
		
		redirect('admin');
		return false;
	}
	
	public function dashboard()
	{
		if(!$this->session->userdata('user_email'))
		{
			redirect('admin');
			return false;
		}
		
		$this->load->model('contact_model','model');
		
		$data = array(
				'contacts' => $this->model->get_contact_list(),
				'page_view' => 'contact_list'
		);
		
		$this->load->view('dashboard', $data);
	}
	
	public function do_signout()
	{
		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */