<?php
include('../connect.php');
$id = $_GET['id'];
mysql_query("UPDATE sched SET status = 'Done' WHERE teacher = '$id'");
mysql_query("UPDATE teachersubject SET status = 'Done' WHERE teacher = '$id'");
?>
<script>
alert("Schedules has been cleared");
window.history.back();
</script>