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
        $medicalrec=$row['medicalrec'];
        $bloodg=$row['bloodg'];
        $interests=$row['interests'];
        $food=$row['food'];
        $info=$row['info'];
    }
    
}else
{

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <table  align="center"  style="background: yellow; border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;">
        <tr>
            
        </tr>
        <tr>
            <td>Medical records :</td>
            <td><?php echo htmlentities($medicalrec); ?></td>
        </tr>
        <tr>
            <td>Blood group</td>
            <td><?php echo htmlentities($bloodg); ?></td>
        </tr>
        <tr>
            <td>Interests:</td>
            <td><?php echo htmlentities($interests); ?></td>
        </tr>
        <tr>
            <td>food: </td>
            <td><?php echo htmlentities($food); ?></td>
        </tr>
        <tr>
            <td>info :</td>
            <td><?php echo htmlentities($info); ?></td>
        </tr>
</table>
</body>
</html>
