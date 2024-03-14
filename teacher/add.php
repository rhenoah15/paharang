<?php
include('../connect.php');
include('../auth.php');
$type =$_POST['type'];
$sem = $_POST['sem'];
$id=$_SESSION['SESS_MEMBER_ID'];
			
			$result1 = mysql_query("SELECT * FROM user WHERE id='$id'");
					while($row1 = mysql_fetch_array($result1))
						{
$idnumber = $row1['idnumber'];

						}
				
$target_dir = "../documents/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
$document = $_FILES["file"]["name"];
$date = date('F d, Y');
$save2=mysql_query("INSERT INTO document (sem,type,document,date,idnumber) VALUES ('$sem','$type','$document','$date','$idnumber')");
echo '<script>alert("Document Record has been added");window.location="report.php";</script>';

?>