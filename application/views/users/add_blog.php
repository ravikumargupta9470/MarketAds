<?php include('header.php'); 
$d=date('d/m/y h:i:s a',time());


 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Create New Blog</title>
    <style type="text/css">
        
        .form-inline .form-group { margin-right:10px; }
.well-primary {
color: rgb(255, 255, 255);
background-color: rgb(66, 139, 202);
border-color: rgb(53, 126, 189);
}
.glyphicon { margin-right:5px; }
    </style>
</head>
<body>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-file">
                            </span>POST NEW ARTICLE</a>
                        </h4>
                    </div>
                    <?php echo form_open_multipart('users/adding_blog');  ?>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="title" class="form-control" placeholder="Title" required />
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Content" rows="5" name="content" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category">
                                            Category</label>
                                        <select class="form-control" name="category" id="category">
                                            <option value="Articles">Articles</option>
                                            <option value="Advertisement">Ads</option>
                                            <option value="Notice"> Notice</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <?php if(isset($upload_error))
{

echo $upload_error;

}  ?>
                                    <div class="form-group">
                                        <label for="tags">
                                            Image</label>
                                        <input type="file" name="userfile" class="form-control" id="tags" placeholder="Image" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="well well-sm">
                                        <div class="input-group">
                                            <span class="input-group-addon">www.jquery2dotnet.com/</span>
                                            <input type="text" name="links" class="form-control" placeholder="Custom url / links" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="well well-sm well-primary">
                                        <p style="    color: #080808;">Time&Data</p>
                                        <div class="form-group">
                                            <input type="text" name="time" class="form-control"  placeholder="Date" value="<?php echo $d;?>" readonly/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <button type="submit"  name="submit" class="btn btn-success btn-sm">
                                                <span class="glyphicon glyphicon-floppy-disk"></span>Save</button>
                                            
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
           
            </div>
        </div>
    </div>
</div>


</body>

<?php include('footer.php');  ?>
</html>