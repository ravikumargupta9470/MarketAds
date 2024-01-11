<?php include('header.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Search result Data</title>
	<link href="<?=base_url('as/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?=base_url('as/css/style.css'); ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url('as/css/main.css') ;?>">
   
    
		<link href="<?=base_url('as/css/icon.css');?>" rel="stylesheet">
		<link href="<?=base_url('as/css/aos.css');?>" rel="stylesheet">
        <link href="<?=base_url('as/css/ihover.css');?>" rel="stylesheet">
        <link href="<?=base_url('as/css/icons.json');?>" rel="stylesheet">
</head>
<body>
	<div class="container">
<a class="btn btn-danger fa fa-users "  href="<?php echo base_url('index.php/users/indi') ;?> "> &nbsp Login</a>
</div>
	
	
	<div class="container "  style="background-image: url('<?=base_url('uploads/travel-hd-2560x1440.jpg');?>');">




		<?php echo form_open('users/search_verify');  ?>
  <fieldset style=" padding-top: 100px;padding-bottom: 100px;">
   
    <div class="row">

    	<div class="col-md-4">
    		<div class="form-group">
      <label>Search</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="item" aria-describedby="emailHelp" placeholder="Bars,Hotesl etc ">
      
     
    </div>
    	</div>
    	
    	<div class="col-md-4"><div class="form-group">
     <label>Location</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="city" aria-describedby="emailHelp" placeholder="Mumbai" required>
      
     
    </div></div>
    <div class="col-md-4"> <button type="submit" name="submit"  id="search_button" class="btn btn-info" style="margin-top: 30px;padding-right:65px;padding-left: 65px">Search</button></div>
    
   
    </div>
    
  
   
  </fieldset>
</form>


	</div>

<div class="container-fluid" >
	

   <?php if($r==null) :
   	echo "<div class='alert alert-dismissible alert-warning' style='text-align:center;'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button>
  <h4 class='alert-heading'>Warning!</h4>
  <p class='mb-0'>no data found.</p>
</div>";?>
   	<?php else: ?>
<?php foreach($r as $re):  ?>
<?php $uid=$re->id;  ?>


 <a href="<?php echo base_url().'index.php/users/show/'.$uid ;  ?>" style="text-decoration: none;color: #00050a;">
 	<div class="row" style="text-align: center;">
    <div class="col-md-6 img">
      <img src="<?php echo $re->photo; ?>"  alt="" style="width: 420px; height: 200px;" class="img-rounded">
    </div>
    <div class="col-md-6 details" style="padding: -20px;">
      <blockquote>
        <h5 style="font-size: 20px;font-family: emoji" class="btn btn-secondary"><?php echo $re->shopname;   ?></h5><br>

        <small><cite title="Source Title" style="font-size: 15px;
    font-family: fangsong;
}"><?php echo $re->address;   ?>  <i class="icon-map-marker"></i></cite></small>
      </blockquote>
      <p> <i class="fa fa-phone fa-3x" aria-hidden="true" style="font-size: 22px !important; color: #088a08;
"></i>&nbsp<?php echo $re->phone;   ?>
       <i class="fa fa-calendar fa-3x" aria-hidden="true" style="font-size: 22px !important;color: #d40d0d;
"></i>
       &nbsp<?php echo $re->days;   ?> <br>
        <i class="fa fa-clock-o fa-3x" aria-hidden="true"style="font-size: 22px !important;color: #1a0469;
"></i>&nbsp<?php echo $re->time;   ?>
      </p>
    </div>
  </div></a>
 
</div>

 <?php   endforeach;?>





	<?php  endif;










   ?>
 

</body>
</html>
<?php include('footer.php'); ?>