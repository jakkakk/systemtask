<!DOCTYPE html>
<html lang="en">
<head>
<title>::Users and Files MANAGEMENT SYSTEM::</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="">
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600" rel="stylesheet">
<!--css start here -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<!-- pop up plugins -->
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>
<!--css start here -->
<!--script start here -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--script start here -->

</head>
<style>
body  {
  
  background-color: skyblue;
}
</style>
<body>


<div class="col-lg-6 bg-white" style="margin-left: 330px;">
    <div id="log_sign">
      <div class="lu_login lu_singh"> 
        <!--<h1 class="text-center">&nbsp;</h1>-->
        <h2 class="text-center">Users and Files Management</h2>
        
        <h4 class="text-center"> Log into your account</h4>
		<div id="login-response" style="font-size:80%;"></div>
        <form id="login-form" name="login-form" method="post">
		
		<div class="form-group left-addon  has-feedback lu_frm">
            <select class="form-control" id="login_role" name="login_role">
			<option value="">Select Role</option>
			<option value="Super Admin">Super Admin</option>
			<option value="Admin">Admin</option>
			<option value="User">User</option>
			
			
			</select>
            
 <span class="all_errors"><p id="RoleErr1" class="Error_msge" style="font-size:12px; padding:0px;"></p></span>			</div>
		
		
		
          <div class="form-group left-addon  has-feedback lu_frm">
            <input type="text" class="form-control" id="login_username" name="login_username" placeholder="User Email" />
            <span class="fa fa-user form-control-feedback" aria-hidden="true"></span>
 <span class="all_errors"><p id="NameErr1" class="Error_msge" style="font-size:12px; padding:0px;"></p></span>			</div>
          <div class="form-group left-addon has-feedback lu_frm">
            <input type="password" class="form-control" id="login_password" name="login_password" placeholder="Password">
            <span class="fa fa-unlock-alt form-control-feedback"></span> 
			<span class="all_errors"><p id="PasswordErr5" class="Error_msge" style="font-size:12px; padding:0px;"></p></span></div>
         
          <div class="clearfix"></div>
          <div class="form-group">
            <input type="submit" class="btn btn-info lu_lo-subit" value="Login" id="login_submit">
          </div>
         
        </form>
      </div>
    </div>
	</div>


<script>

$(document).ready(function(e) {
	

	$("#login_submit").click(function(e){

	e.preventDefault();

var userrole = $("#login_role").val();

var username = $("#login_username").val();

	var user_password1 = $("#login_password").val();

//alert(user_email);


if (userrole == "")

	{

	$("#RoleErr1").html("Please Select Your Role").css("color", "red");

	$("#login_role").focus();

	return false;

	}

	else{

	$("#RoleErr1").html("");

	}



	

	if (username == "")

	{

	$("#NameErr1").html("Enter Email").css("color", "red");

	$("#login_email").focus();

	return false;

	}

	else{

	$("#NameErr1").html("");

	}

	if (user_password1 == "")

	{

	$("#PasswordErr5").html("Enter Password").css("color", "red");

	$("#login_password").focus();

	return false;

	}

	else{

	$("#PasswordErr5").html("");

	}


	$.ajax({

	type: "POST",

	url: 'userlogin.php',

	data: {userrole:userrole,username:username,user_password1:user_password1},

	success:function(data)

	{

	if(data == 0)

	{

    $("#login-response").html("Invalid User Name or Password").css("color", "red");

  $('#login-form')[0].reset();

	

	}

	else{

	
	 window.location.href = 'update_profile.php';

	}

	},

	error:function()

	{

	

	}

	});

	

	});
	
	});

</script>



</body>
</html>
