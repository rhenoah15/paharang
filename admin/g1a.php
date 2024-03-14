<?php
include('../connect.php');
$q = $_GET['q'];
$grade = $_GET['grade'];
//
		$results = mysql_query("SELECT * FROM seniorsubjects WHERE strand = '$q' AND grade = '$grade'");
		while($rows = mysql_fetch_array($results))
			{
			echo '<option value="'.$rows['subject'].'">'.$rows['subject'].'</option>';
			}
			
//end


?>