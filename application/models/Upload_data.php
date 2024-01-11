<?php

class upload_data extends CI_Model
{


public function data($data,$img_path)
{
$shop=$data['shopname'];

$mobile=$data['mobile'];
$add=$data['address'];
$email=$data['email'];
$city=$data['city'];
$time=$data['time'];
$days=$data['days'];
$ab=$data['about'];
$q=$this->db->query("insert into bussiness_data (shopname,city,phone,address,time,days,About,photo,user_id) values('$shop','$city','$mobile','$add','$time','$days','$ab','$img_path','$email')");
if($q)
{


return redirect('users/back_ac');

}
else
{
	echo "error";
}


}




public function accounts($user)
{

$r=$this->db->query("select * from bussiness_data where user_id='$user'");
if($r)
{
return($r->result());	
}

}



public function delete($uid)
{


$r=$this->db->query("delete from bussiness_data where id='$uid'");
if($r)
{

return 1;

}


}




public function userp($uid,$img_path)
{

$q=$this->db->query("update user set photo ='$img_path' where id='$uid'");
if($q)
{


	return redirect('users/back_ac');
}


	
}



public function data_blog($data,$img)

{
$userid= $_SESSION['uid'];
$shopid=$_SESSION['view_id'];
$ti=$data['title'];
$cat=$data['cat'];
$con=$data['content'];
$time=$data['time'];
$link=$data['links'];
$r=$this->db->query("insert into blogs(Title,content,user_id,shop_id,photo,links,time,cat) values('$ti','$con','$userid','$shopid','$img','$link','$time','$cat')");
if($r)
{

return redirect('users/show1');


}




}



















}
?>