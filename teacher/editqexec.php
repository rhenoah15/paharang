<?php
include('../connect.php');
$id=$_POST['id'];
$nscore=$_POST['nscore'];

	$asasas=$nscore;
	mysql_query("UPDATE quiz SET score='$asasas' WHERE id='$id'");

echo "<script>window.close();</script>";
?>