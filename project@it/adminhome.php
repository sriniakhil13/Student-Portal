<?php

session_start();
$admin=$_SESSION['login_user'];
if (!isset($_SESSION['login_user']))
{
	header('location:fail.html');
    echo "wtf";
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname="userdata";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$connection = mysqli_connect("localhost", "root", "",'userdata');
$result = mysqli_query( $connection,"select * from userdata where verify='No'");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>
	<link rel="stylesheet" type="text/css" href="adminhome.css">
	<link rel="stylesheet" type="text/css" href="modalcss.css">
	<script type="text/javascript" src="jquery.js"></script>
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
<body style="margin:0%;background-color: #F0FFF0 ">


	<div id="showrequest" style="padding:0%;width: 100%;overflow: hidden;">
		<table width="100%" cellpadding="0" cellspacing="0">
            	<tr bgcolor="#8EF7D1" valign="middle" style="height: 80px">
            		<td style="width: 30%; height: 19px;" align="left">Welcome <?php echo htmlentities($admin); ?> </td>
            		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            		<td align="left" style="height: 19px" width="15%" colspan="1">
                        <form action="Logout.php" ><input type="submit" value="Logout" class="logout" /></form>
                    </td>
            	</tr>
            </table>
            <img src="admin.jpg" style="margin-left: 40%">
            <br>
            <div id="main" style="padding-left: 5%;padding-top: 10%;float: left">
			<a href="#" class="myButton" data-popup-open="popup-1" href="#" >Pending Requests</a>
			</div>
			<div id="main" style="padding-top: 10%;padding-left: 70%">
			<a href="#" class="myButton" data-popup-open="popup-2" href="#" >Students</a>
			</div>





	</div>










			<div class="popup" data-popup="popup-1">
<div class="popup-inner">

    <p>
	<table style="color: black;margin-top: 5%" align="center" border="3px" bordercolor="white" >
		<form method="POST">
			<input type="text" name="noofrows" value=<?php echo $result->num_rows; ?> hidden>
					<?php 
					if($result->num_rows > 0){
						?>
					<tr>
						<th> <i> Name </i> </th>
						<th> <i> Email </i> </th>
						<th> <i> User name </i> </th>
						<th> <i> Select </i></th>
					</tr>	

					<?php 
					
						$count=0;
						while($row=mysqli_fetch_assoc($result)){
						
					?>

						<tr style="text-align: center;width: 30%;font-size: 25px">

						<td style="text-align: center;width: 30%" > <?php 	echo $row['fname']; ?> </td>
						<td style="text-align: center;width: 30%"> <?php 	echo $row['email']; ?> </td>
						<td style="text-align: center;width: 30%"> <?php 	echo $row['username']; ?> </td>
						<td style="text-align: center;width: 30%"> 
							<div class="squaredOne">
		<input type="checkbox" value="None" id="squaredOne" name="<?php echo $row['username']; ?>"  />
			     				<label for="squaredOne"></label>
					    	</div>
						</td>
						</tr>	

					
					<tr>
						<td colspan="3">
							<?php }?>
					<input type="submit" name="accept" class="button" formaction="acceptrequest.php" value="Accept" />
					<input type="submit" name="reject" class="button" formaction="rejectrequest.php" value="Reject" />
				</td>
				</tr>
				<?php 
					}else {
						
					
					?>
					<p><h3 align="center">No requests</h3></p>
					<?php }?>
		</form>
				</table>
			</p>
		<p><a data-popup-close="popup-1" href="#">Close</a></p>
		<a class="popup-close" data-popup-close="popup-1" href="#">x</a>
</div>
</div>


<?php
$connection = mysqli_connect("localhost", "root", "",'userdata');
$result = mysqli_query( $connection,"select * from userdata where verify='Yes'");
?>

			<div class="popup" data-popup="popup-2">
<div class="popup-inner">

    <p>
	<table style="color: black;margin-top: 5%" align="center" border="3px" bordercolor="white" >
		<form method="POST">
			<input type="text" name="noofrows" value=<?php echo $result->num_rows; ?> hidden>
					<?php 
					if($result->num_rows > 0){
						?>
					<tr>
						<th> <i> Name </i> </th>
						<th> <i> Email </i> </th>
						<th> <i> User name </i> </th>
						
					</tr>	

					<?php 
					
						$count=0;
						while($row=mysqli_fetch_assoc($result)){
						
					?>

						<tr style="text-align: center;width: 30%;font-size: 25px">

						<td style="text-align: center;width: 30%" > <?php 	echo $row['fname']; ?> </td>
						<td style="text-align: center;width: 30%"> <?php 	echo $row['email']; ?> </td>
						<td style="text-align: center;width: 30%"> <?php 	echo $row['username']; ?> </td>
						<!-- <td style="text-align: center;width: 30%"> 
							<div class="squaredOne">
		<input type="checkbox" value="None" id="squaredOne" name="<?php echo $row['username']; ?>"  />
			     				<label for="squaredOne"></label>
					    	</div>
						</td> -->
						</tr>	

					
					<tr>
						<td colspan="3">
							<?php }?>
					
				</td>
				</tr>
				<?php 
					}else {
						
					
					?>
					<p><h3 align="center">No requests</h3></p>
					<?php }?>
		</form>
				</table>
			</p>
		<p><a data-popup-close="popup-2" href="#">Close</a></p>
		<a class="popup-close" data-popup-close="popup-2" href="#">x</a>
</div>
</div>


</body>
</html>