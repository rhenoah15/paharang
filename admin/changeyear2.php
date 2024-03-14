<?php
include('../connect.php');
$idnumber = $_GET['id'];
$results = mysql_query("SELECT * FROM seniorstudents WHERE idnumber='$idnumber'");
	while($rows = mysql_fetch_array($results))
		{
		$fname = $rows['fname'];
		$mname = $rows['mname'];
		$lname = $rows['lname'];
		$grade = $rows['grade'];
		$semester = $rows['semester'];
		}



?>
<br>
<b>Change Year/Semester:</b>
<hr>
<br>
<form method="POST" action="changeyearexec2.php">
<input type="hidden" name="idnumber" value="<?php echo $idnumber ?>">
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
<td>Year Level:</td>
<td>
	<select name="grade">
		<option><?php echo $grade ?></option>
		<option>Grade 11</option>
		<option>Grade 12</option>
	</select>
</td>
</tr>
<tr>
<td><p></td>
</tr>
<tr>
<td>Semester:</td>
<td>
	<select name="semester">
		<option><?php echo $semester ?></option>
		<option>First Semester</option>
		<option>Second Semester</option>
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