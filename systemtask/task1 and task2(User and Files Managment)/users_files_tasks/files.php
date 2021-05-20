  <?php include("header.php"); ?>
  <?php
$db_connection = new mysqli("localhost","root","","systemtasks");
$user_id=$_SESSION["user_id"];
$checkdata="SELECT * FROM user_files where user_id ='$user_id'";
$result1 = mysqli_query($db_connection,$checkdata);
?>

 <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="#">Home</a></li>
            <li><i class="icon_document_alt"></i>View User Files</li>
          </ol>
        </div>
      </div>
      <div class="row">
	  <div><?php ?></div>
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading"> User Files </header>
			<ul class="button" style="margin:10px 0px;">
			
			<li style="display: inline-block;"><a href="add_files.php"><button type="button" class="btn btn-primary btn-md"> Add Files </button></a></li>
			
			
			</ul>
            <div class="table-responsive">
              <table class="table table-striped table-advance table-hover table table-bordered">
                <tbody>
                  <tr>
                    <th>S.NO</th>
                    <th>Files</th>
					<th>Created Date</th>
					<th>Delete</th>
                  </tr>
                  <?php $i=1; while($row = mysqli_fetch_array($result1)){  ?>
                  <tr>
                    <td><?php echo $i;   ?></td>
                    <td><a href="uploads/<?php echo $row['file_name'];?>" target="_blank"><?php echo $row['file_name'];?></a></td>
                    <td><?php echo $row['created_at'];?></td>
                 
                    <td><a href="delete_files.php?file_id=<?php echo $row['file_id'];?>" onclick="return checkDelete()"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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