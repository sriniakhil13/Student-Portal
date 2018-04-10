<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['login_user'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
echo ("<script>
alert('Password cannot be blank.!');
var mywindow=window.location.href='studentindex.php';


</script>");
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];


// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "",'userdata');
// To protect MySQL injection for Security purpose



// Selecting Database

// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query( $connection,"select * from userdata where pass='".$password."' AND username='".$username."' AND verify='yes'");
$rows = mysqli_num_rows($query);

if ($rows == 1) {
$_SESSION['login_user']=$username; 
	header('location:afterloginhome.php');			// Initializing Session
echo "sucessful login"; // Redirecting To Other Page
} else {
  $_SESSION['err'] = "Invalid username or password";
 echo ("<script>
alert('Account not activated or invalid credentials..!');
var mywindow=window.location.href='studentindex.php';


</script>");
  echo "Failed";

}

mysqli_close($connection); // Closing Connection
}
}
?>
