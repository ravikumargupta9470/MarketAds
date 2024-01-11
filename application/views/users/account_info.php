<?php  include('header.php');    
if($_SESSION['user']==null)
{
	return redirect('users/indi');
}
$uid=$r->id;
$_SESSION['uid']=$uid;

  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Account Details</title>
</head>
<body>

	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

            <div class="container">    
                  <div class="row">
                      <div class="panel panel-default">
                      <div class="panel-heading">  <h4 >User Profile</h4>
                      	<button class="btn btn-danger" onclick='window.location="<?php echo base_url('index.php/users/logout')  ;?>"'>Logout</button>



                      </div>
                       <div class="row">
                      <a href="<?php echo base_url().'index.php/users/user_photo/'.$uid ;  ?>" >
                        <div class="col-md-4" >


 

<?php if($r->photo==null):?>
  <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 


<?php else:  ?>
<img alt="User Pic" src="<?php echo $r->photo  ;?>" id="profile-image1" class="img-circle img-responsive" style="height: 180px;width:auto;" > 

<?php endif; ?>


                     
                     
                 
                      </div></a>
                      <div class="col-md-8" >
                          <div class="container" >
                            <h2><?php echo $r->name;   ?></h2>
                           
                          
                           
                          </div>
                           <hr>
                          <ul class="container details" >
                            <li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span><?php echo $r->phone;   ?></p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span><?php echo $r->username;   ?></p></li>
                          </ul>
                          <hr>
                          <div class="col-sm-5 col-xs-6 tital " > <button onclick='window.location="<?php echo base_url('index.php/users/add_bus')  ;?>"'><i class="fa fa-plus" style="color: green; font-size: 30px !important;"></i>&nbsp Add your Bussiness Profile Free.</button></div>
                      </div>
                </div>
            </div>
            </div>














</body>

</html>