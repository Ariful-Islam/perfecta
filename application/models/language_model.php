<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * PHP version 5
 *
 * @category  CodeIgniter
 * @author    Ariful Islam
 * @copyright 2014 http://www.oployeelabs.com
 * @version   0.1
*/

class Language_model extends CI_Model 
{
	public function __construct()
    {
        parent::__construct();
    }
	
	public function get_language() 
	{
		//Select table name
		$table_name = $this->db->dbprefix('language');
		
		//Get contents
		$this->db->select('*')->from($table_name);
		$return = $this->db->get()->result();
		
		return $return;
	}	
}
?>

