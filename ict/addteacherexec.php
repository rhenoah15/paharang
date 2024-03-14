<?php
include('../connect.php');

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str)
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc())
			{
			$str = stripslashes($str);
			}
		return mysql_real_escape_string($str);
	}
//Sanitize the POST values
$fname = clean($_POST['fname']);
$email = clean($_POST['email']);
$lname = '';
$type = clean($_POST['type']);
$mname = '';
$idnum = clean($_POST['idnum']);
$password = 'password';
$work = clean($_POST['work']);
$gender = clean($_POST['gender']);
$status = clean($_POST['status']);
$bday = clean($_POST['bday']);
$course = '';
$image ='';

$result = mysql_query("SELECT * FROM login WHERE username= '$idnum'");
$count=mysql_num_rows($result);
if($count>0) {
echo '<script>alert("The Faculty ID you are trying to register is already on the database. Press OK to continue");window.history.back();</script>';	
} else {
$result = mysql_query("SELECT * FROM login WHERE email = '$email'");
$count=mysql_num_rows($result);
if($count>0) {
echo '<script>alert("The email you are trying to register is already on the database. Press OK to continue");window.history.back();</script>';	
} else {



$to      = $_POST['email'];
    $subject = 'Enrollment Paharang Integrated School';
    $message = 'Good day! This is Paharang Integrated School.. We are glad to inform you that you are now registered as faculty at Paharang Integrated School. with your Faculty ID '.$idnumber.' as your username and "password" without quotes as your password. Thank you. Please do not reply. This is system generated email';


  $headers = 'From: information@paharangintegratedschool.tech'       . "\r\n" .
                 'Reply-To: information@paharangintegratedschool.tech' . "\r\n".
         $header .= "MIME-Version: 1.0\r\n".
         $header .= "Content-type: text/html\r\n";
                 
				 
                 
				 
		echo '<script>console.log("'.$message.' '.$email.'");</script>';
    if(mail($to, $subject, $message, $headers)) {
		echo '<script>console.log("sent");</script>';
	} else {
		echo '<script>console.log("not");</script>';
		
	}

mysql_query("INSERT INTO teacher (fname, lname, mname, idnumber, work, gender, status, bday,type,email,image)
VALUES ('$fname','$lname','$mname','$idnum','$work','$gender','$status','$bday','$type','$email','$image')");
mysql_query("INSERT INTO login (username, password, type,email)
VALUES ('$idnum','$password','teacher','$email')");


echo '<script>alert("Faculty Information has been added");window.location="faculty1.php?id='.$type.'"</script>';
}
}
?>