<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="userdata";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$var=$_SESSION['login_user'];
if(!isset($_SESSION['login_user']))
{
    header('location:fail.html');
}
$connection = mysqli_connect("localhost", "root", "",'userdata');
$result = mysqli_query( $connection,"select * from userdata where username='".$var."'");

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $fullname=$row['fname'];
        $email=$row['email'];


    }
    
}
$_SESSION['details'] = $fullname;

 ?>


<!DOCTYPE html>
<html>
<head>
	<title value=""></title>
	<link rel="stylesheet" type="text/css" href="afterloginhomecss.css">
    <link rel="stylesheet" type="text/css" href="modalcss.css">
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
        

    </script>
    <script type="text/javascript">
        $(function() {
//----- OPEN
$('[data-popup-open]').on('click', function(e)  {
var targeted_popup_class = jQuery(this).attr('data-popup-open');
$('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
e.preventDefault();
});
//----- CLOSE
$('[data-popup-close]').on('click', function(e)  {
var targeted_popup_class = jQuery(this).attr('data-popup-close');
$('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
e.preventDefault();
});
$(".popup").click(function(){
$(".popup").fadeOut(350).removeClass("active");
});
$(".popup-inner").click(function(e){
e.stopPropagation();
});
});
</script>
</head>
<?php

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
        $fathern=$row['fathern'];
        $mothern=$row['mothern'];
        $fathero=$row['fathero'];
        $mothero=$row['mothero'];
        $fatherincome=$row['fatherincome'];
        $medicalrec=$row['medicalrec'];
        $bloodg=$row['bloodg'];
        $interests=$row['interests'];
        $food=$row['food'];
        $info=$row['info'];
    }
    
}else
{
    $dob="";
    $age="";
    $gender="";
    $address="";
    $city="";
    $state="";
    $pincode="";
    $mobileno="";
    $course="";
    $departname="";
    $regno="";
    $rollno="";
        $category="";
        $board10="";
        $marks10="";
        $year10="";
        $board12="";
        $marks12="";
        $year12="";
        $fathern="";
        $mothern="";
        $fathero="";
        $mothero="";
        $fatherincome="";
        $medicalrec="";
        $bloodg="";
        $interests="";
        $food="";
        $info="";






}
?>
<body style="margin:0px">
   <div style="margin: -20px">
	<table width="100%" cellpadding="0" cellspacing="0" style="white-space: 0%" >
            	<tr bgcolor="#00FF7F" valign="left" style="height: 80px">
            		<td style="width: 30%; height: 19px;" align="middle">Welcome <?php echo htmlentities($fullname); ?> </td>
            		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            		<td align="left" style="height: 19px" width="15%" colspan="1">
                        <form action="Logout.php" ><input type="submit" value="Logout" class="logout" /></form>
                    </td>
            	</tr>
            
            <br>
            <tr>
                <td>
            <table>

            	<tr>
            		<td valign="top" style="height: 680px; width: 30%;"">
            		<ul>
        			<!-- <li><button style="width: 280px" onclick="notice()"><a href="#"> General Notice</a></button></li>
					<li><button onclick="placemen()"><a href="#"> Placement Updates</a></button></li> -->
					<li><button><a href="studentprofile.php">Update profile</a></button></li>
					<li><button><a class="btn" data-popup-open="popup-4" href="studentprofile.php"> View Personal details</a></button></li>
					<li><button><a class="btn" data-popup-open="popup-3" href="#"> View Educational details</a></button></li>
					<li><button><a class="btn" data-popup-open="popup-2" href="#"> View Parents details</a></button></li>
					<li><button><a class="btn" data-popup-open="popup-1" href="#"> View Additional details</a></button></li>
				    </ul>
                    </td>
            	</tr>
            </table>
        </td>
           
        
        <td  width="70%" align="middle" valign="top" colspan="2">
        <!-- <div id="notices" style="display: block; margin-top: 0%">
            <br><br><br><br><br><br>            <h2 > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome to Notice board</h2>
            <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No new Info</p>
        </div> -->
        <!-- <div id="placement" style="display: none;padding-top: 0%;">
          <br><br><br><br><br><br>            <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Placement Updates</h2>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No new Info</p>
        </div> -->
    </td></tr>
        
</table>

</div>

<div class="popup" data-popup="popup-1">
<div class="popup-inner">

    <p>
        <h3>Additional Details</h3>
        <table >

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




   </p>
<p><a data-popup-close="popup-1" href="#">Close</a></p>
<a class="popup-close" data-popup-close="popup-1" href="#">x</a>
</div>
</div>






<div class="popup" data-popup="popup-2">
<div class="popup-inner">

<p>
    <table >
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
</table>
</p>
<p><a data-popup-close="popup-2" href="#">Close</a></p>
<a class="popup-close" data-popup-close="popup-2" href="#">x</a>
</div>
</div>



<div class="popup" data-popup="popup-3">
<div class="popup-inner">

<p>
    <table >
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
        </table>
</p>
<p><a data-popup-close="popup-3" href="#">Close</a></p>
<a class="popup-close" data-popup-close="popup-3" href="#">x</a>
</div>
</div>


<div class="popup" data-popup="popup-4">
<div class="popup-inner">

<p>
<table>
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
</table>


    </p>
<p><a data-popup-close="popup-4" href="#">Close</a></p>
<a class="popup-close" data-popup-close="popup-4" href="#">x</a>
</div>
</div>






</body>
</html>