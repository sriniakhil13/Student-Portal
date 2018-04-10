<?php 


// Create connection
$connection = mysqli_connect("localhost", "root", "",'userdata');

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$email = $_POST["email"];
  	 $name = $_POST["name"];
    $username = $_POST["username"];
    $dob=$_POST['dob'];

}

$sql = "SELECT * from userdata where username='".$username."' and fname='".$name."' and email='".$email."'";
$result = mysqli_query( $connection,$sql);
mysqli_close($connection);
if($result->num_rows > 0)
{
	$connection1 = mysqli_connect("localhost", "root", "",'fulluserdatabase');
	$p="SELECT * from fulldata where fullname='".$name."' and email='".$email."' and dob='".$dob."'";
	$resulti =  mysqli_query($connection1,$p);
	if ($resulti === false) { die(mysqli_error($connection1)); }
	if($resulti->num_rows > 0)
	{
		
	}else
	{
		echo ("<script>
alert('Invalid details..');
var mywindow=window.location.href='studentindex.php';


</script>");

	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot password</title>
	<style type="text/css">
		.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #363636;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
	</style>
	<script type="text/javascript" src="valid.js"></script>
</head>
<body bgcolor="#F0FFF0	">
	<div align="center" style="padding-top: 15%;">
		
		<div class="form" >
			<h2>Reset Password</h2>
		<form name="reset-form" action="forgotprocess.php" method="POST">
			<input type="text" name="name" value="<?php echo htmlentities($name); ?>" hidden />
			<input type="password" name="pass" placeholder="Password" onfocusin="frpass_in()" onfocusout="frpass_out()" required="required"  /><br>
			<input type="password" name="cnfpass" placeholder="Confirm password"  onfocusin="frrepass_in()" onfocusout="frrepass_out()" required="required"  />
			<button onsubmit="return isvalidforgotpass();">Submit</button>
		</form>
	</div>
	</div>
</body>
</html>