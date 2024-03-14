<?php
include('../connect.php');
$id =$_GET['id'];
mysql_query("UPDATE login SET password = 'password' WHERe username = '$id'");
mysql_query("UPDATE juniorstudents SET status = 'Approved' WHERe idnumber = '$id'");
$to =$_GET['email'];

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
		

?>
<script>
alert("Student Registration has been approved");
window.location='app_j.php';
</script>