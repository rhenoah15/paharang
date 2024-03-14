<?php
$idnum=$_GET['idnumber'];
$term=$_GET['term'];
$subject=$_GET['subject'];
include('../connect.php');
$results = mysql_query("SELECT * FROM quiz WHERE idnumber='$idnum' AND subject='$subject' AND term='$term'");
while($rows = mysql_fetch_array($results))
	{
	$score=$rows['score'];
	$id=$rows['id'];
	}
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
<form name="myForm" action="editqexec.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
Score <br />
<input name="id" type="hidden" class="ed" id="brnu" value="<?php echo $id?>" />
<input name="ccode" type="text" class="ed" id="brnu" value="<?php echo $score?>" readonly/>
<br>
New Score <br />
<input name="nscore" type="text" class="ed" id="brnu" required />
<br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>
