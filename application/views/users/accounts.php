






<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>DataTables example - Bootstrap 3</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript">
	
$(document).ready(function() {
	$('#example').DataTable();
} );
$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});
	</script>
	<style type="text/css">
		$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});
	</style>
</head>
<body>
 
<div class="container">

    <div class="row">
    	<div class="col-md-12">
				<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center; font-style: bold;">
					<thead>
						<tr>
							<th>Id</th>
							<th>photo</th>
							<th>Name</th>
							<th>Phone</th>
							<th>UserId</th>
							<th>Action</th>
							<th>Action2</th>
							
						</tr>
					</thead>
					<?php if($t==null):
							echo "<div class='alert alert-dismissible alert-warning' style='text-align:center;'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button>
  <h4 class='alert-heading'>Warning!</h4>
  <p class='mb-0'>no data found.</p>
</div>";

					  ?>

					  <?php else: ?>
					  	<?php foreach($t as $te):  ?>
					  	<?php $uid=$te->id; 
					  	$_SESSION['view_id']=$uid;

					  	?>	
					<tbody>
						<tr>
							<td><?php echo $te->id;  ?></td>
							<td><img class="img img-thumbnail" style="height: 60px;width: 150px" src="<?php echo $te->photo; ?>" /></td>
							<td><?php echo $te->shopname;  ?></td>
							<td><?php echo $te->phone;  ?></td>
						<td><?php echo $te->user_id;  ?></td>
							<td><a  href="<?php echo base_url().'index.php/users/delete_account/'.$uid ;  ?>"  class="btn btn-danger">Delete</a></td>
							<td><a  href="<?php echo base_url().'index.php/users/show1/'.$uid ;  ?>"  class="btn btn-success">View</a></td>
							
						</tr>
						



					</tbody>
					<?php   endforeach;?>





	<?php  endif; ?>
				</table>
			</div>
				
	    
				</div>
</div>	
</body>
<?php include('footer.php');  ?>
</html>


