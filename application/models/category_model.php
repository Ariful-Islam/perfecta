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
	
	public function get_all_category_n_sub_category() 
	{
		//Select table name
		$table_name = $this->db->dbprefix('category c');
		
		//Get contents
		$this->db->select('c.id, c.category, c.parent_id, cj.category as parent_category')->from($table_name);
		$this->db->join('category cj', 'cj.id = c.parent_id','left');
		$return = $this->db->get()->result();
		
		return $return;
	}
	
	public function get_category_by_id($id) 
	{
		//Select table name
		$table_name = $this->db->dbprefix('category');
		
		//Get contents
		$this->db->select('*')->from($table_name);
		$this->db->where('id',$id);
		$return = $this->db->get()->result_row();
		
		return $return;
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
	
	public function add_category_details($data) 
	{
		//Select table name
		$table_name = $this->db->dbprefix('category');
		
		//Build contents query
		$this->db->set('created_at', 'NOW()', FALSE); 
		$this->db->set('updated_at', 'NOW()', FALSE); 
		$return = $this->db->insert($table_name,$data);
		
		return $return;
	}
	
	public function delete_category($id)
	{
		//Select table name
		$table_name = $this->db->dbprefix('category');
		
		//Build contents query
		$this->db->where('id',$id);
		$return = $this->db->delete($table_name);
		
		return $return;
	}
	
}
?>

