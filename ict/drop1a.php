<?php
include('../connect.php');
$id = $_GET['id'];
mysql_query("UPDATE juniorstudents SET status1 = 'Drop' WHERE id = '$id'");
?>
<script>
alert("Student status has been updated");
window.history.back();
</script>