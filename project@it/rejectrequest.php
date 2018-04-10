<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";

// Create connection


$connection = mysqli_connect("localhost", "root", "",'userdata');
$result = mysqli_query( $connection,"select * from userdata where verify='No'");
$yes='Yes';
// To protect MySQL injection for Security purpose
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	while($row=mysqli_fetch_assoc($result)){
		if(isset($_POST[$row['username']]))
		{
			//echo $row['username'];
			
		mysqli_query( $connection,"DELETE from  userdata  WHERE username='".$row['username']."' ");
		

		}
	}

}
header('location:adminhome.php');


?>
