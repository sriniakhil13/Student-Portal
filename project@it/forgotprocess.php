<?php 

$db="userdata";
// Create connection
$connection = mysqli_connect("localhost", "root", "",'userdata');

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

  	 
    $username = $_POST["name"];
    $password = $_POST["pass"];
    $cpass = $_POST["cnfpass"];

}


$sql = "UPDATE userdata SET pass='$password', cpass='$cpass' where fname='".$username."'";
$result = mysqli_query( $connection,$sql);

if ($result==True){
	echo ("<script>
alert('Password reset sucessfully');
var mywindow=window.location.href='studentindex.php';


</script>");
}
else
{
	header('location:fail.html');
}

?>
