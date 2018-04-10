<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname="userdata";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	
  	 
  	 $email = $_POST["email"];
  	 $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["pass"];
    $cpass = $_POST["cnfpass"];
    
 }
$sql = "INSERT INTO userdata (email, fname, username, pass, cpass) VALUES ('".$email."','".$name."','".$username."','".$password."','".$cpass."')";

$success = $conn->query($sql);
if ($success==True){
	echo ("<script>
alert('Registration sucess..!');
var mywindow=window.location.href='studentindex.php';


</script>");
}
$conn->close();
?>