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

<div id="main" style="display: block;">
	<h1 align="center">National Institute of Technology Durgapur</h1>
	<h1 align="center">Student Portal</h1>
	<img src="mainimage.jpeg" alt="logo" style="width:200px;height:200px;opacity: 0.7;margin-left: 40%">
</div>

	
