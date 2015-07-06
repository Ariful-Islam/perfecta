<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Init extends CI_Controller {

	public function index()
	{
		$data = array(
			'page' => 'home'
		);
		$this->load->view('home',$data);
	}
	
	public function import_database()
	{
		$this->load->dbforge();
		
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
				'password'=> array(
								'type' => 'VARCHAR',
								'constraint' => '400'
							),
		);
		
		$this->dbforge->add_field($fields_user);
		$this->dbforge->add_key('id',TRUE);
		$this->dbforge->create_table('user');
	}
}

/* End of file init.php */
/* Location: ./application/controllers/init.php */