<?php include('header.php');  ?>
<!DOCTYPE html>
<html>
<head>
	<title>View_Blogs</title>
</head>
<body>

<div class="container" style="margin-top: 10px;">


<div class="row">


	<div class="col-md-6">

<img class="img img-thumbnail img-responsive" style="" src="<?php echo base_url('uploads/1.jpg') ;?>">

	</div>










<div class="col-md-6">


<h4 style="text-align: center;
    font-size: 40px;
    background-color: #ef0813;
    color: #efe1e1;
    border-radius: 5px;"><?php echo $r->Title;  ?></h4>




<h6>Shop_Id :<p style="font-size: 20px;
    font-family: cursive;
}"><?php echo $_SESSION['view_id'];  ?></p></h6>

<h6>Links :<p style="font-size: 20px;
    font-family: cursive;
}"><?php echo $r->links;  ?></p></h6>



<h6> Creation Date & Time :<p style="font-size: 20px;
    font-family: cursive;
}">


<?php echo $r->time;  ?></p></h6>


    


</div>











</div>
<br>
<div class="row">
	<div class="col-md-12">
	<p style="font-size: 20px;
    font-family: cursive;
}"><?php echo $r->content;  ?></p>





</div>

</div>



</body>
</html>















<?php include('footer.php');  ?>