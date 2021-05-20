<!DOCTYPE html>
<?php session_start();  ?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="dashboard/img/favicon.png">
<title>Users and Files Management</title>

<!-- Bootstrap CSS -->
<link href="dashboard/css/bootstrap.min.css" rel="stylesheet">
<!-- bootstrap theme -->
<link href="dashboard/css/bootstrap-theme.css" rel="stylesheet">
<!--external css-->
<!-- font icon -->
<link href="dashboard/css/elegant-icons-style.css" rel="stylesheet" />
<link href="dashboard/css/font-awesome.min.css" rel="stylesheet" />
<!-- date picker -->

<!-- color picker -->

<!-- Custom styles -->
<link href="dashboard/css/style.css" rel="stylesheet">
<link href="dashboard/css/style-responsive.css" rel="stylesheet" />

<script src="dashboard/js/jquery.js"></script> 
<script src="dashboard/js/jquery-1.8.3.min.js"></script> 
<script src="dashboard/js/bootstrap.min.js"></script> 
<script src="dashboard/js/jquery.scrollTo.min.js"></script> 
<script src="dashboard/js/jquery.nicescroll.js" type="text/javascript"></script> 
<script src="dashboard/js/scripts.js"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
	
	<link rel="stylesheet" type="text/css" media="all" href="dashboard/css/daterangepicker.css" />
<!--for datepicker start -->
<script src="dashboard/js/jquery.js"></script>

<script type="text/javascript" src="dashboard/js/moment.js"></script>
<script type="text/javascript" src="dashboard/js/daterangepicker.js"></script>
<!--for datepicker start -->
<style type="text/css">
.demo {
	position: relative;
}
.demo i {
	position: absolute;
	bottom: 10px;
	right: 24px;
	top: auto;
	cursor: pointer;
}
</style>
</head>

<body>

<!-- container section start -->
<section id="container" class="">
  <header class="header dark-bg">
    <div class="toggle-nav">
      <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
    </div>
    
    <!--logo start--> 
    <a href="#" class="logo">USERS AND FILES MANAGEMENT SYSTEM</span></a> 
    <!--logo end-->
    
    <div class="top-nav notification-row"> 
      <!-- notificatoin dropdown start-->
      <ul class="nav pull-right top-menu">
        
        <!-- user login dropdown start-->
        <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> 
		<!--<span class="profile-ava"> <img alt="" src="img/avatar1_small.jpg"> </span>-->
		<span class="welcome">Welcome</span> <span class="username"><?php echo ucwords($_SESSION["first_name"]); ?></span> <b class="caret"></b> </a>
          <ul class="dropdown-menu extended logout">
            <div class="log-arrow-up"></div>
            <!--<li class="eborder-top"> <a href="#"><i class="icon_profile"></i> My Profile</a> </li>
            <li> <a href="#"><i class="icon_mail_alt"></i> Change Password</a> </li>-->
            <li> <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a> </li>
          </ul>
        </li>
        <!-- user login dropdown end -->
      </ul>
      <!-- notificatoin dropdown end--> 
    </div>
  </header>
  <!--header end--> 
  
  <!--sidebar start-->
  <aside>
    <div id="sidebar"  class="nav-collapse "> 
      <!-- sidebar menu start-->
      <ul class="sidebar-menu">
	  <li class=""> <a class="" href="update_profile.php"><i class="fa fa-user" aria-hidden="true"></i> <span>Update Profile</span> </a> </li>
		
		<li class=""> <a class="" href="users.php"><i class="fa fa-users" aria-hidden="true"></i> <span>User Management</span> </a> </li>
		
		
		
		
		<li class=""> <a class="" href="files.php"><i class="fa fa-file" aria-hidden="true"></i> <span>Files Management</span> </a> </li>
		
		
      </ul>
      <!-- sidebar menu end--> 
    </div>
  </aside>
  <!--sidebar end--> 