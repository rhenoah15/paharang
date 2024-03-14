<?php 
include('../connect.php');
date_default_timezone_set("Asia/Taipei");
$name = $_POST['name'];
$lesson = $_POST['lesson'];
$date = date('D, M j, Y \a\t g:ia');
$teacher = $_POST['teacher'];
$save2=mysql_query("INSERT INTO lesson (title,lesson,date,teacher) VALUES ('$name','".mysql_real_escape_string($lesson)."','$date','$teacher')");


		 echo "<script type=\"text/javascript\">window.alert('Lesson plan has been added.');window.location.href = 'lesson.php';</script>"; 

?>