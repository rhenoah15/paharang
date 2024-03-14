<?php
error_reporting(0);
ini_set('display_errors', 0);
include('./header.php');
$username = $idnumber;

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$bday = $_POST['bday'];
$bplace = $_POST['bplace'];
$citizen = $_POST['citizen'];
$civil = $_POST['civil'];
$religion = $_POST['religion'];
$address = $_POST['address'];
$telnum = $_POST['telnum'];
$email = $_POST['email'];
$fname = $_POST['fname'];
$foccupation = $_POST['foccupation'];
$freligion = $_POST['freligion'];
$fcontact = $_POST['fcontact'];
$mname = $_POST['mname'];
$moccupation = $_POST['moccupation'];
$mreligion = $_POST['mreligion'];
$mcontact = $_POST['mcontact'];
$gname = $_POST['gname'];
$goccupation = $_POST['goccupation'];
$greligion = $_POST['greligion'];
$gcontact = $_POST['gcontact'];
$sname = $_POST['sname'];
$soccupation = $_POST['soccupation'];
$sreligion = $_POST['sreligion'];
$scontact = $_POST['scontact'];
$school = $_POST['school'];
$graduated = $_POST['graduated'];
$saddress = $_POST['saddress'];
$reason = $_POST['reason'];
$contact = $_POST['contact'];


$sql = mysql_query("UPDATE emp SET firstname = '$firstname' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET lastname = '$lastname' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET middlename = '$middlename' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET age = '$age' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET gender = '$gender' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET bday = '$bday' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET bplace = '$bplace' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET citizen = '$citizen' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET civil = '$civil' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET religion = '$religion' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET address = '$address' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET telnum = '$telnum' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET email = '$email' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET fname = '$fname' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET foccupation = '$foccupation' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET freligion = '$freligion' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET fcontact = '$fcontact' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET mname = '$mname' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET moccupation = '$moccupation' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET mreligion = '$mreligion' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET mcontact = '$mcontact' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET gname = '$gname' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET greligion = '$greligion' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET goccupation = '$goccupation' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET gcontact = '$gcontact' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET sname = '$sname' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET soccupation = '$soccupation' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET sreligion = '$sreligion' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET scontact = '$scontact' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET school = '$school' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET graduated = '$graduated' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET saddress = '$saddress' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET reason = '$reason' WHERE username = '$username'");
$sql = mysql_query("UPDATE emp SET contact = '$contact' WHERE username = '$username'");





        foreach ($_POST['date1'] as $key => $value) {
   $date1 = $_POST['date1'][$key];
    $date2 =   $_POST['date2'][$key];
    $position =     $_POST['position'][$key];
    $company =     $_POST['company'][$key];
    $salary =     $_POST['salary'][$key];
    $status =     $_POST['status'][$key];
    $number =     $_POST['number'][$key];
$save2=mysql_query("INSERT INTO work (date1,date2,position,company,salary,status,number,username) VALUES ('$date1','$date2','$position','$company','$salary','$status','$number','$username')");
}


   foreach ($_POST['date2a'] as $key1 => $value1) {
	   $date2a = $_POST['date2'][$key];
    $seminar =   $_POST['seminar'][$key];
$save2=mysql_query("INSERT INTO seminar1 (date,seminar,idnumber) VALUES ('$date2a','$seminar','$username')");   
	   }
//end check work

?>
<script>
alert("Profile has been updated");
window.location='profile.php';
</script>