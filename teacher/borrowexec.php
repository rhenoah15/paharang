<?php
include('../connect.php');
$borrowdate = $_POST['borrow'];
$returndate = $_POST['return'];
$book = $_POST['book1'];
$borrower = $_POST['borrower'];
//$contact = $_POST['contact'];
$returnbook = '';
$status = 'Pending';
$trans = $_POST['trans'];



$save2=mysql_query("INSERT INTO borrow (borrower,book,dateborrow,datereturn,returnbook,trans,status) VALUES ('$borrower','$book','$borrowdate','$returndate','$returnbook','$trans','Pending')");
//mysql_query("UPDATE book SET status='Pending' WHERE id='$book'");

		$message = 'Thank you for borrowing a book. Please be notify that you need to return it on '.$returndate;
//sms


//end sms
	
	
echo "<script type=\"text/javascript\">window.alert('You have successfully successfully sent a request to borrow a book. Please wait for the status of your request');window.location.href = 'library.php';</script>"; 	 


?>