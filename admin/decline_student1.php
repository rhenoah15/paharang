<?php
include('../connect.php');
$id =$_GET['id'];
mysql_query("DELETE FROM login WHERE username = '$id'");
mysql_query("DELETE FROM seniorstudents WHERE idnumber = '$id'");



?>
<script>
alert("Student Registration has been declined");
window.location='app_j.php';
</script>