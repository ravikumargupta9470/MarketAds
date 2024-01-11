<?php  include('header.php');

if($_SESSION['user']==null)
{
	return redirect('users/indi');
} ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add your bussiness.</title>
</head>
<body>
	<div class="container">
	<button class="btn btn-warning" onclick='window.location="<?php echo base_url('index.php/users/back_ac')  ;?>"'>Back</button></div>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%;img {width:100%;}">
                        <h2 class="py-3">Registration</h2>
                        <p>Adding your details come on online to encourage costomber to take your services.

</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Please fill with your details</h4>
                <?php echo form_open_multipart('users/buss_data');  ?>
                	<h5>Basic Information...</h5>
                    <div class="form-row">

                        <div class="form-group col-md-6">
                          <input id="Full Name" name="shopname" placeholder="Enter Your shop / Bussiness Name" class="form-control" type="text" required>
                        </div>
                        <div class="form-group col-md-6">
                          <input type="email" class="form-control" value="<?php echo $_SESSION['user']   ;?>"name="email" id="inputEmail4" placeholder="Email" readonly>
                        </div>
                      </div>


<br><hr>
<h5>Details of meeting / Consult or Timing...</h5>
<div class="form-row">
                        <div class="form-group col-md-6">
                          <input id="Full Name" name="time" placeholder="time eg.10:30am-9:30pm" class="form-control" type="text" required>
                        </div>
                        <div class="form-group col-md-6">
                                  
                                  <select id="inputState" name="days" class="form-control" required>
                                    <option selected>Choose Days...</option>
                                    <option value="MONDAY-FRIDAY"> MON-FRI</option>
                                    <option value="MONDAY-SATURDAY"> MON-SAT</option>
                                    <option value="SATURDYA-SUNDAY">SAT-SUN</option>
                                    <option value="Only SUNDAY"> ONLY SUN</option>
                                       <option value="ONLY SATURDAY"> ONLY SAT</option>
                                    <option value="ONLY FRIDAY"> ONLY FRI</option>
                                    <option value="DAILY"> DAILY</option>
                                    <option value="NONE">NONE</option>
                                     <option value="OTHER">OTHER</option>
                                   
                                  </select>
                        </div>
                      </div>
                      <br><hr>
                      <h5>Contact Details..</h5>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <input id="Full Name" name="address" placeholder="Address with pin code" class="form-control" type="text" required>
                        </div>
                        <div class="form-group col-md-4">
                          <input type="text" class="form-control"name="city" id="inputEmail4" placeholder="City .. Mumbai" required>
                        </div>
                        <div class="form-group col-md-4">
                          <input type="text" class="form-control"name="mobile" id="inputEmail4" placeholder="Mobile" required>
                        </div>
                      </div>
                      <br><hr>
<div class="form-row">
                        <div class="form-group col-md-6">
                        	
                        	<h5>Describe your services...(optinoal)</h>
                         <textarea class="form-control" name="about" placeholder=""></textarea>
                        </div>
                       
                      </div>




<div class="form-row">
	


	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Include the above in your HEAD tag -->
<script type="text/javascript">
	


function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function () {
        $('.image-upload-wrap').removeClass('image-dropping');
});


</script>
<style type="text/css">
	




	body {
  font-family: sans-serif;
  background-color: #eeeeee;
}

.file-upload {
  background-color: #ffffff;
  width: 600px;
  margin: 0 auto;
  padding: 20px;
}

.file-upload-btn {
  width: 100%;
  margin: 0;
  color: #fff;
  background: #1FB264;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #15824B;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.file-upload-btn:hover {
  background: #1AA059;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}

.file-upload-content {
  display: none;
  text-align: center;
}

.file-upload-input {
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #1FB264;
  position: relative;
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #1FB264;
  border: 4px dashed #ffffff;
}

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  text-transform: uppercase;
  color: #15824B;
  padding: 60px 0;
}

.file-upload-image {
  max-height: 200px;
  max-width: 200px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  width: 200px;
  margin: 0;
  color: #fff;
  background: #cd4535;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #b02818;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.remove-image:hover {
  background: #c13b2a;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}
</style>
</head>
<body>
    
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<div class="file-upload">
  <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>
  
<?php if(isset($upload_error))
{

echo $upload_error;

}  ?></p>
  <div class="image-upload-wrap">
    <input class="file-upload-input" type='file' name="userfile" onchange="readURL(this);" >

    <div class="drag-text">
      <h3>Drag and drop a file or select add Image</h3>
    </div>
  </div>
  <div class="file-upload-content">
    <img class="file-upload-image" src="#" alt="your image" />
    <div class="image-title-wrap">
      <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
    </div>
  </div>
</div>
    
    
   
    </body>
    </htm/>
</div>





                   
                    
                    <div class="form-row" style="text-align: center;">
                        <button type="submit"  name="submit" class="btn btn-danger container">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>







</body>
</html>