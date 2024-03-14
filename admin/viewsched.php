<h3>Schedule Summary</h3>
<hr style="width:500px">
	<div style="width:100%;overflow-x:scroll">
<table border="1" align="center" id="customers"> 
<tbody align="center" style="font-family:Arial;font-size:12px">
<tr>
	<th>Monday</th>
	<th>Tuesday</th>
	<th>Wednesday</th>
	<th>Thursday</th>
	<th>Friday</th>
	<th>Room</th>
<tr>

	<?php
	include('../connect.php');	
			
$idnumber = $_GET['id'];				
	$results = mysql_query("SELECT * FROM sched WHERE status = 'Done' GROUP BY subject ORDER BY times");
	while($rows = mysql_fetch_array($results))
		{
			
		$timein = $rows['times'];
		$timeout = $rows['timed'];
		$timein2 = $rows['timein2'];
		$timeout2 = $rows['timeout2'];
		$timein3 = $rows['timein3'];
		$timeout3 = $rows['timeout3'];
		$timein4 = $rows['timein4'];
		$timeout4 = $rows['timeout4'];
		$timein5 = $rows['timein5'];
		$timeout5 = $rows['timeout5'];
		$timein6 = $rows['timein6'];
		$timeout6 = $rows['timeout6'];
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
		$timeinin2 = date('h:i A', strtotime($timein2));
		$timeoutin2 = date('h:i A', strtotime($timeout2));
		$timeinin3 = date('h:i A', strtotime($timein3));
		$timeoutin3 = date('h:i A', strtotime($timeout3));
		$timeinin4 = date('h:i A', strtotime($timein4));
		$timeoutin4 = date('h:i A', strtotime($timeout4));
		$timeinin5 = date('h:i A', strtotime($timein5));
		$timeoutin5 = date('h:i A', strtotime($timeout5));
		$timeinin6 = date('h:i A', strtotime($timein6));
		$timeoutin6 = date('h:i A', strtotime($timeout6));
		
					$result = mysql_query("SELECT * FROM teachersubject WHERE subject='$subject1' AND teacher='$idnumber'");
					while($row = mysql_fetch_array($result))
							{			
			echo '<tr>';
		//	echo '<td>'.$timeinin.' - '.$timeoutin.'</td>';
			// day1 Monday
			if ($day1 == 'Monday') {
			echo '<td height="50" bgcolor="yellow">'.$subject1.'<br>'.$timeinin.' - '.$timeoutin.'</td>'; 
			} else {
			echo '<td style="border:none"></td>';
			}
			
			// day2
			if ($day1 == 'Tuesday') {
			echo '<td height="50" bgcolor="green">'.$subject1.'<br>'.$timeinin2.' - '.$timeoutin2.'</td>'; 
			} 
			else if ($day2 == 'Tuesday'){
			echo '<td height="50" bgcolor="green">'.$subject1.'<br>'.$timeinin2.' - '.$timeoutin2.'</td>'; 
			}
			else {
			echo '<td style="border:none"></td>';
			}
			// day 3
			if ($day1 == 'Wednesday') {
			echo '<td height="50" bgcolor="orange">'.$subject1.'<br>'.$timeinin3.' - '.$timeoutin3.'</td>'; 
			} 
			else if ($day2 == 'Wednesday'){
			echo '<td height="50" bgcolor="orange">'.$subject1.'<br>'.$timeinin3.' - '.$timeoutin3.'</td>'; 
			}
			else if ($day3 == 'Wednesday'){
			echo '<td height="50" bgcolor="orange">'.$subject1.'<br>'.$timeinin3.' - '.$timeoutin3.'</td>'; 
			}
			else {
			echo '<td style="border:none"></td>';
			}
			// day 4
			if ($day1 == 'Thursday') {
			echo '<td height="50" bgcolor="violet">'.$subject1.'<br>'.$timeinin4.' - '.$timeoutin4.'</td>'; 
			} 
			else if ($day2 == 'Thursday'){
			echo '<td height="50" bgcolor="violet">'.$subject1.'<br>'.$timeinin4.' - '.$timeoutin4.'</td>'; 
			}
			else if ($day3 == 'Thursday'){
			echo '<td height="50" bgcolor="violet">'.$subject1.'<br>'.$timeinin4.' - '.$timeoutin4.'</td>'; 
			}
			else if ($day4 == 'Thursday'){
			echo '<td height="50" bgcolor="violet">'.$subject1.'<br>'.$timeinin4.' - '.$timeoutin4.'</td>'; 
			}
			else {
			echo '<td style="border:none"></td>';
			}
			// day 5
			if ($day1 == 'Friday') {
			echo '<td height="50" bgcolor="white"><font color="black">'.$subject1.'<br>'.$timeinin5.' - '.$timeoutin5.'</td>'; 
			} 
			else if ($day2 == 'Friday'){
			echo '<td height="50" bgcolor="white"><font color="black">'.$subject1.'<br>'.$timeinin5.' - '.$timeoutin5.'</td>'; 
			}
			else if ($day3 == 'Friday'){
			echo '<td height="50" bgcolor="white"><font color="black">'.$subject1.'<br>'.$timeinin5.' - '.$timeoutin5.'</td>'; 
			}
			else if ($day4 == 'Friday'){
			echo '<td height="50" bgcolor="white"><font color="black">'.$subject1.'<br>'.$timeinin5.' - '.$timeoutin5.'</td>'; 
			}
			else if ($day5 == 'Friday'){
			echo '<td height="50" bgcolor="white"><font color="black">'.$subject1.'<br>'.$timeinin5.' - '.$timeoutin5.'</td>'; 
			}
			else {
			echo '<td style="border:none"></td>';
			}
			
			echo '<td>'.$rows['room'].'</td>';
			
			echo '</tr>';
				}

				}
	?>
	




</table>			

  
</div>