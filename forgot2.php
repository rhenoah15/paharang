<?php
include("./connect.php"); 
error_reporting(0);
ini_set('display_errors', 0);
$email = $_POST['email'];
$c = 0;
	$result=mysql_query("SELECT * FROM seniorstudents WHERE email='$email'"); 
	$count=mysql_num_rows($result);
	$c += $count;
	
	$result1=mysql_query("SELECT * FROM teacher WHERE email='$email'"); 
	$count1=mysql_num_rows($result1);
	$c += $count1;
	if($c == 0) {
		echo "<script type=\"text/javascript\">window.alert('Email not found.');window.location.href = 'index.php';</script>"; 
	} else {
	$pass = 'vvye2as7$z';
	$num = rand(1000,9999);
	

	$to      = $_POST['email'];
    $subject = 'Paharang Integrated School Password Recorvery';
    $message = 'Good day, This is Paharang Integrated School and you can use this code to retrieve your account:'.$num;

  $headers = 'From: account@paharangintegratedschool.tech'       . "\r\n" .
                 'Reply-To: account@paharangintegratedschool.tech' . "\r\n".
         $header .= "MIME-Version: 1.0\r\n".
         $header .= "Content-type: text/html\r\n";
                 
				 
                 
				 
		echo '<script>console.log("'.$message.' '.$email.'");</script>';
    if(mail($to, $subject, $message, $headers)) {
		echo '<script>console.log("sent");</script>';
	} else {
		echo '<script>console.log("not");</script>';
		
	}
		


} 

?>
<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  


  <title>Paharang Integrated School</title>
  
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
  
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background-color: #f6f5f7;
	background:url('img/background.jpg');
	background-size:100% 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #097969;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>
<style>
#top {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 999;
    width: 100%;
    height: 23px;
	padding:10px;
	
}
</style>
<body translate="no" >
  
<div class="container" id="container">
	<div class="form-container sign-up-container">
	</div>
	<div class="form-container sign-in-container">
		<form action="login.php" method="POST" id="login-form1" style="margin-top:-30px">
			
			<img src="img/logo.png" style="width:50%">
				<h1 style="margin:0px;padding:0px">WELCOME</h1>
				<h3 style="margin:0px;padding:0px">Paharang Integrated School</h3>
				<h1 style="margin:0px;padding:0px">PORTAL</h1>
				
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<img src="img/logo.png" style="width:50%" onclick="window.location='index.php'">
				<h3>Paharang Integrated School</p>
				
			</div>
			<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #d5d5d5;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #d5d5d5;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: #d5d5d5;
}
</style>

			<div class="overlay-panel overlay-right" style="background:#FFF;color:#000">
			<div id="top">
			<!--
<div class="dropdown" style="float:left">
			<h4 style="margin:0px;margin-top:5px;text-align:left">Select Type of User</h4>
			 <div class="dropdown-content" style="text-align:left;padding:2px">
    <h5 style="color:#FFF;background-color:#426642;padding:10px;margin:0px;cursor:pointer" onclick="window.location='log.php?type=Student'">Student</h4>
    <h5 style="color:#FFF;background-color:#426642;padding:10px;margin:0px;cursor:pointer" onclick="window.location='log.php?type=Employee'">Admin</h4>
    <h5 style="color:#FFF;background-color:#426642;padding:10px;margin:0px;cursor:pointer" onclick="window.location='log.php?type=Offices'">Offices</h4>
  </div>
  </div>
  -->
			</div>
			
			</form>
			<br><br>
				
				<!-- <form action="login.php" method="POST" style="background:#FFF;width:120%;margin-top:0px;color:#000"  onsubmit="return abc();" id="login-form">  -->
   <form action="pass2.php" method="POST" id="form"  class="form-inline" onsubmit="return act();">
      <h2>Retrieve your account</h2>
	  Enter Verification Code:
    <input type="hidden" id="id" name="contact" placeholder="Phone Number" style="width:100%" value="<?php echo $email  ?>">
    <input type="text" id="a1" name="a1" placeholder="Verification Code" style="width:100%">
    <input type="hidden" id="a2" name="a2" placeholder="" value="<?php echo $num ?>" style="width:100%">
	
<input type="submit" id="buttn"  value="Reset Password" name="submit" class="myButton" style="background:#004BAA;color:#FFF;border-radius:10px;width:100%;border:0" />
 
 <script>
 
function act() {
	
	var a1=document.getElementById('a1').value;
	var a2=document.getElementById('a2').value;
	
	if(a1 == a2) {
		return true;
	}  else {
		alert('Wrong Verification Code');
		document.getElementById('a1').value = '';
		document.getElementById('a1').focus();
		return false;
	}
}
 </script>
 </form>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
Paharang Integrated School - 2023

	</p>
</footer>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>

  
      <script id="rendered-js" >
	  var ac = "<?php echo $_GET['type']; ?>";
	  if(ac == 'Student') {
		  document.getElementById('username').placeholder='Student Number';
	  } else {
		  document.getElementById('username').placeholder='Employee Number';
	  }
	  var d = "<?php echo $_SESSION['tries'] ?>";
	  //alert(d);
	  if(d >= 5) {
		  document.getElementById("username").disabled= true;
		  document.getElementById("password").disabled= true;
		  document.getElementById("textBox").disabled= true;
		  document.getElementById("submit1").disabled= true;
		  document.getElementById('warning').innerHTML = "Login attempts exeed maximum tries. Please wait <?php echo date('s' ,strtotime($_SESSION['last_login_time'])) ?> secs before trying again";
	  }
    </script>

  

<script>
// document.querySelector() is used to select an element from the document using its ID
let captchaText = document.querySelector('#captcha');
var ctx = captchaText.getContext("2d");
ctx.font = "50px Roboto";
ctx.fillStyle = "#08e5ff";

let userText = document.querySelector('#textBox');
let submitButton = document.querySelector('#submitButton');
let output = document.querySelector('#output');
let refreshButton = document.querySelector('#refreshButton');

// alphaNums contains the characters with which you want to create the CAPTCHA
let alphaNums = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
let emptyArr = [];
// This loop generates a random string of 7 characters using alphaNums
// Further this string is displayed as a CAPTCHA
for (let i = 1; i <= 7; i++) {
    emptyArr.push(alphaNums[Math.floor(Math.random() * alphaNums.length)]);
}
var c = emptyArr.join('');
ctx.fillText(emptyArr.join(''),captchaText.width/4, captchaText.height/2);

// This event listener is stimulated whenever the user press the "Enter" button
// "Correct!" or "Incorrect, please try again" message is
// displayed after validating the input text with CAPTCHA

// This event listener is stimulated whenever the user clicks the "Submit" button
// "Correct!" or "Incorrect, please try again" message is
// displayed after validating the input text with CAPTCHA
function abc() {
    if (userText.value === c) {
        output.classList.add("correctCaptcha");
       // output.innerHTML = "Correct!";
		//	alert('correct');
			document.getElementById('login-form').submit();
    } else {
        output.classList.add("incorrectCaptcha");
        output.innerHTML = "Incorrect, please try again";
		//recap
		 userText.value = "";
    let refreshArr = [];
    for (let j = 1; j <= 7; j++) {
        refreshArr.push(alphaNums[Math.floor(Math.random() * alphaNums.length)]);
    }
    ctx.clearRect(0, 0, captchaText.width, captchaText.height);
    c = refreshArr.join('');
    ctx.fillText(refreshArr.join(''),captchaText.width/4, captchaText.height/2);
    //output.innerHTML = "";
		//end
		return false;
    }
}
// This event listener is stimulated whenever the user press the "Refresh" button
// A new random CAPTCHA is generated and displayed after the user clicks the "Refresh" button
refreshButton.addEventListener('click', function() {
    userText.value = "";
    let refreshArr = [];
    for (let j = 1; j <= 7; j++) {
        refreshArr.push(alphaNums[Math.floor(Math.random() * alphaNums.length)]);
    }
    ctx.clearRect(0, 0, captchaText.width, captchaText.height);
    c = refreshArr.join('');
    ctx.fillText(refreshArr.join(''),captchaText.width/4, captchaText.height/2);
    output.innerHTML = "";
});
</script>
</body>

</html>
 
