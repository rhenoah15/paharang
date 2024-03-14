<?php
include('../connect.php');
$id =$_GET['id'];
mysql_query("DELETE FROM tools WHERE id = '$id'");
?>
<script>
alert("Announcement has been deleted");
window.location='announcement.php';
</script>