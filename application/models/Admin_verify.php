<?php
class admin_verify extends CI_Model
{


public function index($user,$password)
{
	$q=$this->db->query("select *from user where username='$user' and password='$password'");
if($q->num_rows()>0)
{
	
	return($q->row()->username);
	
	
	
}
 
 else
 {

return 1;

 }



}





public function index2($user,$password)
{
	$q=$this->db->query("select *from user where username='$user' and password='$password'");
if($q->num_rows()>0)
{
	
	return($q->row());
	
	
	
}
 
 



}


}


?>