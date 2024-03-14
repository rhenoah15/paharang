<?php
include('../connect.php');
$idnumber = $_GET['id'];
$results = mysql_query("SELECT * FROM juniorstudents WHERE idnumber='$idnumber'");
	while($rows = mysql_fetch_array($results))
		{
		$fname = $rows['fname'];
		$mname = $rows['mname'];
		$lname = $rows['lname'];
		$course = $rows['course'];
		}



?>
<br>
<b>Change Year/Semester:</b>
<hr>
<br>
<form method="POST" action="changeyearexec1.php">
<input type="hidden" name="idnumber" value="<?php echo $idnumber ?>">
<input type="hidden" name="course" value="<?php echo $course ?>">
<table border="0" align="center" width="500px">
<tbody style="font-family:Arial; font-size:12px;">
<tr>
<td>Name:</td><td><?php echo $fname.' '.$mname.' '.$lname?></td>
</tr>
<tr>
<td><p></td>
</tr>
<tr>
<td>Idnumber:</td><td><?php echo $idnumber?></td>
</tr>
<tr>
<td><p></td>
</tr>
<tr>
<td><p></td>
</tr>
<tr>
<td>Grade:</td>
<td>
	<select name="course">
		<option><?php echo $course ?></option>
		<option>Grade 7</option>
		<option>Grade 8</option>
		<option>Grade 9</option>
		<option>Grade 10</option>
	</select>
</td>
</tr>
<tr>
<td><p></td>
</tr>
<tr>
<td><p></td>
</tr>
<tr>
<td></td>
<td>	</td>
</tr>
</table>
<input type="submit" name="submit">
</form>