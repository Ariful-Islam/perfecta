<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * PHP version 5
 *
 * @category  CodeIgniter
 * @author    Ariful Islam
 * @copyright 2015 http://www.mdarifulislam.com
 * @version   0.1
*/

class Product_model extends CI_Model 
{
	public function __construct()
    {
        parent::__construct();
    }
	
	public function add_product_details($data) 
	{
		//Select table name
		$table_name = $this->db->dbprefix('product');
		
		//Build contents query
		$this->db->set('created_at', 'NOW()', FALSE); 
		$this->db->set('updated_at', 'NOW()', FALSE); 
		$return = $this->db->insert($table_name,$data);
		
		return $return;
	}
	
	public function add_product_description($data)
	{
		//Select table name
		$table_name = $this->db->dbprefix('product_translation');
	
		//Build contents query
		$this->db->set('created_at', 'NOW()', FALSE);
		$this->db->set('updated_at', 'NOW()', FALSE);
		$return = $this->db->insert($table_name,$data);
	
		return $return;
	}
	
	public function add_user() 
	{
		//Select table name
		$table_name = $this->db->dbprefix('user');
		$data = array(
					'user_email' => 'admin@perfectabrussels.be',
					'password'	 => '202cb962ac59075b964b07152d234b70'
		); 
		$return = $this->db->insert($table_name,$data);
		
		return $return;
	}
	
	public function add_product_image($data) 
	{
		//Select table name
		$table_name = $this->db->dbprefix('product_image');
		
		//Build contents query
		$this->db->set('created_at', 'NOW()', FALSE); 
		$this->db->set('updated_at', 'NOW()', FALSE); 
		$return = $this->db->insert($table_name,$data);
		
		return $return;
	}
	
	public function delete_product($data,$id)
	{
		//Select table name
		$table_name = $this->db->dbprefix('product');
		
		//Build contents query
		$this->db->where('id',$id);
		$return = $this->db->update($table_name,$data);
		
		return $return;
	}
	
	public function get_product_list() 
	{
		//Select table name
		$sql = "SELECT * FROM product WHERE archive = 1 ORDER BY created_at DESC";
		
		//Get contents
		$return = $this->db->query($sql)->result();
		
		return $return;
	}
	
	public function get_all_products($category, $sub_category, $offset, $rowperpage)
	{		
		//Select table name
		$table_name = $this->db->dbprefix('product p');
		
		//Get contents
		$this->db->select('p.id, p.title, p.price, p.category_id, i.image')->from($table_name);
		$this->db->join('(select * from product_image group by product_id) as i', 'i.product_id = p.id', 'left');
		if($category!=0)
		{
			$this->db->where("FIND_IN_SET(".$category.",p.category_id)>0","",FALSE);
		}
		if($sub_category!=0)
		{
			$this->db->where("FIND_IN_SET(".$sub_category.",p.category_id)>0","",FALSE);
		}
		$this->db->where("p.archive","1",FALSE);
		$this->db->limit($rowperpage, $offset);
		$return = $this->db->get()->result();
		
		return $return;
	}
	
	public function get_product_by_id($id)
	{		
		//Select table name
		$table_name = $this->db->dbprefix('product p');
		
		//Get contents
		$this->db->select('*')->from($table_name);
		$this->db->join('product_translation l', 'p.id = l.product_id', 'left');
		
		$this->db->where("p.id",$id);
		$this->db->where("l.language_id",$this->config->item('language_abbr'));
		$return = $this->db->get()->row();
		
		return $return;
	}
	
	public function num_records($category, $sub_category)
	{
		//Select table name
		$table_name = $this->db->dbprefix('product p');
		
		//Get contents
		$this->db->select('p.id, p.title, p.price, p.category_id, i.image')->from($table_name);
		$this->db->join('(select * from product_image group by product_id) as i', 'i.product_id = p.id', 'left');
		if($category!=0)
		{
			$this->db->where("FIND_IN_SET(".$category.",p.category_id)>0","",FALSE);
		}
		if($sub_category!=0)
		{
			$this->db->where("FIND_IN_SET(".$sub_category.",p.category_id)>0","",FALSE);
		}
		$this->db->where("p.archive","1",FALSE);
		$return = $this->db->get()->num_rows();
		
		return $return;
	}
	
	public function get_product_image_by_id($id)
	{		
		//Select table name
		$table_name = $this->db->dbprefix('product_image');
		
		//Get contents
		$this->db->select('*')->from($table_name);
		$this->db->where("product_id",$id);
		$return = $this->db->get()->result();
		
		return $return;
	}
	
}
?>
