<?php
session_start();

$db_connection = new mysqli("localhost","root","","systemtasks");

$userrole   = $_POST['userrole'];

 $username   = $_POST['username'];

 $password = $_POST['user_password1'];
 
 //echo $password; exit;
$checkdata="SELECT * FROM user_management WHERE user_role='" . $userrole . "' and email_id='" . $username . "' and user_password = '". $password ."' ";
 
 //$query = $myPDO->query($checkdata);
 
 $result = mysqli_query($db_connection,$checkdata);
 
 $row  = mysqli_fetch_array($result);
 
 if(is_array($row)) {
	$_SESSION["user_id"] = $row['user_id'];
	$_SESSION["user_role"] = $row['user_role'];
	$_SESSION["first_name"] = $row['first_name'];
	$_SESSION["last_name"] = $row['last_name'];
	$_SESSION["email_id"] = $row['email_id'];
	echo 1; exit;
	} else {
	echo 0; exit;
	}
	
	?>