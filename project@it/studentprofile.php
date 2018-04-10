<?php 

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="userdata";
// Create connection



$var=$_SESSION['login_user'];
$connection = mysqli_connect("localhost", "root", "",'userdata');
$result = mysqli_query( $connection,"select * from userdata where username='".$var."'");

if ($result->num_rows > 0) {
    // output data of each row
    while($rows = $result->fetch_assoc()) {
        $fullname=$rows['fname'];
        $email=$rows['email'];
    }
    
}
mysqli_close($connection);
$db="fulluserdatabase";
$conn=mysqli_connect("localhost", "root", "","fulluserdatabase");
$q= "Select * from fulldata where fullname='".$fullname."'";
$result1 = mysqli_query($conn,$q);

if($result1->num_rows>0)
{
	while($row=mysqli_fetch_assoc($result1)){
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
		$dob=" ";
		$age="";
		$gender="";
		$address="";
		$city="";
		$state="";
		$pincode="";
		$mobileno="";
		$course="";
		$department="";
		$regno="";
		$rollno="";
		$category="";
		$board10="";
		$board12="";
		$marks10="";
		$marks12="";
		$year10="";
		$year12="";
		$fathero="";
		$fathern="";
		$mothero="";
		$mothern="";
		$fatherincome="";
		$medicalrec="";
		$bloodg="";
		$interests="";
		$food="";
		$info="";
	}



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="studentprofilecss.css">
	
	<script type="text/javascript" src="validprofile.js"></script>
</head>
<body style="background-color: #7FFFD4">
	<form action="studentprofile_process.php" name="form_full" method="POST">
		
			<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Personal details</b></p>
		<table  align="center"  style="background: #FFEBCD; border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;">
		<tr>
			
		</tr>
		<tr>
			<td><label>Full Name </label></td>
			<td><input type="text" name="first_name" value="<?php echo htmlentities($fullname); ?>"  readonly /></td>
		</tr>
		
			<td>Email</td>
			<td><input type="text" name="main_email" value="<?php echo htmlentities($email); ?>" readonly /></td>
		
		<tr>
			<td>Date of Birth</td>
			<td><input type="date"  name="dob" placeholder="dd/mm/yyyy" onfocusout="dob_out()" value="<?php echo htmlentities($dob); ?>" /></td>
		</tr>
		<tr>
			<td>Age</td>
			<td><input type="text" name="age" maxlength="10" placeholder="age" onclick="getage()"  value="<?php echo htmlentities($age); ?>" /></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>Male <input type="radio" name="gender" value="male"> Female <input type="radio" name="gender" value="female"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><textarea name="address" rows="2" cols="80" ><?php echo htmlentities($address); ?></textarea></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" value="<?php echo htmlentities($city); ?>"></td>
		</tr>
		<tr>
			<td>State</td>
			<td><select name="state"><option value="SELECT STATE">SELECT STATE</option><option value="Andhra Pradesh">Andhra Pradesh</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Bihar">Bihar</option><option value="Chhattisgarh">Chhattisgarh</option><option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option><option value="Daman and Diu">Daman and Diu</option><option value="Delhi">Delhi</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option><option value="Haryana">Haryana</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Jammu and Kashmir">Jammu and Kashmir</option><option value="Jharkhand">Jharkhand</option><option value="Karnataka">Karnataka</option><option value="Kerala">Kerala</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Maharashtra">Maharashtra</option><option value="Manipur">Manipur</option><option value="Meghalaya">Meghalaya</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option value="Orissa">Orissa</option><option value="Puducherry">Puducherry</option><option value="Punjab">Punjab</option><option value="Rajasthan">Rajasthan</option><option value="Sikkim">Sikkim</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Telangana">Telangana</option><option value="Tripura">Tripura</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="Uttarakhand">Uttarakhand</option><option value="West Bengal">West Bengal</option></select></td>
		</tr>
		<tr>
			<td>Pincode</td>
			<td><input type="text" name="pincode" maxlength="6" value="<?php echo htmlentities($pincode); ?>"></td>
		</tr>
		<tr>
			<td>Mobile Number</td>
			<td><input type="number" name="mobile_number" onfocusin="Mobile_Number_in()" onfocusout="Mobile_Number_out()" required="required" value="<?php echo htmlentities($mobileno); ?>" /></td>
		</tr>
		<tr>
			
		</tr>
		</table>
		<table  align="center" width="600"  style="background: #FFEBCD; border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;">
			<p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Educational details </b></p>
			<tr>
				<td>Course</td>
				<td><input type="text" name="course" value="<?php echo htmlentities($course); ?>" /></td>
			</tr>
			<tr>
				<td>Department</td>
				<td><select name="depart_name">
							<option  value="0">--Select--</option>
							<option  value="BT">Biotechnology</option>
							<option value="CHE">CHEMICAL ENGINEERING</option>
							<option  value="CIV">Civil engineering</option>
							<option  value="CSE">Computer Science and engineering</option>
							<option  value="ECE">Electronics and communication Engineering</option>
							<option value="IT">Information Technology</option>
							<option value="ME">Mechanical engineering</option>
							<option   value="MME">Metallurgical and materials engineering</option>
						</select></td>
			</tr>
			<tr>
				<td>Registration no</td>
				<td><input type="text" name="reg_no"  pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" value="<?php echo htmlentities($regno); ?>" /></td>
			</tr>
			<tr>
				<td>Roll no</td>
				<td><input type="text" name="rollno"  onclick="getstudentid()"  value="<?php echo htmlentities($rollno); ?>" /></td>
			</tr>
			<tr>
				<td>Category</td>
				<td><input type="text" name="category" value="<?php echo htmlentities($category); ?>" /></td>
			</tr>
		</table><br>
		<br>
		<table align="center"   style="background: #FFEBCD; border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;">
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
				<td><input type="text" name="10_board" value="<?php echo htmlentities($board10); ?>" /></td>
				<td><input type="text" name="10_marks" value="<?php echo htmlentities($marks10); ?>" /></td>
				<td><input type="text" name="10_year" value="<?php echo htmlentities($year10); ?>" /></td>
				
			</tr>
			<tr>
				<td>2.</td>
				<td>Class 12</td>
				<td><input type="text" name="12_board" value="<?php echo htmlentities($board12); ?>" /></td>
				<td><input type="text" name="12_marks" value="<?php echo htmlentities($marks12); ?>" /></td>
				<td><input type="text" name="12_year" value="<?php echo htmlentities($year10); ?>" /></td>
				
			</tr>
		</table>
		<table align="center" width="600" style="background: #FFEBCD; border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;">
			<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Parent's Details </b></p>
			<tr>
				<td>Father's Name</td>
				<td><input type="text" name="father_name" value="<?php echo htmlentities($fathern); ?>" /></td>
			</tr>
			<tr>
				<td>Mother's Name</td>
				<td><input type="text" name="mother_name" value="<?php echo htmlentities($mothern); ?>" /></td>
			</tr>
			<tr>
				<td>Father's Occupation</td>
				<td><input type="text" name="f_occupation" value="<?php echo htmlentities($fathero); ?>" /></td>
			</tr>
			<tr>
				<td>Mother's Occupation</td>
				<td><input type="text" name="m_occupation" value="<?php echo htmlentities($mothero); ?>" /></td>
			</tr>
			<tr>
				<td>Father's Annual Income</td>
				<td><input type="text" name="f_income" value="<?php echo htmlentities($fatherincome); ?>" /></td>
			</tr>
		</table>
		<table align="center" width="600" style="background: #FFEBCD; border-radius:10px;-moz-border-radius:10px;-webkit-border-radius:10px;">
			<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Additional details </b></p>
			<tr>
				<td>Medical record</td>
				<td>&nbsp;<textarea rows="2" cols="80" name="medical_record" ><?php echo htmlentities($medicalrec); ?></textarea></td>
			</tr>
			<tr>
				<td>
					Blood group
				</td>
				<td>
					<input type="text" name="blood_group" value="<?php echo htmlentities($bloodg); ?>" />
				</td>
			</tr>
			<tr>
				<td>Interests</td>
				<td>&nbsp;<textarea rows="2" cols="80" name="interests" ><?php echo htmlentities($interests); ?></textarea></td>
			</tr>
			<tr>
				<td>Food preference</td>
				<td>&nbsp;<select name="f_prefer"><option value="SELECT">Select</option><option value="Veg">Veg</option><option value="Non-veg">Non-veg</option></select></td>
			</tr>
			<tr>
				<td>Any other infomation</td>
				<td>&nbsp;<textarea rows="2"  cols="80" name="a_o_info" ><?php echo htmlentities($info); ?></textarea></td>
			</tr>
			
					</table>
					<br><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" >
			


	</form>

</body>
</html>