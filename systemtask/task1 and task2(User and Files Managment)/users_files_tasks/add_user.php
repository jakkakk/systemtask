 <?php
$db_connection = new mysqli("localhost","root","","systemtasks");

if(isset($_POST['submit']))
{
$checkdata="INSERT INTO user_management (user_role,first_name,last_name,email_id,mobile_number,address,city,state,country,user_password,created_at)VALUES('".$_POST['user_role']."', '".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['email_id']."', '".$_POST['mobile_number']."','".$_POST['address']."','".$_POST['city']."','".$_POST['state']."','".$_POST['country']."','".$_POST['user_password']."', '".date('Y-m-d H:i:s')."')";
	//header("location:sa_complaints.php");
	
	$result = mysqli_query($db_connection,$checkdata);
	
	header("Location: users.php"); 
	
}

?>



<?php include("header.php"); ?>
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
            <li><i class="icon_document_alt"></i>Add User</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">Add User</header>
            <div class="panel-body add_pro">
              <form class="form-horizontal" method="post" action="">
                <div><?php ?></div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Select User Role</label>
                  <div class="col-sm-10">
                    <select class="form-control round-input m-bot15" id="user_role" name="user_role" required>
                      <option value="">Select Role</option>
			<option value="Super Admin">Super Admin</option>
			<option value="Admin">Admin</option>
			<option value="User">User</option>
					  
                      
                    </select>
                  </div>
                </div>
                
                <div class="form-group col-md-6">
                  <label class="col-sm-4 control-label">First Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="first_name" id="first_name" class="form-control round-input mt-btm_20" placeholder="First Name" required>
                  </div>
                </div>
				
				 <div class="form-group col-md-6">
                  <label class="col-sm-4 control-label">Last Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="last_name" id="last_name" class="form-control round-input mt-btm_20" placeholder="Last Name" required>
                  </div>
                </div>
             
				<div class="form-group col-md-6">
                  <label class="col-sm-4 control-label">Email Id</label>
                  <div class="col-sm-8">
                    <input type="text" name="email_id" id="email_id" class="form-control round-input mt-btm_20" placeholder="Email Id" required>
                  </div>
                </div>
				
				<div class="form-group col-md-6">
                  <label class="col-sm-4 control-label">Mobile Number</label>
                  <div class="col-sm-8">
                    <input type="text" name="mobile_number" id="mobile_number" class="form-control round-input mt-btm_20" placeholder="Mobile Number" required>
                  </div>
                </div>
				
				<div class="form-group col-md-6">
                  <label class="col-sm-4 control-label">Address</label>
                  <div class="col-sm-8">
                    <input type="text" name="address" id="address" class="form-control round-input mt-btm_20" placeholder="Address" required>
                  </div>
                </div>
				
				<div class="form-group col-md-6">
                  <label class="col-sm-4 control-label">City</label>
                  <div class="col-sm-8">
                    <input type="text" name="city" id="city" class="form-control round-input mt-btm_20" placeholder="City" required>
                  </div>
                </div>
               
				
				
                <div class="form-group col-md-6">
                  <label class="col-sm-4 control-label">State</label>
                  <div class="col-sm-8">
                    <input type="text" name="state" id="state" class="form-control round-input mt-btm_20" placeholder="State" required>
                  </div>
                </div>
				
                <div class="form-group col-md-6">
                  <label class="col-sm-4 control-label">Country</label>
                  <div class="col-sm-8">
                    <input type="text" id="country" name="country" class="form-control round-input" placeholder="Country" required>
                  </div>
                </div>
				
				<div class="form-group col-md-6">
                  <label class="col-sm-4 control-label">Password</label>
                  <div class="col-sm-8">
                    <input type="password" id="user_password" name="user_password" class="form-control round-input" placeholder="Password" required>
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