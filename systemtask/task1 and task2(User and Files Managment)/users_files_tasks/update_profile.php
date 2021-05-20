 <?php include("header.php"); ?>
 <?php
$db_connection = new mysqli("localhost","root","","systemtasks");

$user_id=$_SESSION["user_id"];

if(isset($_POST['submit']))
{
	
	
	
$checkdata="UPDATE user_management set first_name='".$_POST['first_name']."',last_name='".$_POST['last_name']."',email_id='".$_POST['email_id']."',mobile_number='".$_POST['mobile_number']."',address='".$_POST['address']."',city='".$_POST['city']."',state='".$_POST['state']."',country='".$_POST['country']."' WHERE user_id='$user_id'";	
	$result = mysqli_query($db_connection,$checkdata);
	
	header("Location: update_profile.php"); 
	
}

$checkdata1 = "SELECT * from user_management WHERE user_id='$user_id'";
$result1 = mysqli_query($db_connection,$checkdata1);
 
while($row = mysqli_fetch_array($result1)){
$user_role = $row['user_role'];	
$first_name = $row['first_name'];
$last_name = $row['last_name'];
$email_id = $row['email_id'];
$mobile_number = $row['mobile_number'];
$address = $row['address'];
$city = $row['city'];
$state = $row['state'];
$country = $row['country'];
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
            <li><i class="icon_document_alt"></i>Update Profile</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">Update Profile</header>
            <div class="panel-body add_pro">
              <form class="form-horizontal" method="post" action="">
                <div><?php ?></div>
                 
                <div class="form-group col-md-6">
                  <label class="col-sm-4 control-label">First Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="first_name" id="first_name" class="form-control round-input mt-btm_20" placeholder="First Name" value="<?php echo $first_name;?>" required>
                  </div>
                </div>
				
				 <div class="form-group col-md-6">
                  <label class="col-sm-4 control-label">Last Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="last_name" id="last_name" class="form-control round-input mt-btm_20" placeholder="Last Name" value="<?php echo $last_name;?>" required>
                  </div>
                </div>
             
				<div class="form-group col-md-6">
                  <label class="col-sm-4 control-label">Email Id</label>
                  <div class="col-sm-8">
                    <input type="text" name="email_id" id="email_id" class="form-control round-input mt-btm_20" placeholder="Email Id" value="<?php echo $email_id;?>" required>
                  </div>
                </div>
				
				<div class="form-group col-md-6">
                  <label class="col-sm-4 control-label">Mobile Number</label>
                  <div class="col-sm-8">
                    <input type="text" name="mobile_number" id="mobile_number" class="form-control round-input mt-btm_20" placeholder="Mobile Number" value="<?php echo $mobile_number;?>" required>
                  </div>
                </div>
				
				<div class="form-group col-md-6">
                  <label class="col-sm-4 control-label">Address</label>
                  <div class="col-sm-8">
                    <input type="text" name="address" id="address" class="form-control round-input mt-btm_20" placeholder="Address" value="<?php echo $address;?>" required>
                  </div>
                </div>
				
				<div class="form-group col-md-6">
                  <label class="col-sm-4 control-label">City</label>
                  <div class="col-sm-8">
                    <input type="text" name="city" id="city" class="form-control round-input mt-btm_20" placeholder="City" value="<?php echo $city;?>" required>
                  </div>
                </div>
               
				
				
                <div class="form-group col-md-6">
                  <label class="col-sm-4 control-label">State</label>
                  <div class="col-sm-8">
                    <input type="text" name="state" id="state" class="form-control round-input mt-btm_20" placeholder="State" value="<?php echo $state;?>" required>
                  </div>
                </div>
				
                <div class="form-group col-md-6">
                  <label class="col-sm-4 control-label">Country</label>
                  <div class="col-sm-8">
                    <input type="text" id="country" name="country" class="form-control round-input" placeholder="Country" value="<?php echo $country;?>" required>
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
                    <button type="submit" name="submit" class="btn btn-danger">Update</button>
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