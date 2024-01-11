<?php include('header.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>User Details</title>
</head>
<body>
<div class="container">
	
<a class="btn btn-dark fa fa-arrow-circle-left "  href="<?php echo base_url('index.php/users/back_ac') ;?> "> &nbsp Back</a>

</div>

<div class="container " style="text-align: center;">

<h1 style="font-family: cursive;" ><?php echo $q->shopname; ?></h1>
<h6 style="font-size: 20px;
    font-family: monospace;"><?php echo $q->address; ?></h6>

</div>













<div class="container-fluid">
	<img  src="<?php echo $q->photo;?>"  class="img img-thumbnail"/ style="height: 35em; width: 100em">
</div>


	




	
	
</div>




<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="box">
    <div class="container ">
     	<div class="row" style="margin:10px;padding:10px;">
			 
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
                        
                        <i class="fa fa-phone fa-3x" aria-hidden="true"></i>
                        
						<div class="title">
							<h4>Phone</h4>
						</div>
                        
						<div class="text">
							<span><?php echo $q->phone; ?></span>
						</div>
                        
						
                        
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
					    
					    <i class="fa fa-clock-o fa-3x" aria-hidden="true"></i>
                    
						<div class="title">
							<h4>Time</h4>
						</div>
                        
						<div class="text">
							<span><?php echo $q->time; ?></span>
						</div>
                        
						
                        
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
                        
                        <i class="fa fa-calendar fa-3x" aria-hidden="true"></i>
                        
						<div class="title">
							<h4>Days</h4>
						</div>
                        
						<div class="text">
							<span><?php echo $q->days; ?></span>
						</div>
                        
						
                        
					 </div>
				</div>	 
				
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
                        
                        <i class="fa fa-home fa-3x" aria-hidden="true"></i>
                        
						<div class="title">
							<h4>Address</h4>
						</div>
                        
						<div class="text">
							<span><?php echo $q->address; ?> </span>
							<span><?php echo $q->city; ?></span>
						</div>
                        
						
                        
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
					    
					    <i class="fa fa-google-plus fa-3x" aria-hidden="true"></i>
                    
						<div class="title">
							<h4>Email</h4>
						</div>
                        
						<div class="text">
							<span><?php echo $q->user_id; ?></span>
						</div>
                        
						
                        
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
					<div class="box-part text-center">
                        
                        <i class="fa fa-whatsapp fa-3x" aria-hidden="true" ></i>
                        
						<div class="title">
							<h4>whatsapp</h4>
						</div>
                        
						<div class="text">
							<span><?php echo $q->phone; ?></span>
						</div>
                        
						
                        
					 </div>
				</div>
		
		</div>		
    </div>
</div>

<div class="jumbotron">
  <h1 class="display-3">About Us</h1>
  
  <hr class="my-4">
  <p><?php echo $q->About; ?></p>
  
</div>


<div class="container">

<a  style="padding-left:30px;padding-right:30px;" href="<?php echo base_url('index.php/users/add_blog');  ?>"  class="btn btn-warning"><i class="fa fa-plus"></i> &nbsp Add Blog</a>

	</div>


</body>

</html>