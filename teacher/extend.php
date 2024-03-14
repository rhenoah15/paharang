<?php
include('../connect.php');
$id = $_GET['id'];
$stat = 'Renew';
$date = date('Y-m-d', strtotime(' + 3 days'));
mysql_query("UPDATE borrow SET datereturn = '$date' WHERE id = '$id'");
mysql_query("UPDATE borrow SET status = 'Renew' WHERE id = '$id'");
mysql_query("UPDATE borrow SET stat = '$stat' WHERE id = '$id'");
?>
<script>
alert("You have been successfully updated your book borrowing time");
window.location='return.php';
</script>