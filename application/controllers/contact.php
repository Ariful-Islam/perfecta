<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data = array(
			'page' => 'contact'
		);
		$this->load->view('contact',$data);
	}
	public function contact_us()
	{
		// Load model
		$this->load->model('contact_model','model');
		
		// gathering data
		$data = array(
				'full_name' 				=> $this->input->post('contact__name'),
				'contact_email'				=> $this->input->post('contact__mail'),
				'contact_phone'				=> $this->input->post('contact__phone'),
				'message'					=> $this->input->post('contact__message'),
				'company'					=> $this->input->post('contact__company'),
				'archive'					=> 1
		);
		
		// Insert data
		$return = $this->model->add_contact_details($data);
		
		// If data inserted then send mail
		if($return)
		{
			$this->send_email('cc@ergonomic.be', $this->input->post('contact__name'), $this->input->post('contact__phone'), $this->input->post('contact__mail'), $this->input->post('contact__message'), $this->input->post('contact__company'));
			$this->session->set_userdata('show','yes');
			redirect(base_url().'#contact');
		}
	}
	
	public function delete_message()
	{
		// Load model
		$this->load->model('contact_model','model');
		
		// gathering data
		$data = array(
				'archive' => 0
		);
		
		$return = $this->model->delete_message($data, $this->input->post('id'));
		
		echo json_encode(true);
		
	}
	
	public function send_email($email, $full_name, $phone, $client_email, $message, $company)
	{
		$this->load->library('mailer');
			
		$subject = "Someone wants to contact";
	
		$body = "Some one wants to contact with you. The following is his contact details: <br/> Full Name: ".$full_name." <br/> Phone: ".$phone;
		$body .= "<br /> Email: ".$client_email;
		$body .= "<br /> Company: ".$company;
		$body .= "<br /> Message: ".$message;
	
		$data = array(
				'intro' => "Dear Admin",
				'body' 	=> $body
		);
	
	
		$this->mailer->send_mail($email, $subject, $this->load->view('mail_template',$data,TRUE), $client_email);
	}
}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */
