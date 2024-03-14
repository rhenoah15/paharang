<?php
include('header.php');
$faculty  = $_POST['faculty'];
$date = date('Y-m-d');
$type ='Faculty';
$comment  = $_POST['comment'];
for ($i = 0; $i < count($_POST['qid']); $i++)
{
   $qid = $_POST['qid'][$i];
   $answer = $_POST['answer'][$qid];
   
   mysql_query("INSERT INTO evaluation (student, faculty, qid, answer, date,type,comment) VALUES ('$idnumber','$faculty','$qid','$answer','$date','$type','$comment')");
}

$faculty = $_POST['faculty'];
//$a = $_POST['a'];
//$b = $_POST['b'];
//$c = $_POST['c'];
//$d = $_POST['d'];
//$e = $_POST['e'];
//$f = $_POST['f'];
//$g = '';
//$h = '';
//$i = '';
//$date = date('Y-m-d');
//mysql_query("INSERT INTO evaluation (student, faculty, a, b, c, d, e, f, g, h,i,date) VALUES ('$idnumber','$faculty','$a','$b','$c','$d','$e','$f','$g','$h','$i','$date')");
?>
<script>
alert("Your evaluation has been recorded");
window.location='eval.php';
</script>