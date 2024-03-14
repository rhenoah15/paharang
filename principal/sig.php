<?php
include('../connect.php');
$id = $_POST['id'];
$idnumber = $_POST['idnumber'];
$file = $_POST['file'];
mysql_query("UPDATE quiz SET status = '$file' WHERE id = '$id'");
?>
<script>
alert("Signature has been added");
window.location='grades1.php?id=<?php echo $idnumber ?>';
</script>