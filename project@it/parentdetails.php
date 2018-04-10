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
        $fathern=$row['fathern'];
        $mothern=$row['mothern'];
        $fathero=$row['fathero'];
        $mothero=$row['mothero'];
        $fatherincome=$row['fatherincome'];


    }
    
}else
{

}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <table  align="center"  style="background: yellow; border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;">
        <tr>
            
        </tr>
        <tr>
            <td>Father name :</td>
            <td><?php echo htmlentities($fathern); ?></td>
        </tr>
        <tr>
            <td>Mother name :</td>
            <td><?php echo htmlentities($mothern); ?></td>
        </tr>
        <tr>
            <td>Father occupation :</td>
            <td><?php echo htmlentities($fathero); ?></td>
        </tr>
        <tr>
            <td>mother occupation :</td>
            <td><?php echo htmlentities($mothero); ?></td>
        </tr>
        <tr>
            <td>Father income :</td>
            <td><?php echo htmlentities($fathero); ?></td>
        </tr>

</body>
</html>