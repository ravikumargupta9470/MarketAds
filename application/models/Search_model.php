<?php 

class search_model extends CI_Model
{



	public function index($data)
	{
		$item=$data['item'];

if($data['city']==null)
{
	
	$q=$this->db->query("SELECT * FROM bussiness_data where shopname like '$item%' or shopname like '%$item' or user_id like '$item%' or user_id like '%$item' or address like '$item%' or address like '%$item'  or phone like '$item%' or phone like '%$item'");
	
	return($q->result());
}

if($data['item']==null)
{
	$city=$data['city'];
	$q=$this->db->query("select *from bussiness_data where city like '%$city%' ");
	

return($q->result());
}

else
{
	$city=$data['city'];
$q=$this->db->query("SELECT * FROM bussiness_data where shopname like '$item%' or shopname like '%$item' or user_id like '$item%' or user_id like '%$item' or address like '$item%' or address like '%$item'  or city like '$city%' or city like '%$city' or phone like '$item%' or phone like '%$item'");
	
	return($q->result());
}
	}
















	public function show_profile($id)
	{


	$r=$this->db->query("select *from bussiness_data where id='$id'");	
	return($r->row());
	}

public function show_blog($id)
{
$r=$this->db->query("select *from blogs where shop_id='$id'");
if($r)
{
	return($r->result());
}

}






}



?>