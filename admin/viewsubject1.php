<style>

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #800000;
  color: white;
}

</style>
<?php
include('../connect.php');
$idnumber=$_GET['id'];
	$results = mysql_query("SELECT * FROM juniorstudents WHERE idnumber='$idnumber'");
	while($rows = mysql_fetch_array($results))
		{
		$fname = $rows['fname'];
		$mname = $rows['mname'];
		$lname = $rows['lname'];
		}
?>

<b>Student: </b><?php echo $fname.' '.$mname.' '.$lname?>
<br>
<br>
<table align="center" width="100%" id="customers"> 
<tbody align="center" style="font-family:Arial;font-size:12px">
<tr>
	<th>Time</th>
	<th>Monday</th>
	<th>Tuesday</th>
	<th>Wednesday</th>
	<th>Thursday</th>
	<th>Friday</th>
	<th>Saturday</th>
	<th>Instructor</th>
	<th>Room</th>
<tr>

	<?php
	include('../connect.php');	
			
				
	$results = mysql_query("SELECT * FROM sched ORDER BY times ASC");
	while($rows = mysql_fetch_array($results))
		{
		$timein = $rows['times'];
		$timeout = $rows['timed'];
		$day1 = $rows['day1'];
		$day2 = $rows['day2'];
		$day3 = $rows['day3'];
		$day4 = $rows['day4'];
		$day5 = $rows['day5'];
		$day6 = $rows['day6'];
		$teacher = $rows['teacher'];
		$subject1 = $rows['subject'];
		$timeinin = date('h:i A', strtotime($timein));
		$timeoutin = date('h:i A', strtotime($timeout));
		
					$result = mysql_query("SELECT * FROM juniorsubjects WHERE subject='$subject1' ");
					while($row = mysql_fetch_array($result))
							{			
			echo '<tr>';
			echo '<td>'.$timeinin.' - '.$timeoutin.'</td>';
			// day1 Monday
			if ($day1 == 'Monday') {
			echo '<td height="50" bgcolor="yellow">'.$subject1.'</td>'; 
			} else {
			echo '<td style="border:none"></td>';
			}
			
			// day2
			if ($day1 == 'Tuesday') {
			echo '<td height="50" bgcolor="green">'.$subject1.'</td>'; 
			} 
			else if ($day2 == 'Tuesday'){
			echo '<td height="50" bgcolor="green">'.$subject1.'</td>'; 
			}
			else {
			echo '<td style="border:none"></td>';
			}
			// day 3
			if ($day1 == 'Wednesday') {
			echo '<td height="50" bgcolor="orange">'.$subject1.'</td>'; 
			} 
			else if ($day2 == 'Wednesday'){
			echo '<td height="50" bgcolor="orange">'.$subject1.'</td>'; 
			}
			else if ($day3 == 'Wednesday'){
			echo '<td height="50" bgcolor="orange">'.$subject1.'</td>'; 
			}
			else {
			echo '<td style="border:none"></td>';
			}
			// day 4
			if ($day1 == 'Thursday') {
			echo '<td height="50" bgcolor="violet">'.$subject1.'</td>'; 
			} 
			else if ($day2 == 'Thursday'){
			echo '<td height="50" bgcolor="violet">'.$subject1.'</td>'; 
			}
			else if ($day3 == 'Thursday'){
			echo '<td height="50" bgcolor="violet">'.$subject1.'</td>'; 
			}
			else if ($day4 == 'Thursday'){
			echo '<td height="50" bgcolor="violet">'.$subject1.'</td>'; 
			}
			else {
			echo '<td style="border:none"></td>';
			}
			// day 5
			if ($day1 == 'Friday') {
			echo '<td height="50" bgcolor="white"><font color="black">'.$subject1.'</td>'; 
			} 
			else if ($day2 == 'Friday'){
			echo '<td height="50" bgcolor="white"><font color="black">'.$subject1.'</td>'; 
			}
			else if ($day3 == 'Friday'){
			echo '<td height="50" bgcolor="white"><font color="black">'.$subject1.'</td>'; 
			}
			else if ($day4 == 'Friday'){
			echo '<td height="50" bgcolor="white"><font color="black">'.$subject1.'</td>'; 
			}
			else if ($day5 == 'Friday'){
			echo '<td height="50" bgcolor="white"><font color="black">'.$subject1.'</td>'; 
			}
			else {
			echo '<td style="border:none"></td>';
			}
			// day 6
			if ($day1 == 'Saturday') {
			echo '<td height="50" bgcolor="#39B7CD"><font color="black">'.$subject1.'</td>'; 
			} 
			else if ($day2 == 'Saturday'){
			echo '<td height="50" bgcolor="#39B7CD"><font color="black">'.$subject1.'</td>'; 
			}
			else if ($day3 == 'Saturday'){
			echo '<td height="50" bgcolor="#39B7CD"><font color="black">'.$subject1.'</td>'; 
			}
			else if ($day4 == 'Saturday'){
			echo '<td height="50" bgcolor="#39B7CD"><font color="black">'.$subject1.'</td>'; 
			}
			else if ($day5 == 'Saturday'){
			echo '<td height="50" bgcolor="#39B7CD"><font color="black">'.$subject1.'</td>'; 
			}
			else if ($day6 == 'Saturday'){
			echo '<td height="50" bgcolor="#39B7CD"><font color="white">'.$subject1.'</td>'; 
			}
			else {
			echo '<td style="border:none"></td>';
			}
				$resultt = mysql_query("SELECT * FROM teacher WHERE idnumber='$teacher'");
				while($rowt = mysql_fetch_array($resultt))
					{
					$fname = $rowt['fname'];
					$mname = $rowt['mname'];
					$lname = $rowt['lname'];
			echo '<td align="left">'.$fname.' '.$mname.' '.$lname.'</td>';
					}
					echo '<td>'.$rows['room'].'</td>';
			echo '</tr>';
			
				}

				}
	?>
	




</table>
