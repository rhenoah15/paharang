<?php
include('../connect.php');
$id1 = $_GET['id'];
$update=mysql_query("update quiz set status='Approved' where subject='$id1'");



echo '<script>window.location="index.php";alert("Grades has been approved")</script>';


?>