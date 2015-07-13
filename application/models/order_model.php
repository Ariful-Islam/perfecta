<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * PHP version 5
 *
 * @category  CodeIgniter
 * @author    Ariful Islam
 * @copyright 2015 http://www.mdarifulislam.com
 * @version   0.1
*/

class Order_model extends CI_Model 
{
	public function __construct()
    {
        parent::__construct();
    }
	
	public function add_order_details($data) 
	{
		//Select table name
		$table_name = $this->db->dbprefix('product_order');
		
		//Build contents query
		$this->db->set('created_at', 'NOW()', FALSE); 
		$this->db->set('updated_at', 'NOW()', FALSE); 
		$return = $this->db->insert($table_name,$data);
		
		return $return;
	}
	
	public function get_order_list() 
	{
		//Select table name
		$sql = "SELECT * FROM product_order ORDER BY id DESC";
		
		//Get contents
		$return = $this->db->query($sql)->result();
		
		return $return;
	}
	
}
?>
