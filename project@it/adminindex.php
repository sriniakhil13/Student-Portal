<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>College Portal</title>
	<link rel="stylesheet" type="text/css" href="indexstyle.css">
	<script type="text/javascript" src="valid.js"></script>
	<script type="text/javascript">
		function register(){
			document.getElementById("main").style.display= "none";
			document.getElementById("admin").style.display="none";
			
			document.getElementById("register").style.display= "block";
			document.getElementById("Forgot").style.display= "none";
			document.getElementById("login").style.display="none";
		}
		function signin(){
			document.getElementById("main").style.display= "none";
			document.getElementById("admin").style.display="none";
			document.getElementById("Forgot").style.display= "none";
			document.getElementById("register").style.display= "none";
			document.getElementById("login").style.display="block";
		}
		function forgot_password(){
			document.getElementById("main").style.display= "none";
			document.getElementById("admin").style.display="none";
			document.getElementById("login").style.display="none";
			document.getElementById("Forgot").style.display= "block";
			document.getElementById("login").style.display="none";
		}
		// function showmain()
		// {
		// 	document.getElementById("main").style.display= "block";
		// 	document.getElementById("admin").style.display="none";
		// 	document.getElementById("login").style.display="none";
		// 	document.getElementById("Forgot").style.display= "none";
		// 	document.getElementById("register").style.display= "none";

		// }
		// function showstudent()
		// {
		// 	document.getElementById("main").style.display= "none";
		// 	document.getElementById("admin").style.display="none";
		// 	document.getElementById("login").style.display="block";
		// 	document.getElementById("Forgot").style.display= "none";
		// 	document.getElementById("register").style.display= "none";
		// }
		
		// function showadmin()
		// {
		// 	document.getElementById("main").style.display= "none";
		// 	document.getElementById("admin").style.display="block";
		// 	document.getElementById("login").style.display="none";
		// 	document.getElementById("Forgot").style.display= "none";
		// 	document.getElementById("register").style.display= "none";
		// }



	</script>
</head>
<body>
	
<div class="topnav" id="myTopnav">
  <button class="active" style="color: red;" onclick="window.location.href='index.php'">
  	 Home
  </button>
  <button  style="color: red;" onclick="window.location.href='adminindex.php'">
  	Admin
  </button>
  <button  style="color: red;" onclick="window.location.href='studentindex.php'">Student</button>
</div>
</div>
<div id="admin" style="display: block;">
	<div class="login-page" >
	  <div class="form">
	  	<img  src="./logo.png">
	  	<h2>Admin Login</h2>
	  	
	    <form class="login-form" name="admin_form" action="adminloginprocess.php" method="POST">
	    	
	      <input type="text" name="admin_username" placeholder="Username" onfocusin="username_admin_in()" onfocusout="username_admin_out()" />
	      <input type="password" name="admin_password" onfocusin="pass_admin_in()" onfocusout="pass_admin_out()" required="required" placeholder="Password"/>
	      <button name="login_user">login</button>
	      
	    </form>
	  </div>
	</div>
</div>
</body>
</html>
