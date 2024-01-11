<?php    

class delete_blog extends CI_Model
{



public function blog($id)
{

$r=$this->db->query("delete from blogs where id='$id'");
if($r)
{
	return 1;
}


}


public function con($id)
{
	
$q=$this->db->query("select *from blogs where id='$id'");
if($q)
{


return($q->row());
}



}





















}















?>