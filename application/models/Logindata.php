<?php
class logindata extends CI_Model
{



	public function index($user)
	{

$q=$this->db->query("select *from bussiness_data where user_id='$user' ");
if($q)
{

return($q->result());

}

	}
}











?>