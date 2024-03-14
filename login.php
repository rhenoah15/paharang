<?php
	session_start();
	include('connect.php');
	if (isset($_POST['submit'])) {

	$login=$_POST['username'];
	$password=$_POST['password'];
	$result=mysql_query("SELECT * FROM login WHERE username='$login' AND password='$password'")or die (mysql_error());
	
$count=mysql_num_rows($result);
$row=mysql_fetch_array($result);
		
		if ($count > 0){
			
		$_SESSION['SESS_MEMBER_ID'] = isset($member['id']);
	
	
	$login = $_POST['username'];
	$password = $_POST['password'];
	$result = mysql_query("SELECT * FROM login WHERE username='$login' AND password='$password'")or die (mysql_error());
	while($row = mysql_fetch_array($result))
		{
		$position = $row['type'];
		}
		echo $position;
	if ($position=='admin')
	{
$qry="SELECT * FROM login WHERE username='$login' AND password='$password'";
		$result=mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				session_regenerate_id();
				$member = mysql_fetch_assoc($result);
				$_SESSION['SESS_MEMBER_ID'] = $member['id'];
				session_write_close();
				header("location: admin/announcement.php");
				exit();
			}else {
				header("location: admin.php");
				exit();
			}
		}else {
			die("Query failed");
		}
	}
	if ($position=='ict')
	{
$qry="SELECT * FROM login WHERE username='$login' AND password='$password'";
		$result=mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				session_regenerate_id();
				$member = mysql_fetch_assoc($result);
				$_SESSION['SESS_MEMBER_ID'] = $member['id'];
				session_write_close();
				header("location: admin/index.php");
				exit();
			}else {
				header("location: admin.php");
				exit();
			}
		}else {
			die("Query failed");
		}
	}
	if ($position=='principal')
	{
$qry="SELECT * FROM login WHERE username='$login' AND password='$password'";
		$result=mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				session_regenerate_id();
				$member = mysql_fetch_assoc($result);
				$_SESSION['SESS_MEMBER_ID'] = $member['id'];
				session_write_close();
				header("location: principal/index.php");
				exit();
			}else {
				header("location: admin.php");
				exit();
			}
		}else {
			die("Query failed");
		}
	}
	
	
	
	if ($position=='student')
	{
$qry="SELECT * FROM login WHERE username='$login' AND password='$password'";
		$result=mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				session_regenerate_id();
				$member = mysql_fetch_assoc($result);
				$_SESSION['SESS_MEMBER_ID'] = $member['id'];
				session_write_close();
				header("location: student/profile.php");
				exit();
			}else {
				header("location: index.php");
				exit();
			}
		}else {
			die("Query failed");
		}
	}
	
	if ($position=='Faculty')
	{
$qry="SELECT * FROM login WHERE username='$login' AND password='$password'";
		$result=mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				session_regenerate_id();
				$member = mysql_fetch_assoc($result);
				$_SESSION['SESS_MEMBER_ID'] = $member['id'];
				session_write_close();
				header("location: faculty/index.php");
				exit();
			}else {
				header("location: index.php");
				exit();
			}
		}else {
			die("Query failed");
		}
	}
		
	if ($position=='teacher')
	{
$qry="SELECT * FROM login WHERE username='$login' AND password='$password'";
		$result=mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				session_regenerate_id();
				$member = mysql_fetch_assoc($result);
				$_SESSION['SESS_MEMBER_ID'] = $member['id'];
				session_write_close();
				header("location: teacher/profile.php");
				exit();
			}else {
				header("location: index.php");
				exit();
			}
		}else {
			die("Query failed");
		}
	}
	if ($position=='registrar')
	{
$qry="SELECT * FROM login WHERE username='$login' AND password='$password'";
		$result=mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				session_regenerate_id();
				$member = mysql_fetch_assoc($result);
				$_SESSION['SESS_MEMBER_ID'] = $member['id'];
				session_write_close();
				header("location: registrar/announcement.php");
				exit();
			}else {
				header("location: index.php");
				exit();
			}
		}else {
			die("Query failed");
		}
	}
		
	
	
	}
	
	else{
		$_SESSION['tries'] = $_SESSION['tries'] + 1;
		 $_SESSION['last_login_time'] = time();

		 echo "<script type=\"text/javascript\">window.alert('Username and Password did not match.');window.history.back();</script>"; 
   exit;
		}
}
?>