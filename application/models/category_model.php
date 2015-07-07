<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * PHP version 5
 *
 * @category  CodeIgniter
 * @author    Ariful Islam
 * @copyright 2014 http://www.oployeelabs.com
 * @version   0.1
*/

class Category_model extends CI_Model 
{
	public function __construct()
    {
        parent::__construct();
    }
	
	public function get_category() 
	{
		//Select table name
		$table_name = $this->db->dbprefix('category');
		
		//Get contents
		$this->db->select('*')->from($table_name);
		$this->db->where('parent_id',NULL);
		$return = $this->db->get()->result();
		
		return $return;
	}
	
	public function get_sub_category($parent_id)
	{
		//Select table name
		$table_name = $this->db->dbprefix('category');
		
		$this->db->select('*')->from($table_name);
		$this->db->where('parent_id',$parent_id);
		$return = $this->db->get()->result();
		
		return $return;
	}
	
	public function get_dropdown_categories($parent_id)
	{
		//Select table name
		$table_name = $this->db->dbprefix('category');
		
		$this->db->select('*')->from($table_name);
		$this->db->where('parent_id',$parent_id);
		$return = $this->db->get()->result();
		
		return $return;
	}
	
	public function get_category_array($data)
	{
		//Select table name
		$table_name = $this->db->dbprefix('category');
		
		$this->db->select('GROUP_CONCAT(category) as cat')->from($table_name);
		$this->db->where_in('id',$data);
		$query = $this->db->get();
		
		//Build contents query
		$return = $query->row();
		
		return $return;
	}
	
}
?>

