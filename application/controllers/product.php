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
	
	public function edit_product($id, $lang='en')
	{
		if(!$this->session->userdata('user_email'))
		{
			redirect('admin');
			return false;
		}
		
		$this->load->model('product_model','product_model');
		$this->load->model('language_model');
		$products = $this->product_model->get_product_for_edit($id, $lang);
		
		$data = array(
				'page_view' => 'product_edit',
				'category'	=> $this->_get_menu_categories(NULL, 0, $products->category_id),
				'language'	=> $this->language_model->get_language(),
				'images'	=> $this->product_model->get_product_image_by_id($id),
				'products'	=> $products
		);
		
		$this->load->view('dashboard', $data);
	}
	
	public function do_upload($id=0)
	{

		$this->load->library('upload');

		$files = $_FILES;
		$cpt = count($_FILES['userfile']['name']);
		$replacable = array('#','!','@','$','%','^','&','*',' ','(',')','[',']','{','}');
		for($i=0; $i<$cpt; $i++)
		{
			$name = str_replace($replacable,'',$files['userfile']['name'][$i]);
			$_FILES['userfile']['name']= $name;
			$_FILES['userfile']['type']= $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error']= $files['userfile']['error'][$i];
			$_FILES['userfile']['size']= $files['userfile']['size'][$i];    



			$this->upload->initialize($this->set_upload_options());
			$this->upload->do_upload();
			$result = $this->upload->data();
			$this->add_image($result['file_name'], $id);
			$this->resize_image($result);
		}

	}
	private function set_upload_options()
	{   
		// upload an image options
		$config = array();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']      = '0';
		$config['overwrite']     = FALSE;


		return $config;
	}
	
	private function add_image($image_name, $id)
	{
		$this->load->model('product_model','model');
		
		$product_id = $id==0?$this->session->userdata('product_id'):$id;
		
		$data = array(
				'product_id' => $product_id,
				'image'		 => $image_name
		);
		
		$this->model->add_product_image($data);
	}
	
	private function resize_image($upload_data)
	{
		$w_orig = $upload_data['image_width'];
		$h_orig = $upload_data['image_height'];
		$w_thumb = 202;
		$h_thumb = ( $h_orig * 202 ) / $w_orig;
		$y_thumb = 0;
		$x_thumb = 0;
		if ($h_thumb > 170) {
			$y_thumb = ($h_thumb - 170) / 2;
		} else {
			$h_thumb = 170;
			$w_thumb = ($w_orig * 170) / $h_orig;
			$x_thumb = ($w_thumb - 202) / 2;
		}
		
		$config = array(
			'source_image' => $upload_data['full_path'],
			'new_image' => $upload_data["file_path"].$upload_data["raw_name"].'202.png',
			'maintain_ratio' => TRUE,
			'width' => $w_thumb,
			'height' => $h_thumb
		);
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
		$config = array(
			'source_image' => $upload_data["file_path"].$upload_data["raw_name"].'202.png',
			'maintain_ratio' => FALSE,
			'width' => 220,
			'height' => 170,
			'x_axis' => $x_thumb,
			'y_axis' => $y_thumb
		);
		$this->image_lib->clear();
		$this->image_lib->initialize($config);
		$this->image_lib->crop();
		
		
		
		// for thumbnail
		$w_orig = $upload_data['image_width'];
		$h_orig = $upload_data['image_height'];
		$w_thumb = 80;
		$h_thumb = ( $h_orig * 80 ) / $w_orig;
		$y_thumb = 0;
		$x_thumb = 0;
		if ($h_thumb > 60) {
			$y_thumb = ($h_thumb - 60) / 2;
		} else {
			$h_thumb = 60;
			$w_thumb = ($w_orig * 60) / $h_orig;
			$x_thumb = ($w_thumb - 80) / 2;
		}
		
		$config = array(
			'source_image' => $upload_data['full_path'],
			'new_image' => $upload_data["file_path"].$upload_data["raw_name"].'80.png',
			'maintain_ratio' => TRUE,
			'width' => $w_thumb,
			'height' => $h_thumb
		);
		//$this->load->library('image_lib', $config);
		$this->image_lib->clear();
		$this->image_lib->resize();
		$config = array(
			'source_image' => $upload_data["file_path"].$upload_data["raw_name"].'80.png',
			'maintain_ratio' => FALSE,
			'width' => 80,
			'height' => 60,
			'x_axis' => $x_thumb,
			'y_axis' => $y_thumb
		);
		$this->image_lib->clear();
		$this->image_lib->initialize($config);
		$this->image_lib->crop();
	}
	
	public function product_entry()
	{
		$this->load->model('language_model');
		
		$data = array(
				'page_view' => 'product_add_edit',
				'category'	=> $this->_get_menu_categories(),
				'language'	=> $this->language_model->get_language()
		);
		
		$this->load->view('dashboard', $data);
	}
	
	/**
	 * 
	 * For getting parent and child category.
	 * @param unknown_type $parent_id
	 * @param unknown_type $indent
	 */
	private function _get_menu_categories($parent_id=NULL, $indent= 0, $category_id=0) 
    {
		$this->load->model('category_model', 'model');
		
        $indent++;
        
        $data = array();
		
		$category_array = explode(',',$category_id);
        
        if($results = $this->model->get_dropdown_categories($parent_id))
        {
            foreach ($results as $result) 
            {   
            	//$chk = $category_id==$result->id?'checked':'';
				$chk = in_array($result->id, $category_array)?'checked':'';
            	
            	if ($indent == 1)
            	{
            		$cat_name = "<input type='checkbox' name='category[]' ".$chk." class='mycat' value='".$result->id."'> <b>".$result->category."</b><br/>";
            	}
            	else 
            	{
            		$cat_name = "&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='category[]' ".$chk." class='mycat' value='".$result->id."'> ".$result->category."<br/>";
            	}
            	
                $data[] = array(
                    'category_id' => $result->id,
                    'name'        => $cat_name
                );
                
                $sub = $this->_get_menu_categories($result->id, $indent, $category_id);
                
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
				'price'					=> $this->input->post('price'),
				'category_id'			=> implode(',',$this->input->post('category')),
				'archive'				=> 1
		);
		
		// Insert data
		$return = $this->product_model->add_product_details($data);
		
		if($return)
		{
			$this->session->set_userdata('product_id',$this->db->insert_id());
			//redirect('product/product_entry/#tab_translate');
			echo json_encode($return);
		}
	}
	
	public function product_update($id)
	{
		// Load model
		$this->load->model('product_model');
	
		// gathering data
		$data = array(
				'title' 				=> $this->input->post('title'),
				'price'					=> $this->input->post('price'),
				'category_id'			=> implode(',',$this->input->post('category')),
				'archive'				=> 1
		);
	
		// Insert data
		$return = $this->product_model->update_product_details($data, $id);
	
		if($return)
		{
			//$this->session->set_userdata('product_id',$this->db->insert_id());
			echo json_encode($return);
		}
	}
	
	public function product_description_add()
	{
		// Load model
		$this->load->model('product_model');
		
		$btn = $this->input->post('prd');
	
		// gathering data
		$data = array(
				'product_id'			=> $this->session->userdata('product_id'),
				'language_id'			=> $this->input->post('language'),
				'features'				=> $this->input->post('features'),
				'description'			=> $this->input->post('description')
		);
	
		// Insert data
		$return = $this->product_model->add_product_description($data);
	
		if($return)
		{
			echo json_encode($return);
			/* if ($btn == 'save')
			{
				redirect('product/product_entry/#tab_translate');
			}
			else 
			{
				redirect('product/product_entry/#tab_images');
			} */
		}
	}
	
	public function product_description_update($id)
	{
		// Load model
		$this->load->model('product_model');
	
		// gathering data
		$data = array(
				'language_id'			=> $this->input->post('language'),
				'features'				=> $this->input->post('features'),
				'description'			=> $this->input->post('description')
		);
	
		// Insert data
		$return = $this->product_model->update_product_description($data, $id, $this->input->post('language'));
	
		if($return)
		{
			echo json_encode($return);
		}
	}
	
	public function delete_product()
	{
		// Load model
		$this->load->model('product_model','model');
		
		// gathering data
		$data = array(
				'archive' => 0
		);
		
		$return = $this->model->delete_product($data, $this->input->post('id'));
		
		echo json_encode(true);
		
	}
	
	public function delete_image()
	{
		// Load model
		$this->load->model('product_model','model');
	
		$return = $this->model->delete_image($this->input->post('id'));
		
		$this->remove_image($return);
	
		echo json_encode(true);
	
	}
	
	private function remove_image($image)
	{
		$file = base_url('uploads/'.$image);
		log_message('ERROR', $file);
		
		if (is_readable($file) && unlink($file)) {
			log_message('ERROR', 'DELETED');
			return "The file has been deleted";
		} else {
			log_message('ERROR', 'NOT DELETED');
			return "The file was not found or not readable and could not be deleted";
		}
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
