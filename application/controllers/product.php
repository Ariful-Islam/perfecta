<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

	public function product_list()
	{
		if(!$this->session->userdata('user_email'))
		{
			redirect('admin');
			return false;
		}
		
		$this->load->model('product_model','model');
		
		$data = array(
				'product' => $this->model->get_product_list(),
				'page_view' => 'product_list'
		);
		
		$this->load->view('dashboard', $data);
	}
	
	public function do_upload()
	{

		$this->load->library('upload');

		$files = $_FILES;
		$cpt = count($_FILES['userfile']['name']);
		for($i=0; $i<$cpt; $i++)
		{

			$_FILES['userfile']['name']= $files['userfile']['name'][$i];
			$_FILES['userfile']['type']= $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error']= $files['userfile']['error'][$i];
			$_FILES['userfile']['size']= $files['userfile']['size'][$i];    



			$this->upload->initialize($this->set_upload_options());
			$this->upload->do_upload();
			$result = $this->upload->data();
			$this->add_image($result['file_name']);
		}

	}
	private function set_upload_options()
	{   
		// upload an image options
		$config = array();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = '0';
		$config['overwrite']     = FALSE;


		return $config;
	}
	
	private function add_image($image_name)
	{
		$this->load->model('product_model','model');
		
		$data = array(
				'product_id' => $this->session->userdata('product_id'),
				'image'		 => $image_name
		);
		
		$this->model->add_product_image($data);
	}
	
	public function product_entry()
	{
		$data = array(
				'page_view' => 'product_add_edit',
				'category'	=> $this->_get_menu_categories()
		);
		
		$this->load->view('dashboard', $data);
	}
	
	/**
	 * 
	 * For getting parent and child category.
	 * @param unknown_type $parent_id
	 * @param unknown_type $indent
	 */
	private function _get_menu_categories($parent_id=NULL, $indent= 0) 
    {
		$this->load->model('category_model', 'model');
		
        $indent++;
        
        $data = array();
        
        if($results = $this->model->get_dropdown_categories($parent_id))
        {
            foreach ($results as $result) 
            {            	
            	if ($indent == 1)
            	{
            		$cat_name = "<input type='checkbox' name='category[]' value='".$result->id."'> <b>".$result->category."</b><br/>";
            	}
            	else 
            	{
            		$cat_name = "&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='category[]' value='".$result->id."'> ".$result->category."<br/>";
            	}
            	
                $data[] = array(
                    'category_id' => $result->id,
                    'name'        => $cat_name
                );
                
                $sub = $this->_get_menu_categories($result->id, $indent);
                
                if ($sub) 
                {
                  $data = array_merge($data, $sub);
                }
            }            
        }

        return $data;
    }
	
	public function product_add()
	{
		// Load model
		$this->load->model('product_model');
		
		// gathering data
		$data = array(
				'title' 				=> $this->input->post('title'),
				'features'				=> $this->input->post('features'),
				'description'			=> $this->input->post('description'),
				'price'					=> $this->input->post('price'),
				'category_id'			=> implode(',',$this->input->post('category')),
				'archive'				=> 1
		);
		
		// Insert data
		$return = $this->product_model->add_product_details($data);
		
		if($return)
		{
			$this->session->set_userdata('product_id',$this->db->insert_id());
			redirect('product/product_entry/#tab_images');
		}
	}
	
	public function delete_message()
	{
		// Load model
		$this->load->model('product_model','model');
		
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
			
		$subject = "Someone wants to product";
	
		$body = "Some one wants to product with you. The following is his product details: <br/> Full Name: ".$full_name." <br/> Phone: ".$phone;
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

/* End of file product.php */
/* Location: ./application/controllers/product.php */
