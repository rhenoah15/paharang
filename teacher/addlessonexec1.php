<?php 
include('../connect.php');
date_default_timezone_set("Asia/Taipei");
$name = $_POST['name'];
$lesson = $_POST['lesson'];
$date = date('D, M j, Y \a\t g:ia');
$teacher = $_POST['teacher'];
$id = $_POST['id'];
mysql_query("UPDATE lesson SET title = '$name' WHERE id = '$id'");
mysql_query("UPDATE lesson SET lesson = '$lesson' WHERE id = '$id'");

		 echo "<script type=\"text/javascript\">window.alert('Lesson plan has been updated.');window.location.href = 'lesson.php';</script>"; 

?>