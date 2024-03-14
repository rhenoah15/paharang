<?php
include('../connect.php');
$time = $_POST['time'];
$day = $_POST['day'];
$room = $_POST['room'];
$r = mysql_query("SELECT * FROM sched WHERE times = '$time' AND day1 = '$day' AND room = '$room'");
$s = mysql_num_rows($r);
echo $s;
?>