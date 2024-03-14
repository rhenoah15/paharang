<?php
include('../../../auth.php');
$id=$_SESSION['SESS_MEMBER_ID'];
include('../../../connect.php');
$result2 = mysql_query("SELECT * FROM login WHERE id='$id'");
while($row2 = mysql_fetch_array($result2))
	{
		$username = $row2['username'];
		$name = $row2['name'];
		$course = $row2['course'];
		$contact = $row2['contact'];
		$address = $row2['address'];
	}
	
?>
 <?php
if(isset($_POST['msg'])){
    include('../../../connection.php');
    $msg = $_POST['msg'];
    $user = $username;
    $rece = $_POST['rece'];
	$status = $_POST['status'];
	//uploadfile
	$target_dir = "../../../uploads/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    //echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
	} else {
    //echo "Sorry, there was an error uploading your file.";
	}
	$file = $_FILES["file"]["name"];
	//end upload
    if($msg==""){
//		echo 'a';
        //echo "<script>alert('Enter your Message...');</script>";	
    }
    else{
		echo 'b';
		$date =date('Y-m-d');
		$time = date('h:i A');
        $query="insert into msg (user,user2,msg,date,time,file) values('$user','$rece','$msg','$date','$time','$file')";
        $run=mysqli_query($con,$query);	
//        echo "<script>alert('Message sent');</script>";	
    }
	if($status == 'Offline') {
		
$result2a = mysql_query("SELECT * FROM login WHERE username='$rece'");
while($row2a = mysql_fetch_array($result2a))
	{
		$email =$row2a['email'];
		
$to = $email;
    $subject = 'stcbauan.tech on site message';
    //$message = 'Good day! This is stcbauan.tech. Admin has posted new job offers on the website. Thannk you.';
	$message = 'Hi '.$rece.' Visit stcbauan.tech and check your messenger. You have a new message from '.$username.'.';
  $headers = 'From: information@stcbauan.tech'       . "\r\n" .
                 'Reply-To: information@stcbauan.tech' . "\r\n".
         $header .= "MIME-Version: 1.0\r\n".
         $header .= "Content-type: text/html\r\n";
                 
				 
                 
				 
		echo '<script>console.log("'.$message.' '.$email.'");</script>';
    if(mail($to, $subject, $message, $headers)) {
		echo '<script>console.log("sent");</script>';
	} else {
		echo '<script>console.log("not");</script>';
		
	}
	}
	}
}	

?>
			
			

<script>
window.location="../msg1.php?id=<?php echo $rece ?>";
</script>