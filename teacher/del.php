<?php
include('../connect.php');
$id =$_GET['id'];
mysql_query("DELETE FROM document WHERE id = '$id'");
?>
<script>
alert('Record has been deleted');
window.location='report.php';
</script>