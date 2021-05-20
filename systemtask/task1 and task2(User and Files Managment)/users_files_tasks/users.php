   <?php
$db_connection = new mysqli("localhost","root","","systemtasks");
$checkdata="SELECT * FROM user_management";
$result1 = mysqli_query($db_connection,$checkdata);
?>
<?php include("header.php"); ?>
 <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="#">Home</a></li>
            <li><i class="icon_document_alt"></i>View Users</li>
          </ol>
        </div>
      </div>
      <div class="row">
	  <div><?php ?></div>
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading"> Users </header>
			<ul class="button" style="margin:10px 0px;">
			<?php if($_SESSION["user_role"] != "User") {  ?>
			<li style="display: inline-block;"><a href="add_user.php"><button type="button" class="btn btn-primary btn-md"> Add User </button></a></li>
			<?php } ?>
			
			</ul>
            <div class="table-responsive">
              <table class="table table-striped table-advance table-hover table table-bordered">
                <tbody>
                  <tr>
                    <th>S.NO</th>
                    <th> User Role</th>
                    <th> First Name</th>
                    <th> Last Name</th>
                    <th>Email Id</th>
                    <th>Mobile Number</th>
					<th>Address</th>
					<th>City</th>
					<th>State</th>
					<th>Country</th>
					<?php if($_SESSION["user_role"] == "Super Admin") {  ?>
					<th>Edit</th>
					<?php } ?>
					<?php if($_SESSION["user_role"] == "Super Admin" || $_SESSION["user_role"] == "Admin") {  ?>
					<th>Delete</th>
					<?php } ?>
                  </tr>
                  <?php $i=1; while($row = mysqli_fetch_array($result1)){  ?>
                  <tr>
                    <td><?php echo $i;   ?></td>
                    <td><?php echo $row['user_role'];?></td>
                    <td><?php echo $row['first_name'];?></td>
                    <td><?php echo $row['last_name'];?></td>
					 <td><?php echo $row['email_id'];?></td>
					  <td><?php echo $row['mobile_number'];?></td>
					  <td><?php echo $row['address'];?></td>
					  <td><?php echo $row['city'];?></td>
					  <td><?php echo $row['state'];?></td>
					  <td><?php echo $row['country'];?></td>
					  <?php if($_SESSION["user_role"] == "Super Admin") {  ?>
               <td><a href="update_user.php?user_id=<?php echo $row['user_id'];?>"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
			   <?php } ?>
			   <?php if($_SESSION["user_role"] == "Super Admin" || $_SESSION["user_role"] == "Admin") {  ?>
			   <?php if($_SESSION["first_name"] != $row['first_name'])  { ?>
                    <td><a href="delete_user.php?user_id=<?php echo $row['user_id'];?>" onclick="return checkDelete()"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
			   <?php } ?>
			   <?php } ?>
				  </tr>
				  <?php $i++; } ?>
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>
    </section>
  </section>
  <!--main content end--> 
  
</section>
<?php include("footer.php"); ?>
<script language="JavaScript" type="text/javascript">



function checkDelete(id)



{



  



return confirm('Are you sure want to delete this record?');



}



</script>