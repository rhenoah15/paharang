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
$teacher = clean($_POST['teacher']);
$grade = clean($_POST['grade']);
$section = clean($_POST['section']);
$subject = clean($_POST['subject']);
$results = mysql_query("SELECT * FROM teachersubject WHERE subject='$subject'");
$count=mysql_num_rows($results);
if ($count > 0)
{
		echo "<script type=\"text/javascript\">window.alert('That subject is already assign on other teacher.');window.history.back();</script>"; 
 exit;

}
else
{
mysql_query("INSERT INTO teachersubject (teacher, subject,course,level)
VALUES ('$teacher','$subject','$grade','$section')");
echo "<script type=\"text/javascript\">window.alert('You have successfully assign a subject.');window.location.href = 'viewworkload.php?id=".$teacher."';</script>"; 
exit;
}
?>