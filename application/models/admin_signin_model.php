<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * PHP version 5
 *
 * @category  CodeIgniter
 * @author    Ariful Islam
 * @copyright 2014 http://www.oployeelabs.com
 * @version   0.1
*/

class Admin_signin_model extends CI_Model 
{
	public function __construct()
    {
        parent::__construct();
    }
	
	public function sign_in($data)
	{
		//Select table name
		$table_name = $this->db->dbprefix('user');
		
		$this->db->select('*')->from($table_name);
		$this->db->where('user_email',$data['user_email']);
		$this->db->where('password',md5($data['password']));
		$query = $this->db->get();
		
		if ($query->num_rows() > 0)
		{
			return $query->row_array();
		}
		return FALSE;
	}
}
?>
