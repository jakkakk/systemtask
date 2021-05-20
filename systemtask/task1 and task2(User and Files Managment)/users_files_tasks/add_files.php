<?php include("header.php"); ?>
 <?php
$db_connection = new mysqli("localhost","root","","systemtasks");

$user_id=$_SESSION["user_id"];

if(isset($_POST['submit']))
{
	
$image_name= addslashes($_FILES['image']['name']);
 move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);
 $location="image/" . $_FILES["image"]["name"];		
	
	
$checkdata="INSERT INTO user_files (user_id,file_name,created_at)VALUES('".$user_id."', '".$image_name."', '".date('Y-m-d H:i:s')."')";
	//header("location:sa_complaints.php");
	
	$result = mysqli_query($db_connection,$checkdata);
	
	header("Location: files.php"); 
	
}

?>




<style>
.add_pro label {
    text-align: left !important;
}
.add_pro .form-group {
    margin-left: 0px !important;
    margin-right: 0px !important;
}
</style>
<!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="#">Home</a></li>
            <li><i class="icon_document_alt"></i>Add Files</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">Add Files</header>
            <div class="panel-body add_pro">
              <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                <div><?php ?></div>
                
                
                <div class="form-group col-md-6">
                  <label class="col-sm-4 control-label">File</label>
                  <div class="col-sm-8">
                    <input type="file" name="image" id="image" class="form-control round-input mt-btm_20" required>
                  </div>
                </div>
				
				
				
				<div class="form-group col-md-6">
                  <label class="col-sm-4  control-label">&nbsp</label>
                  <div class="col-sm-8">
                   &nbsp
                  </div>
                </div>
				
				
				<div class="clearfix"></div>
                <div class="form-group col-md-6">
                  <div class="col-lg-offset-11 col-lg-1">
                    <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>
      </div>
      
      <!-- Basic Forms & Horizontal Forms--> 
      
      <!-- Inline form--> 
      
      <!-- page end--> 
    </section>
  </section>
  <!--main content end--> 
  
</section>
<!-- container section end --> 
<!-- javascripts --> 
<?php include("footer.php"); ?>