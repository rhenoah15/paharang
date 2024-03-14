<?php
include('../connect.php');
$name =$_POST['name'];
$username =$_POST['username'];
$password =$_POST['password'];
$username =$_POST['username'];
$contact =$_POST['contact'];
$email =$_POST['email'];
$address =$_POST['address'];
$type ='Faculty';


//add sms






$save=mysql_query("INSERT INTO login (username, password, type, name,email,contact,address) VALUES ('$username','$password','$type','$name','$email','$contact','$address')");
	
echo "<script type=\"text/javascript\">window.alert('Faculty account has been added. Press OK to continue');window.location.href = 'faculty.php';</script>"; 
	
?>