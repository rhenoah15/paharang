<?php
include('../connect.php');
$id = $_GET['id'];
mysql_query("UPDATE login SET type = 'deleted' WHERE id = '$id'");
?>
<script>
alert("Record has been deleted");
window.history.back();
</script>