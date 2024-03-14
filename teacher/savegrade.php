<?php
include('../connect.php');


$a = 0;
foreach($_POST['username'] as $idnumber) {
$term=$_POST['term'];
$subject = $_POST['subject'];

    //echo $idnumber.'<br>';
    //echo $_POST['grade'][$a].'<br>';
	$grade = $_POST['grade'][$a];
	$quar = $_POST['quarter'];
	$idnum = $_POST['username'][$a];
	mysql_query("DELETE FROM quiz WHERE idnumber = '$idnum' AND subject = '$subject' AND term = '$term'");
	mysql_query("INSERT INTO quiz (term, idnumber, subject, score,quarter) VALUES ('$term','$idnum','$subject','$grade','$quar')");
	
$a +=1;
}


//		mysql_query("INSERT INTO quiz (term, idnumber, subject, score) VALUES ('$term','$studidnum','$subject','$grade')");
//header('location: listsubject.php');
//echo '<script>alert("Grade has been added");window.location="submitgrade.php?subject='.$subject.'&quarter='.$term.'"</script>';
echo '<script>alert("Grade has been added");window.history.back();</script>';
?>