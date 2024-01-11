<?php include('header.php'); ?>






<!DOCTYPE html>
<html>
<head>
	<title>Search Pannel.</title>



</head>
<body>
	<div class="container">
<a class="btn btn-danger fa fa-users "  href="<?php echo base_url('index.php/users/indi') ;?> "> &nbsp Login</a>
</div>
	<div class="container-fluid "  style="background-image: url('<?=base_url('uploads/travel-hd-2560x1440.jpg');?>');">




		<?php echo form_open('users/search_verify');  ?>
  <fieldset style=" padding-top: 100px;padding-bottom: 100px;">
   
    <div class="row">

    	<div class="col-md-4">
    		<div class="form-group">
      <label>Search</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="item" aria-describedby="emailHelp" placeholder="Bars,Hotesl etc " >
      
     
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



	

</body>
</html>



<?php include('footer.php'); ?>