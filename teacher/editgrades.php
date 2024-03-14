<?php
	require_once('../auth.php');
?>


<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<form name="myForm" action="editlist.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">

Subject<br><br>
<select name="subject" class="ed" required>
<?php
include('../connect.php');
$idnum=$_SESSION['SESS_FIRST_NAME'];
$results = mysql_query("SELECT * FROM teachersubject WHERE teacher='$idnumber'");
while($rows = mysql_fetch_array($results))
	{
	echo '<option>'.$rows['subject'].'</option>';
	}
?>
</select><br>
<input type="submit" value="View" style="width:100%" class="btn" disabled>
</form>
