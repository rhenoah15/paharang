
<?php
include('header.php');
					  $seminar = $_POST['seminar'];
					  $date= $_POST['date'];
					  
$target_dir = "../documents/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
$document = $_FILES["file"]["name"];
					
$save2=mysql_query("INSERT INTO seminar (seminar,date,file,idnumber) VALUES ('$seminar','$date','$document','$idnumber')");
echo '<script>alert("Seminar record has been added");window.location="seminar.php";</script>';  

?>