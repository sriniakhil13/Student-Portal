<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="fulluserdatabase";
// Create connection

$connection = mysqli_connect("localhost", "root", "",'fulluserdatabase');
$variable=$_SESSION['details'];

$result = mysqli_query( $connection,"select * from fulldata  where fullname='".$variable."' ");

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $fullname=$row['fullname'];
        $email=$row['email'];
        $dob=$row['dob'];
        $age=$row['age'];
        $gender=$row['gender'];
        $address=$row['address'];
        $city=$row['city'];
        $state=$row['state'];
        $pincode=$row['pincode'];
        $mobileno=$row['mobileno'];
    }
    
}else
{
	$fullname="";
	$email="";
	$dob="";
	$age="";
	$gender="";
	$address="";
	$city="";
	$state="";
	$pincode="";
	$mobileno="";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Personal details</title>
</head>
<body>



<table  align="center"  style="background: yellow; border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;">
		<tr>
			
		</tr>
		<tr>
			<td><label>Full Name </label></td>
			<td><?php echo htmlentities($fullname); ?></td>
		</tr>
		
			<td>Email</td>
			<td><?php echo htmlentities($email); ?> </td>
		
		<tr>
			<td>Date of Birth</td>
			<td><?php echo htmlentities($dob); ?></td>
		</tr>
		<tr>
			<td>Age</td>
			<td><?php echo htmlentities($age); ?></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><?php echo htmlentities($gender); ?></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><?php echo htmlentities($address); ?></td>
		</tr>
		<tr>
			<td>City</td>
			<td><?php echo htmlentities($city); ?></td>
		</tr>
		<tr>
			<td>pin code</td>
			<td><?php echo htmlentities($pincode); ?></td>
		</tr>
		<tr>
			<td>Mobile no</td>
			<td><?php echo htmlentities($mobileno); ?></td>
		</tr>

</body>
</html>