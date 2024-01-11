<?php include('header.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp Form</title>
</head>
<body>
	



            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">





<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Get started with your free account</p>
	
	
	<?php echo form_open('users/signup'); ?>
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="username" class="form-control" placeholder="Full name" type="text" value="<?php echo set_value('username');?>">
       
    </div> 
      <?php echo form_error('username'); ?><!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="useremail" class="form-control" placeholder="Email address" type="email">
        
    </div> 
    <?php echo form_error('useremail'); ?><!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		
    	<input name="phone" class="form-control" placeholder="Phone number" type="text">
         
    </div>
    <?php echo form_error('phone'); ?> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Create password" type="password" name="password">
        
    </div> <!-- form-group// -->
       <?php echo form_error('password'); ?>                              
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" name="submit"> Create Account  </button>
    </div> <!-- form-group// -->      
                                                                    
</form>


</body>
</html>

<?php  include('footer.php'); ?>