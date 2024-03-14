<?php
include('../connect.php');
$sched_id = $_POST['sched_id'];
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
	
//echo 'not';
	mysql_query("DELETE FROM sched WHERE id = '$sched_id'");
	mysql_query("INSERT INTO sched (teacher, subject, times, timed, day1, day2, day3, day4, day5, day6, room,status) VALUES ('$teacher','$subject','$times','$timed','$day1','$day2','$day3','$day4','$day5','//$day6','$room1','Done')");
	echo "<script type=\"text/javascript\">window.alert('You have successfully made an schedule.');window.location.href = 'viewworkload.php?id=".$teacher."';</script>";  
										
?>