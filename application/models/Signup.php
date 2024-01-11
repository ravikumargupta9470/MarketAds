<?php

class signup extends CI_Model
{

public function index($data)
{
 $name=$data['username'];
 $emaill=$data['useremail'];
$phone=$data['phone'];
$pass= $data['password'];
$r=$this->db->query("insert into user (username,password,phone,name) values('$emaill','$pass','$phone','$name')");
if($r)
{
	return(1);
}

}




public function index1($data)
{
 $name=$data['username'];
 $emaill=$data['useremail'];
$phone=$data['phone'];
$pass= $data['password'];
$r=$this->db->query("update user set password='$pass' where username='$emaill' and name='$name' and phone='$phone' ");
if($r)
{
	return(1);
}

}


public function check($data)
{
$user=$data['useremail'];
$r=$this->db->query("select *from user where username='$user'");

if($r)
{
	return($r->num_rows());

}


}







public function check1($data)
{
$user=$data['useremail'];
$name=$data['username'];

$r=$this->db->query("select *from user where username='$user' and name='$name'");
print_r($r->row());
if($r==null)
{

return 0;

}
else
{
	return 1;
}



}















}




















?>