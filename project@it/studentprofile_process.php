<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname="fulluserdatabase";
// Create connection

$conn=mysqli_connect($servername,$username,$password,$dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	
  	 
  	 $fullname=$_POST['first_name'];
  	 $email=$_POST['main_email'];
  	 $dob=$_POST['dob'];
     $age=$_POST['age'];
  	  if (isset($_POST['gender'])){
  	 $gender=$_POST['gender'];
  	}
    else
    {
      $gender='Male';
    }
  	 $address=$_POST['address'];
  	 $city=$_POST['city'];
  	 
  	 $state=$_POST['state'];
  	 $pincode=$_POST['pincode'];
  	 $mobileno=$_POST['mobile_number'];
  	 $course=$_POST['course'];
  	 $department=$_POST['depart_name'];
  	 $regno=$_POST['reg_no'];
  	 $rollno=$_POST['rollno'];
  	 $category=$_POST['category'];
  	 $board10=$_POST['10_board'];
  	 $marks10=$_POST['10_marks'];
  	 $year10=$_POST['10_year'];
  	 $board12=$_POST['12_board'];
  	 $marks12=$_POST['12_marks'];
  	 $year12=$_POST['12_year'];
  	 $fathern=$_POST['father_name'];
  	 $mothern=$_POST['mother_name'];
  	 $fathero=$_POST['f_occupation'];
  	 $mothero=$_POST['m_occupation'];
  	 $fatherincome=$_POST['f_income'];
  	 $medicalrec=$_POST['medical_record'];
  	 $bloodg=$_POST['blood_group'];
  	 $interests=$_POST['interests'];
  	 
  	 $food=$_POST['f_prefer'];
  	 $info=$_POST['a_o_info'];
  	 $verify="True";
    
 }

// $sql = "INSERT INTO userdata (email, fname, username, pass, cpass) VALUES ('$email','$name','$username','$password','$cpass')";
$q= "Select * from fulldata where fullname='".$fullname."'";
$result1 = mysqli_query($conn,$q);

if($result1->num_rows==0)
{
$sql="INSERT INTO fulldata(fullname, email, dob, age, gender, address, city, state, pincode, mobileno, course, department, regno, rollno, category, 10board, 10marks, 10year, 12board, 12marks, 12year, fathern, mothern, fathero, mothero, fatherincome, medicalrec, bloodg, interests, food, info, verify) VALUES ('$fullname','$email','$dob','$age','$gender','$address','$city','$state','$pincode','$mobileno','$course','$department','$regno','$rollno','$category','$board10','$marks10','$year10','$board12','$marks12','$year12','$fathern','$mothern','$fathero','$mothero','$fatherincome','$medicalrec','$bloodg','$interests','$food','$info','$verify')";

$result = mysqli_query($conn,$sql);
  if(!$result)
  {
    header('location:fail.html');
  }
  else
  {
    header('location:afterloginhome.php');
  }
}
else
{
  $r="UPDATE fulldata set fullname='$fullname',email='$email',dob='$dob',age='$age',gender='$gender',address='$address',city='$city',state='$state',pincode='$pincode',mobileno='$mobileno',course='$course',department='$department',regno='$regno',rollno='$rollno',category='$category',10board='$board10',10marks='$marks10',10year='$year10',12board='$board12',12marks='$marks12',12year='$year12',fathern='$fathern',mothern='$mothern',fathero='$fathero',mothero='$mothero',fatherincome='$fatherincome',medicalrec='$medicalrec',bloodg='$bloodg',interests='$interests',food='$food',info='$info',verify='$verify'";
  $result = mysqli_query($conn,$r);
   if(!$result){
   header('location:fail.html');
echo "bad";
}
else {
   header('location:afterloginhome.php');
}
}

mysqli_close($conn);
?>