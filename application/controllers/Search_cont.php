<?php

class search_cont extends CI_Controller
{


public function index()
{
	$this->load->view('users/search_pannel');
}



public function userphoto()
{
	$uid=$this->input->post('uid');

 $config['upload_path'] = './userphoto/';

                $config['allowed_types'] = 'gif|jpg|png|jpeg';

                $this->load->library('upload',$config);

                if($this->upload->do_upload())
                {
$data=$this->upload->data();
$img_path=base_url('userphoto/'.$data['raw_name'].$data['file_ext']);

$this->load->model('upload_data');
$this->upload_data->userp($uid,$img_path);
}

else
{


$upload_error=$this->upload->display_errors();

$this->load->view('users/user_photo',compact('upload_error'));
	
	
}



}











}



?>