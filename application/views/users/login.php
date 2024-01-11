<?php  include('header.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Pannel.</title>



</head>
<body>
	<div class="container">
  
<a class="btn btn-warning fa fa-arrow-circle-up "  href="<?php echo base_url('index.php/search_cont') ;?> "> &nbspGo for Search.. </a>

</div>

	<div class="container " id="loginform">




		<?php echo form_open('users/loginverify');  ?>
  <fieldset>
    <legend>Admin Login</legend>
    <div class="form-group row">
      
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" placeholder="Enter email" <?php echo set_value('username');?>>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      <?php echo form_error('username'); ?>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" <?php echo set_value('password');?>>
       <?php echo form_error('password'); ?>
    </div>
   
    <button type="submit" name="submit" class="btn btn-primary fa fa-arrow-right">Submit</button>&nbsp<br><br>
  
  </fieldset>
</form>
<button type="button" name="login" class="btn btn-success fa fa-hand-o-right">&nbsp forget password.</button>

  <button type="button" name="login" class="btn btn-info fa fa-users" onclick='window.location="<?php echo base_url('index.php/users/list')  ;?>"'>&nbsp Create a new account</button>
	</div>
  


	

</body>
<?php  include('footer.php');?>
</html>