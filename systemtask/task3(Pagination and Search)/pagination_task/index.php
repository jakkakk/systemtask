<?php 
include('header.php');
?>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<title>Pagination</title>

<div class="container">
	<h2>Pagination</h2>		
	<?php
	include_once("db_connect.php");
	$showRecordPerPage = 10;
	if(isset($_GET['page']) && !empty($_GET['page'])){
		$currentPage = $_GET['page'];
	}else{
		$currentPage = 1;
	}
	$startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
	$totalEmpSQL = "SELECT * FROM doctors";
	$allEmpResult = mysqli_query($conn, $totalEmpSQL);
	$totalEmployee = mysqli_num_rows($allEmpResult);
	$lastPage = ceil($totalEmployee/$showRecordPerPage);
	$firstPage = 1;
	$nextPage = $currentPage + 1;
	$previousPage = $currentPage - 1;
	$empSQL = "SELECT doctor_id,doctor_name,specialization,city,postal_code,country 
	FROM `doctors` LIMIT $startFrom, $showRecordPerPage";
	$empResult = mysqli_query($conn, $empSQL);		
	?>	
	<input id="myInput" type="text" placeholder="Search.." size="100">
<br><br>
	<table class="table ">
	<thead> 
		<tr> 
			<th>Doctor ID</th> 
			<th>Doctor Name</th> 
			<th>Specialization</th>
			<th>City</th>
			<th>Postal Code</th>
			<th>Country</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr> 
	</thead> 
	<tbody id="myTable"> 
		<?php 
		while($emp = mysqli_fetch_assoc($empResult)){
		?>
			<tr> 
				<th scope="row"><?php echo $emp['doctor_id']; ?></th> 
				<td><?php echo $emp['doctor_name']; ?></td> 
				<td><?php echo $emp['specialization']; ?></td> 
				<td><?php echo $emp['city']; ?></td> 
				<td><?php echo $emp['postal_code']; ?></td> 
				<td><?php echo $emp['country']; ?></td> 
				 <td><a href="#">Edit</a></td>
				  <td><a href="#" style="color:red;">Delete</a></td>
			</tr> 
		<?php } ?>
	</tbody> 
	</table>
	<center><nav aria-label="Page navigation">
	  <ul class="pagination">
	  <?php if($currentPage != $firstPage) { ?>
		<li class="page-item">
		  <a class="page-link" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">
			<span aria-hidden="true">First</span>			
		  </a>
		</li>
		<?php } ?>
		<?php if($currentPage >= 2) { ?>
			<li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
		<?php } ?>
		<li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>
		<?php if($currentPage != $lastPage) { ?>
			<li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
			<li class="page-item">
			  <a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">
				<span aria-hidden="true">Last</span>
			  </a>
			</li>
		<?php } ?>
	  </ul>
	</nav></center>
	

</div>
<?php include('footer.php');?>
