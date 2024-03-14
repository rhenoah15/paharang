<?php
include('../connect.php');
$username = 'admin';
$title = $_POST['title'];
$date = $_POST['date'];
$description = $_POST['description'];

$save=mysql_query("INSERT INTO tools (username, title, date, description) VALUES ('$username','$title','$date','$description')");
	
echo "<script type=\"text/javascript\">window.alert('Announcement has been added. Press OK to continue');window.location.href = 'announcement.php';</script>"; 
	
?>