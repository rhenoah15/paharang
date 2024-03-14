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

$idnumber = clean($_POST['idnumber']);
$grade = clean($_POST['grade']);
$semester = $_POST['semester'];

mysql_query("UPDATE seniorstudents SET grade='$grade',semester='$semester' WHERE idnumber='$idnumber'");
//mysql_query("UPDATE pay SET course='$course', year='$yearlevel', sem='$semester', status='unpaid' WHERE idnum='$idnumber'");
		$results = mysql_query("SELECT * FROM studsub WHERE student = '$idnumber' AND status='active'");
		while($rows = mysql_fetch_array($results))
			{
mysql_query("UPDATE studsub SET status='inactive' WHERE student='$idnumber' AND status='active'");
			}
			echo '<script>window.history.back();</script>';
//header("location: student.php");
?>