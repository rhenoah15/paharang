<?php
include('../connect.php');

	$day1 = $_POST["days1"];
	$day2 = $_POST["days2"];
	$day3 = $_POST["days3"];
	$day4 = $_POST["days4"];
	$day5 = $_POST["days5"];
	$day6 = $_POST["days6"];
	$teacher = $_POST['teacher'];
	$subject = $_POST['subject'];
	$times = $_POST['timein'];
	$timed = $_POST['timeout'];
	$times2 = $_POST['timein2'];
	$timed2 = $_POST['timeout2'];
	$times3 = $_POST['timein3'];
	$timed3 = $_POST['timeout3'];
	$times4 = $_POST['timein4'];
	$timed4 = $_POST['timeout4'];
	$times5 = $_POST['timein5'];
	$timed5 = $_POST['timeout5'];
	$times6 = $_POST['timein6'];
	$timed6 = $_POST['timeout6'];
	$room1 = $_POST['room'];
	if ($day2=="") {
	$day2 = "NULL";
	}
	if ($day3=="") {
	$day3 = "NULL";
	}
	if ($day4=="") {
	$day4 = "NULL";
	}
	if ($day5=="") {
	$day5 = "NULL";
	}
	if ($day6=="") {
	$day6 = "NULL";
	}
	$times = date('h:i A',strtotime($times));
	//$results = mysql_query("SELECT * FROM sched WHERE subject = '$subject' AND teacher = '$teacher'");
	//$count=mysql_num_rows($results);
//if($count>0) {
//	echo '<script>alert("You already made a schedule for this subject.");window.history.back();</script>';
//} else {
echo 'not';
	mysql_query("INSERT INTO sched (teacher, subject, times, timed, day1, day2, day3, day4, day5, day6, room,timein2,timein3,timein4,timein5,timein6,timeout2,timeout3,timeout4,timeout5,timeout6) VALUES ('$teacher','$subject','$times','$timed','$day1','$day2','$day3','$day4','$day5','$day6','$room1','$times2','$times2','$times4','$times5','$times6','$timed2','$timed3','$timed4','$timed5','$timed6')");
	echo "<script type=\"text/javascript\">window.alert('You have successfully made an schedule.');window.location.href = 'viewworkload.php?id=".$teacher."';</script>";  
	//	}									
?>