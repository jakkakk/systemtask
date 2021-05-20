<?php
$db_connection = new mysqli("localhost","root","","systemtasks");
$user_id = $_GET['user_id'];
$checkdata = "DELETE from user_management where user_id ='$user_id'";
$result = mysqli_query($db_connection,$checkdata);
header('location:users.php');
?>