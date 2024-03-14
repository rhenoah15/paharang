<?php
include('../connect.php');
$id = $_GET['id'];
mysql_query("DELETE FROM sched WHERE id = '$id'");
?>
<script>
alert("Record has been deleted");
window.history.back();
</script>