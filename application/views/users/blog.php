<div class="container">




<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

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
				<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Id</th>
							<th>Photo</th>
							<th>Title</th>
							<th>Content</th>
							<th>Creation date & time</th>
							<th>Links</th>
							<th>View</th>
							
						
						</tr>
					</thead>


					
					
					<tbody style="text-align: center;">

						<?php if($r==null):
							echo "<div class='alert alert-dismissible alert-warning' style='text-align:center;'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button>
  <h4 class='alert-heading'>Warning!</h4>
  <p class='mb-0'>no data found.</p>
</div>";

					  ?>

					  <?php else: ?>
					  	<?php foreach($r as $re):  ?>
					  	<?php $uid=$re->id; ?>	
						<tr>
							<td><?php echo $re->id  ;?></td>
							<td><img src="<?php echo $re->photo;  ?>" class="img img-thumbnail img-responsive" alt="Photo" ></td>
							<td style="color: red; color: #e01111; font-size: x-large;"><?php echo $re->Title  ;?></td>
							<td><?php echo $re->content  ;?></td>
							<td><?php echo $re->time  ;?></td>
							<td><?php echo $re->links  ;?></td>

							
							<td><a  href="<?php echo base_url().'index.php/users/view_blog/'.$uid ;  ?>"  class="btn btn-success">View</a></td>
						</tr>
						<?php   endforeach;?>





	<?php  endif; ?>
						
						
		
					</tbody>
				</table>
				
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
	    
				</div>
</div>	
</body>
</html>


	</div>