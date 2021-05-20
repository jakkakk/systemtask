<?php
$db_connection = new mysqli("localhost","root","","systemtasks");
$file_id = $_GET['file_id'];
$checkdata = "DELETE from user_files where file_id ='$file_id'";
$result = mysqli_query($db_connection,$checkdata);
header('location:files.php');
?>