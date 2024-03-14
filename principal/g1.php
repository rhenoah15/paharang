<?php
include('../connect.php');
$q = $_GET['q'];
//
		$results = mysql_query("SELECT * FROM section WHERE course = '$q' ");
		while($rows = mysql_fetch_array($results))
			{
			echo '<option value="'.$rows['section'].'">'.$rows['section'].'</option>';
			}
			
		$results = mysql_query("SELECT * FROM senior WHERE grade = '$q' ");
		while($rows = mysql_fetch_array($results))
			{
			echo '<option value="'.$rows['strand'].'">'.$rows['strand'].'</option>';
			}
//end


?>