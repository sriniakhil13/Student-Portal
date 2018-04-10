<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>College Portal</title>
	<link rel="stylesheet" type="text/css" href="indexstyle.css">
	<script type="text/javascript" src="valid.js"></script>
	<script type="text/javascript">
		function register(){
			
			
			document.getElementById("register").style.display= "block";
			document.getElementById("Forgot").style.display= "none";
			document.getElementById("login").style.display="none";
		}
		function signin(){
			
			document.getElementById("Forgot").style.display= "none";
			document.getElementById("register").style.display= "none";
			document.getElementById("login").style.display="block";
		}
		function forgot_password(){
			
			document.getElementById("login").style.display="none";
			document.getElementById("Forgot").style.display= "block";
			document.getElementById("login").style.display="none";
		}
		
		
		



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



	<div class="login-page" id="login" style="display: block">
	  <div class="form">
	  	<img  src="./logo.png">
	  	<h2>Student Login</h2>
	    <form class="login-form" name="student-form" action="process2.php" method="POST">
	    	
	      <input type="text" name="username" onfocusin="username_student_in()" onfocusout="username_student_out()" required="required" placeholder="Username"/>
	      <input type="password" name="password" placeholder="Password" onfocusin="pass_student_in()" onfocusout="pass_student_out()"   />
	      <button name="login_user">login</button>
	      
	      <p class="message">For New students : <a href="#" onclick="register()">Click here </a></p>
	      <p class="message"><a href="#" onclick="forgot_password()">Forgot Password</a></p>
	    </form>
	  </div>
	</div>

	<div class="register-page" id="register">
		<br><br><br><br>
		<div class="form" >
			<h2>  Registration  : </h2>
			<form class="register-form" name="register-form" onsubmit="return isvalidreg();" action="process1.php" method="POST">
		      <input type="text" name="name" placeholder="Full name" onfocusin="name_in()" onfocusout="name_out()" required="required" />
		      <input type="text" name="email" placeholder="Email address" onfocusin="email_in()" onfocusout="email_out()" required="required" />
		      <input type="text" name="username" placeholder="Username" onfocusin="username_in()" onfocusout="username_out()" required="required" />
		      <input type="password" name="pass" placeholder="Password" onfocusin="pass_in()" onfocusout="pass_out()" required="required" />
		      <input type="password" name="cnfpass" placeholder="Confirm Password" onfocusin="repass_in()" onfocusout="repass_out()" required="required" />
		     	<p class="message">Registration subject to validation by admin</p>
		      <button onsubmit="return isvalidreg();">Submit</button>
		      <p class="message">Already registered? <a href="#" onclick="signin()">Sign In</a></p>
		    </form>
		</div>
	</div>

	<div class="forgot-pass" id="Forgot">
		<br><br><br>

		<div class="form">
			<img  src="./forgot.jpeg">
			<h2> To Reset Password: </h2>
	    <form class="login-form" name="forgot-form" onsubmit="return isvalidfor();" action="forgot.php" method="POST">
		    <input type="text" name="name" placeholder="Full Name" onfocusin="forgot_name_in()" onfocusout="forgot_name_out()" required="required" />
		      <input type="text" name="username" placeholder="Username" onfocusin="forgot_username_in()" onfocusout="forgot_username_out()" required="required" />
		      <input type="text" name="email" placeholder="Email-address" onfocusin="forgot_email_in()" onfocusout="forgot_email_out()" required="required" />
		      <input type="date" name="dob" placeholder="Date of Birth" onfocusout="forgot_dob_out()" required="required" />

		      <button>Submit</button>
		      <p class="message">For New students : <a href="#" onclick="register()">Click here </a></p>
		       <p class="message">Back to <a href="#" onclick="signin()">Sign In</a></p>
	    </form>
		</div>
	</div>


</body>
</html>