<script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}
</script><link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
  <style>
  
#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #800000;
  color: white;
}
input[type=text],input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
  </style>
       
<script >
	(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
			var x = $('#data-table tbody tr:visible').length;
			document.getElementById("box").innerHTML = 'Number of Prisoner: '+x;
					
				});
			});
			
			
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
			
			
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
			
		};
		
			
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			
			LightTableFilter.init();
			
		}
	});
})(document);
//# sourceURL=pen.js
</script>	
			
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<?php
	require_once('../auth.php');
?>
<?php
include('../connect.php');
$id=$_GET['id'];
$subject=$_GET['subject'];
$result = mysql_query("SELECT * FROM student WHERE idnumber='$id'");
		while($row = mysql_fetch_array($result))
			{
				$course=$row['course'];
				$year=$row['yearlevel'];
				$semester=$row['semester'];
				$idnumber=$row['idnumber'];
				$fname = $row['fname'];
				$mname = $row['mname'];
				$lname = $row['lname'];
			}
	
?>
<div id="printTable">
<table width="100%" cellpadding="1" cellspacing="1" id="customers">
  <tr>
    <th style="border-left: 1px solid #C1DAD7" width="86" >Code</th>
    <th width="59" >Instructor</th>
    <th width="56" >Unit</th>
    <th width="23" >Grade</th>
    </tr>
	
	<?php
  $result = mysql_query("SELECT * FROM studsub WHERE student='$idnumber' AND subject='$subject' AND status='active' LIMIT 1");
while($row = mysql_fetch_array($result))
	{
  ?>
  <tr>
 <td style="border-left: 1px solid #C1DAD7"><?php echo $row['subject']?></td>
	<?php
	$subject=$row['subject'];
	$resultj = mysql_query("SELECT * FROM teachersubject WHERE subject='$subject'");
while($rowj = mysql_fetch_array($resultj))
	{
	$ttt=$rowj['teacher'];
	}
	?>
	<td>
	<?php
	$results = mysql_query("SELECT * FROM teacher WHERE idnumber='$ttt'");
    $rows = mysql_fetch_array($results);
	echo $rows['fname'].' '.$rows['lname'];
	?>
	<!-- start percentage -->
  	<?php
	$resultas = mysql_query("SELECT * FROM assignmentpercentage WHERE tid='$ttt'");
    $rowas = mysql_fetch_array($resultas);
	$a=$rowas['apercentage'];
	?>
    <?php
	$resulte = mysql_query("SELECT * FROM exampercentage WHERE tid='$ttt'");
    $rowe = mysql_fetch_array($resulte);
	$e=$rowe['epercentage'];
	?>
    <?php
	$resultp = mysql_query("SELECT * FROM participationpercentage WHERE tid='$ttt'");
    $rowp = mysql_fetch_array($resultp);
	$p=$rowp['papercentage'];
	?>
    <?php
	$resultpp = mysql_query("SELECT * FROM projectpercentage WHERE tid='$ttt'");
    $rowpp = mysql_fetch_array($resultpp);
	$pp=$rowpp['ppercentage'];
	?>
    <?php
	$resultq = mysql_query("SELECT * FROM quizpercentage WHERE tid='$ttt'");
    $rowq = mysql_fetch_array($resultq);
	$q=$rowq['qpercentage'];
	?>
    <?php
	$resultse = mysql_query("SELECT * FROM seatworkpercentage WHERE tid='$ttt'");
    $rowse = mysql_fetch_array($resultse);
	$s=$rowse['spercentage'];
	?>
	</td>
     <!-- end percentage -->
	      <!-- Unit -->
	 <td>
	<?php
	$results = mysql_query("SELECT * FROM subject WHERE subject_id='$subject'");
while($rows = mysql_fetch_array($results))
	{
	echo $rows['unit'];
	}
	?>
	</td>
	
	     <!-- end unit -->
		 
	     <!-- grades prelims -->
<td>	

	<?php
	$results = mysql_query("SELECT * FROM quiz WHERE term='' AND idnumber='$idnumber' AND subject='$subject' ORDER BY ID DESC LIMIT 1");
	$count=mysql_num_rows($results);//isipon kn may tyakto sa query
		if ($count > 0) {
while($rows = mysql_fetch_array($results))
	{
		$score =$rows['score'];
		if($score > 75) {
	echo '<a rel="facebox" href="editq.php?term=&idnumber='.$idnumber.'&subject='.$subject.'">'.number_format($rows['score'],2).'</a>';
	$prelim = $rows['score'];
		} else {
	echo '<a rel="facebox" href="editq.php?term=&idnumber='.$idnumber.'&subject='.$subject.'">'.number_format($rows['score'],2).'</a>';
	$prelim = $rows['score'];
			
		}
	}
	}
	else {
	echo 0;
	$prelim = 0;
	}
	?>
	</td>

   <!-- end project-->	
	
	
	
  </tr>
	
	
	
	
	
	
	
	
	
	
	
 <?php
  }
  ?>	
	</table>
	

</div>
	<input type="button" value="Print" onclick="printData()">


