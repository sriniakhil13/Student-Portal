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
        $course=$row['course'];
        $departname=$row['department'];
        $regno=$row['regno'];
        $rollno=$row['rollno'];
        $category=$row['category'];
        $board10=$row['10board'];
        $marks10=$row['10marks'];
        $year10=$row['10year'];
        $board12=$row['12board'];
        $marks12=$row['12marks'];
        $year12=$row['12year'];


    }
    
}else
{

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
            <td>Course</td>
            <td><?php echo htmlentities($course); ?></td>
        </tr>




        <tr>
            <td>Department</td>
            <td><?php echo htmlentities($departname); ?></td>
        </tr>
        <tr>
            <td>Registration no</td>
            <td><?php echo htmlentities($regno); ?></td>
        </tr>
        <tr>
            <td>Roll no</td>
            <td><?php echo htmlentities($rollno); ?></td>
        </tr>
        <tr>
            <td>Category</td>
            <td><?php echo htmlentities($category); ?></td>
        </tr>
        <tr>
                
            <th>S.No</th>
            <th>Qualification</th>
            <th>Board</th>
            <th>Marks</th>
            <th>Year of passing</th>
            </tr>
        <tr>
                <td>1.</td>
                <td>Class 10</td>
                <td><?php echo htmlentities($board10); ?></td>
                <td><?php echo htmlentities($marks10); ?></td>
                <td><?php echo htmlentities($year10); ?></td>
                
            </tr>
            <tr>
                <td>2.</td>
                <td>Class 12</td>
                <td><?php echo htmlentities($board12); ?></td>
                <td><?php echo htmlentities($marks12); ?></td>
                <td><?php echo htmlentities($year12); ?></td>
                
            </tr>