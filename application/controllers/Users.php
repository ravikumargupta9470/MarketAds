<?php
class users extends CI_Controller
{

public function indi()
{


	$this->load->view('users/login');
}



public function loginverify()
{

$this->form_validation->set_rules('username','Username','required');
$this->form_validation->set_rules('password','Password','required|min_length[8]');
$this->form_validation->set_error_delimiters('<div class="btn btn-danger">','</div>');
if($this->form_validation->run())
{
if(isset($_POST['submit']))
{

$user=$_POST['username'];
$_SESSION['user']=$user;

$pass=$_POST['password'];
$_SESSION['pass']=$pass;
$this->load->model('admin_verify');
$r=$this->admin_verify->index($user,$pass);

 if($r==1)
{
echo "<div class='alert alert-dismissible alert-warning' style='text-align:center;'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button>
  <h4 class='alert-heading'>Warning!</h4>
  <p class='mb-0'>Sorry username is not found.</p>
</div>";
$this->load->view('users/login');

}


else
{
	
$this->load->model('admin_verify');
$r=$this->admin_verify->index2($user,$pass);

	$this->load->model('upload_data');
$t=$this->upload_data->accounts($user);

$this->load->view('users/account_info',['r'=>$r]);

$this->load->view('users/accounts',['t'=>$t]);
	

	}

	

}




}

else
{


	$this->load->view('users/login');
}



	



}





public function search_verify()
{
$data=array();
$data['item']=$this->input->post('item');
$data['city']=$this->input->post('city');

	


	
$this->load->model('search_model');
$r=$this->search_model->index($data);
$this->load->view('users/show_search',['r'=>$r]);


}

public function show1()

{
	$uid=$_SESSION['view_id'];

	$this->load->model('search_model');
	$q=$this->search_model->show_profile($uid);
	$this->load->model('search_model');
	$r=$this->search_model->show_blog($uid);

	
	$this->load->view('users/bussiness_details1',['q'=>$q]);


$this->load->view('users/blog1',['r'=>$r]);
}




public function show($id)

{
	
	$this->load->model('search_model');
	$q=$this->search_model->show_profile($id);

	$this->load->model('search_model');
	$r=$this->search_model->show_blog($id);

	$this->load->view('users/bussiness_details',['q'=>$q]);

$this->load->view('users/blog',['r'=>$r]);

}
public function index()
{
	$this->load->view('users/search_pannel');
}
public function list()
{
$this->load->view('users/signup');
}

public function list1()
{
$this->load->view('users/signup1');
}


public function signup()
{

$this->form_validation->set_rules('username','Username','required');
$this->form_validation->set_rules('useremail','Useremail','required');
$this->form_validation->set_rules('phone','Phone Number','required|min_length[10]');
$this->form_validation->set_rules('password','Password','required|min_length[8]');
$this->form_validation->set_error_delimiters('<div class="btn btn-danger">','</div>');
if($this->form_validation->run()):

$data=array();
$data['username']=$this->input->post('username');
$data['useremail']=$this->input->post('useremail');
	
	$data['phone']=$this->input->post('phone');
	
	$data['password']=$this->input->post('password');


$this->load->model('signup');
	$t=$this->signup->check($data);

if($t==null):



	$this->load->model('signup');
	$q=$this->signup->index($data);
	if($q==1):
	
		echo '<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Well done!</strong> Your account is successfully  created.
</div> ';
	
$this->load->view('users/login');

	
	
	
endif;
	

else:



echo '<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Oh snap!</strong> Sorry Username is already used,Please try other username.
</div> ';

$this->load->view('users/signup')	;
endif;


else:

$this->load->view('users/signup')	;
	

endif;



}







public function signup1()
{

$this->form_validation->set_rules('username','Username','required');
$this->form_validation->set_rules('useremail','Useremail','required');
$this->form_validation->set_rules('phone','Phone Number','required|min_length[10]');
$this->form_validation->set_rules('password','Password','required|min_length[8]');
$this->form_validation->set_error_delimiters('<div class="btn btn-danger">','</div>');
if($this->form_validation->run()):

$data=array();
$data['username']=$this->input->post('username');
$data['useremail']=$this->input->post('useremail');
	
	$data['phone']=$this->input->post('phone');
	
	$data['password']=$this->input->post('password');


$this->load->model('signup');
	$t=$this->signup->check1($data);
echo $t;

if($t==1):



	$this->load->model('signup');
	$q=$this->signup->index1($data);
	if($q==1):
	
		echo '<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Well done!</strong> Your password is changed successfully.
</div> ';
	
$this->load->view('users/login');

	
	

	
endif;
	

else:



echo '<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Oh snap!</strong> Sorry Username is not found.
</div> ';

$this->load->view('users/signup1')	;
endif;


else:
$this->load->view('users/signup1')	;
endif;

}



public function add_bus()
{

	$this->load->view('users/add_buss');
}
public function buss_data()
{

	$data2=array();
	
$data2['shopname']=$this->input->post('shopname');

$data2['days']=$this->input->post('days');
$data2['email']=$this->input->post('email');


$data2['time']=$this->input->post('time');

$data2['mobile']=$this->input->post('mobile');

$data2['city']=$this->input->post('city');

$data2['address']=$this->input->post('address');

$data2['about']=$this->input->post('about');


  $config['upload_path'] = './uploads/';

                $config['allowed_types'] = 'gif|jpg|png|jpeg';

                $this->load->library('upload',$config);

                if($this->upload->do_upload())
                {
$data=$this->upload->data();
$img_path=base_url('uploads/'.$data['raw_name'].$data['file_ext']);

$this->load->model('upload_data');
$this->upload_data->data($data2,$img_path);


                }


else
{


$upload_error=$this->upload->display_errors();

$this->load->view('users/add_buss',compact('upload_error'));
	
	
}






}






public function back_ac()
{

$user=$_SESSION['user'];

$pass=$_SESSION['pass'];
$this->load->model('admin_verify');
$r=$this->admin_verify->index2($user,$pass);
$this->load->model('upload_data');
$t=$this->upload_data->accounts($user);
	
$this->load->view('users/account_info',['r'=>$r]);
$this->load->view('users/accounts',['t'=>$t]);
}
public function logout()
{

$_SESSION['user']="";
$this->load->view("users/login");


}


public function view_blog($uid)
{

$this->load->model('delete_blog');
$r=$this->delete_blog->con($uid);

$this->load->view('users/view_blog',['r'=>$r]);
}


public function delete_account($uid)
{
$user=$_SESSION['user'];
$pass=$_SESSION['pass'];
$this->load->model('upload_data');
$r=$this->upload_data->delete($uid);
if($r==1)
{

$this->load->model('admin_verify');
$r=$this->admin_verify->index2($user,$pass);

	$this->load->model('upload_data');
$t=$this->upload_data->accounts($user);

$this->load->view('users/account_info',['r'=>$r]);

$this->load->view('users/accounts',['t'=>$t]);


}

}



public function add_blog()
{
$this->load->view('users/add_blog');
	
}

public function user_photo($uid)
{


	$this->load->view('users/user_photo',['uid'=>$uid]);
}


public function delete_blog1($id)
{

$this->load->model('delete_blog');
$r=$this->delete_blog->blog($id);
if($r==1)
{

	return redirect('users/show1');
}

}





public function adding_blog()
{
	$data2=array();
$data2['title']=$this->input->post('title');
$data2['content']=$this->input->post('content');
$data2['cat']=$this->input->post('category');
$data2['time']=$this->input->post('time');
$data2['links']=$this->input->post('links');





  $config['upload_path'] = './uploads/';

                $config['allowed_types'] = 'gif|jpg|png|jpeg';

                $this->load->library('upload',$config);

                if($this->upload->do_upload())
                {
$data=$this->upload->data();
$img_path=base_url('uploads/'.$data['raw_name'].$data['file_ext']);

$this->load->model('upload_data');
$this->upload_data->data_blog($data2,$img_path);


                }


else
{


$upload_error=$this->upload->display_errors();

$this->load->view('users/add_blog',compact('upload_error'));
	
	
}




}




}

?>