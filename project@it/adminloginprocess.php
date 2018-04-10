<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['login_user'])) {
if (empty($_POST['admin_username']) || empty($_POST['admin_password'])) {
echo "error";
}
else
{
// Define $username and $password
$username=$_POST['admin_username'];
$password=$_POST['admin_password'];


// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "",'admin');
// To protect MySQL injection for Security purpose



// Selecting Database

// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query( $connection,"select * from adminlogin where pass='".$password."' AND username='".$username."'");
$rows = mysqli_num_rows($query);

if ($rows == 1) {
$_SESSION['login_user']=$username; 
	header('location:adminhome.php');			// Initializing Session
echo "sucessful login"; // Redirecting To Other Page
} else {
  echo ("<script>
alert('Invalid credentials');
var mywindow=window.location.href='adminindex.php';


</script>");
  echo "Failed";
mysqli_close($connection); // Closing Connection
}
}
}
?>