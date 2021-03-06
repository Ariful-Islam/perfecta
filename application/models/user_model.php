<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * PHP version 5
 *
 * @category  CodeIgniter
 * @author    Ariful Islam
 * @copyright 2014 http://www.oployeelabs.com
 * @version   0.1
*/

class User_model extends CI_Model 
{
	public function __construct()
    {
        parent::__construct();
    }
	
	public function get_user_list() 
	{
		//Select table name
		$table_name = $this->db->dbprefix('user');
		
		//Get contents
		$this->db->select('*')->from($table_name);
		$return = $this->db->get()->result();
		
		return $return;
	}
	
	public function add_user($data) 
	{
		//Select table name
		$table_name = $this->db->dbprefix('user');
		
		//Build contents query
		$this->db->set('created_at', 'NOW()', FALSE); 
		$this->db->set('updated_at', 'NOW()', FALSE); 
		$return = $this->db->insert($table_name,$data);
		
		return $return;
	}
	
	public function delete_user($id)
	{
		//Select table name
		$table_name = $this->db->dbprefix('user');
		
		//Build contents query
		$this->db->where('id',$id);
		$return = $this->db->delete($table_name);
		
		return $return;
	}
	
	public function match_password($cur_pass)
	{
		//Select table name
		$table_name = $this->db->dbprefix('user');
		
		$this->db->select('*')->from($table_name);
		$this->db->where('user_email',$this->session->userdata('user_email'));
		$this->db->where('password',md5($cur_pass));
		$query = $this->db->get();
		
		if ($query->num_rows() > 0)
		{
			return TRUE;
		}
		return FALSE;
	}
	
	public function update_user($data)
	{
		//Select table name
		$table_name = $this->db->dbprefix('user');
		
		$this->db->where('user_email',$this->session->userdata('user_email'));
		
		$query = $this->db->update($table_name, $data);
		
		if ($query)
		{
			return TRUE;
		}
		return FALSE;
	}
	
}
?>

