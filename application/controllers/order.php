<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Controller {

	public function order_online()
	{
		// Load model
		$this->load->model('order_model','model');
		
		// gathering data
		$data = array(
				'product_id' 				=> $this->input->post('ppname'),
				'email'						=> $this->input->post('useremail')
		);
		
		// Insert data
		$return = $this->model->add_order_details($data);
		
		// If data inserted then send mail
		if($return)
		{
			$this->send_email('cc@ergonomic.be', $this->input->post('ppname'), $this->input->post('useremail'));
			echo json_encode("success");
		}
	}
	
	public function send_email($email, $product_id, $client_email)
	{
		$this->load->library('mailer');
			
		$subject = "I would like to buy the product with ID : ".$product_id;
	
		$body = "I would like to buy the product with ID : ".$product_id;
		$body .= ". Following is the details:<br /> Email: ".$client_email;
		$body .= "<br /> Product ID: ".$product_id;
	
		$data = array(
				'intro' => "Dear Admin",
				'body' 	=> $body
		);
	
	
		$this->mailer->send_mail($email, $subject, $this->load->view('mail_template',$data,TRUE), $client_email);
	}
}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */
