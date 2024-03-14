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
$fname= $_POST['fname'];
$lname= '';
$mname= '';
$idnumber= $_POST['idnumber'];
$course= $_POST['course'];
$gender= $_POST['gender'];
$status= '';
$guardian= $_POST['guardian'];
$section= $_POST['section'];
$cguardian= $_POST['cguardian'];
$email= $_POST['email'];
$bday= $_POST['bday'];
$position = 'student';
$to      = $_POST['email'];
$image = '';
$password = 'password';
$status1 = 'unpaid';
    $subject = 'Enrollment Paharang Integrated School';
    $message = 'Good day! This is Paharang Integrated School.. We are glad to inform you that you are now enrolled at Paharang Integrated School. as '.$course.' with your student number '.$idnumber.' as your username and "password" without quotes as your password. Thank you. Please do not reply. This is system generated email';


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
		

//end email


mysql_query("INSERT INTO juniorstudents (fname,lname,mname,idnumber,course,gender,status,guardian,section,cguardian,email,bday,image)
VALUES ('$fname','$lname','$mname','$idnumber','$course','$gender','$status','$guardian','$section','$cguardian','$email','$bday','$image')");
mysql_query("INSERT INTO login (username, password, type,email)
VALUES ('$idnumber','$password','student','$email')");
echo '<script>window.history.back()</script>';

?>