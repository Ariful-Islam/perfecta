<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Init extends CI_Controller {

	public function index()
	{
		$data = array(
			'page' => 'home'
		);
		$this->load->view('home',$data);
	}
	
	public function set_language($language, $path, $method, $segment=0)
	{
		$this->session->set_userdata('sitelang',$language);
		$lang_abbr = $language=="english"?"en":"nl";
		$this->session->set_userdata('lang_abbr',$lang_abbr);
		$segment==0?redirect($path.'/'.$method):redirect($path.'/'.$method.'/'.$segment.'/0/0');
	}
	
	public function add_user()
	{
		$this->load->model('product_model');
		$this->product_model->add_user();
	}
	
	public function import_database()
	{
		$this->load->dbforge();
		
		/*$this->dbforge->drop_table('product');
		
		$fields = array(
				'id' 				=> array(
										'type' => 'INT',
										'constraint' => 11, 
										'auto_increment' => TRUE
									),
				'full_name' 		=> array(
										'type' => 'VARCHAR',
										'constraint' => '250'
									),
				'contact_phone' 	=> array(
										'type' => 'VARCHAR',
										'constraint' => '30'
									),
				'contact_email' 	=> array(
										'type' => 'VARCHAR',
										'constraint' => '200'
									),
				'company' 			=> array(
										'type' => 'VARCHAR',
										'constraint' => '200'
									),
				'message' 			=> array(
										'type' => 'VARCHAR',
										'constraint' => '2000'
									),
				'archive' 			=> array(
										'type' => 'TINYINT',
										'constraint' => '4'
									),
				'created_at' 		=> array(
										'type' => 'TIMESTAMP'
									),
				'updated_at' 		=> array(
										'type' => 'TIMESTAMP'
									),
		);
		
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('id',TRUE);
		$this->dbforge->create_table('contact_us');
		
		$fields_user = array(
				'id'		=> array(
								'type' => 'INT',
								'constraint' => 11, 
								'auto_increment' => TRUE
							),
				'user_email'=> array(
								'type' => 'VARCHAR',
								'constraint' => '200'
							),
				'password'	=> array(
								'type' => 'VARCHAR',
								'constraint' => '400'
							),
		);
		
		$this->dbforge->add_field($fields_user);
		$this->dbforge->add_key('id',TRUE);
		$this->dbforge->create_table('user'); 
		
		
		$Cfield = array(
				'id' 				=> array(
										'type' => 'INT',
										'constraint' => 11, 
										'auto_increment' => TRUE
									),
				'parent_id' 		=> array(
										'type' => 'INT',
										'constraint' => 11,
										'null' => TRUE
									),
				'category' 			=> array(
										'type' => 'VARCHAR',
										'constraint' => '200'
									),
				'created_at' 		=> array(
										'type' => 'TIMESTAMP'
									),
				'updated_at' 		=> array(
										'type' => 'TIMESTAMP'
									),
		);
		
		$this->dbforge->add_field($Cfield);
		$this->dbforge->add_key('id',TRUE);
		$this->dbforge->create_table('category');
		
		
		$Pfield = array(
				'id' 				=> array(
										'type' => 'INT',
										'constraint' => 11, 
										'auto_increment' => TRUE
									),
				'title' 			=> array(
										'type' => 'VARCHAR',
										'constraint' => '200'
									),
				'price' 			=> array(
										'type' => 'FLOAT'
									),
				'category_id' 		=> array(
										'type' => 'VARCHAR',
										'constraint' => '200'
									),
				'archive' 			=> array(
										'type' => 'TINYINT',
										'constraint' => 4
									),
				'created_at' 		=> array(
										'type' => 'TIMESTAMP'
									),
				'updated_at' 		=> array(
										'type' => 'TIMESTAMP'
									),
		);
		
		$this->dbforge->add_field($Pfield);
		$this->dbforge->add_key('id',TRUE);
		$this->dbforge->create_table('product'); 
		
		/*$Ifield = array(
				'id' 				=> array(
										'type' => 'INT',
										'constraint' => 11, 
										'auto_increment' => TRUE
									),
				'product_id' 		=> array(
										'type' => 'INT',
										'constraint' => 11
									),
				'image' 			=> array(
										'type' => 'VARCHAR',
										'constraint' => '200'
									),
				'created_at' 		=> array(
										'type' => 'TIMESTAMP'
									),
				'updated_at' 		=> array(
										'type' => 'TIMESTAMP'
									)
		);
		
		$this->dbforge->add_field($Ifield);
		$this->dbforge->add_key('id',TRUE);
		$this->dbforge->create_table('product_image');
		
		$Ofield = array(
				'id' 				=> array(
										'type' => 'INT',
										'constraint' => 11, 
										'auto_increment' => TRUE
									),
				'product_id' 		=> array(
										'type' => 'INT',
										'constraint' => 11
									),
				'email' 			=> array(
										'type' => 'VARCHAR',
										'constraint' => '200'
									),
				'created_at' 		=> array(
										'type' => 'TIMESTAMP'
									),
				'updated_at' 		=> array(
										'type' => 'TIMESTAMP'
									)
		);
		
		$this->dbforge->add_field($Ofield);
		$this->dbforge->add_key('id',TRUE);
		$this->dbforge->create_table('product_order');
		
		$Lfield = array(
				'id' 				=> array(
										'type' => 'INT',
										'constraint' => 11,
										'auto_increment' => TRUE
									),
				'language_name' 	=> array(
										'type' => 'VARCHAR',
										'constraint' => '100'
									),
				'language_abbr' 	=> array(
										'type' => 'VARCHAR',
										'constraint' => '10'
									),
				'created_at' 		=> array(
										'type' => 'TIMESTAMP'
									),
				'updated_at' 		=> array(
										'type' => 'TIMESTAMP'
									)
		);
		
		$this->dbforge->add_field($Lfield);
		$this->dbforge->add_key('id',TRUE);
		$this->dbforge->create_table('language');
		
		
		
		$Tfield = array(
				'id' 				=> array(
										'type' => 'INT',
										'constraint' => 11,
										'auto_increment' => TRUE
									),
				'product_id' 		=> array(
										'type' => 'INT',
										'constraint' => 11
									),
				'language_id' 		=> array(
										'type' => 'VARCHAR',
										'constraint' => '11'
									),				
				'features' 			=> array(
										'type' => 'VARCHAR',
										'constraint' => '2000'
									),
				'description' 		=> array(
										'type' => 'VARCHAR',
										'constraint' => '2000'
									),
				'created_at' 		=> array(
										'type' => 'TIMESTAMP'
									),
				'updated_at' 		=> array(
										'type' => 'TIMESTAMP'
									)
		);
		
		$this->dbforge->add_field($Tfield);
		$this->dbforge->add_key('id',TRUE);
		$this->dbforge->create_table('product_translation');*/
		
		$fields = array(
				'user_name' 		=> array(
										'type' => 'VARCHAR',
										'constraint' => '100'
									),
				'created_by' 		=> array(
										'type' => 'VARCHAR',
										'constraint' => '100'
									),
				'created_at' 		=> array(
										'type' => 'TIMESTAMP'
									),
				'updated_at' 		=> array(
										'type' => 'TIMESTAMP'
									)
		);
		$this->dbforge->add_column('user', $fields);
	}
}

/* End of file init.php */
/* Location: ./application/controllers/init.php */