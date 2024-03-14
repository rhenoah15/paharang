<?php
include('../connect.php');
$q = $_GET['q'];
echo '<option></option>';
$sql = "SELECT * FROM teachersubject WHERE teacher='$q' ORDER BY subject ASC";
$result = mysql_query($sql);
while($rows = mysql_fetch_array($result))
	{
	echo '<script>alert("'.$q.'");</script>';
	echo '<option>'.$rows['subject'].'</option>';
	}


?>