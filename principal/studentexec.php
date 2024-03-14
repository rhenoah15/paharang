<?php
include('../connect.php');
$fname =$_POST['fname'];
$lname =$_POST['lname'];
$ext =$_POST['ext'];
$sex =$_POST['sex'];
$bday =$_POST['bday'];
$username =$_POST['username'];
$password =$_POST['password'];
$email =$_POST['email'];
$lrn ='';
$course ='';
$year =$_POST['year'];
$contact =$_POST['contact'];
$mname = $_POST['mname'];
$type ='student';
//add sms
$name = $fname.' '.$mname.' '.$lname;



$save=mysql_query("INSERT INTO login (username, password, type, fname,lname,ext,sex,bday,lrn,email,course,year,contact,mname) VALUES ('$username','$password','$type','$fname','$lname','$ext','$sex','$bday','$lrn','$email','$course','$year','$contact','$mname')");
	
echo "<script type=\"text/javascript\">window.alert('Student account has been added. Press OK to continue');window.location.href = 'students.php';</script>"; 
	
?>
