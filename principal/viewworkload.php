<?php include('header.php'); ?>
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.html -->
      <header class="mdc-top-app-bar">
        <div class="mdc-top-app-bar__row">
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
            
           
          </div>
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
            
          <style>
		  
/* Float four columns side by side */
.column1 {
  float: left;
  width: 22%;
  padding: 0 10px;
}
.column1a {
  float: left;
  width: 70%;
  padding: 0 10px;
}

.column1b {
  float: left;
  width: 25%;
  padding: 0 10px;
}
/* Remove extra left and right margins, due to padding */
.row1 {margin: 0 -5px;}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column1 {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
  .column1a {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
  .column1b {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #FFF;
}



/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}


/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 95%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
		  </style>
			
            
          </div>
        </div>
      </header>
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
           
            
           
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12" style="min-height:700px">
                <div class="mdc-card">
                  <div class="d-flex justify-content-between">
                    
                    <div>
                        
                    </div>
                  </div>
	<!-- start -->			
	<style>					
input[type=button],input[type=submit] {
  width: 20%;
  background-color: #800000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=text],input[type=time], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

</style>
<?php
function createRandomPassword() {
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;
    while ($i <= 7) {

        $num = rand() % 33;

        $tmp = substr($chars, $num, 1);

        $pass = $pass . $tmp;

        $i++;

    }
    return $pass;
}
$finalcode='AC-'.createRandomPassword();
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
<?php
			include('../connect.php');
			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM teacher WHERE idnumber='$id'");
			while($row = mysql_fetch_array($result))
			{
					$idnumber = $row['idnumber'];
			$fname = $row['fname'];
			$mname = $row['mname'];
			$lname = $row['lname'];
			}
			
?>
<b>Faculty: <?php echo $fname.' '.$mname.' '.$lname ?></b>
<br><br>
	
		<div style="width:100%;overflow-x:scroll">
<table border="1" align="center" id="customers"> 
<tbody align="center" style="font-family:Arial;font-size:12px">
<tr>
	<th>Monday</th>
	<th>Tuesday</th>
	<th>Wednesday</th>
	<th>Thursday</th>
	<th>Friday</th>
	<th>Saturday</th>
	<th>Room</th>
	<th>Action</th>
<tr>

	<?php
	include('../connect.php');	
			
				
	$results = mysql_query("SELECT * FROM sched WHERE status = 'Done' GROUP BY subject ORDER BY times");
	while($rows = mysql_fetch_array($results))
		{
			
		$timein = $rows['times'];
		$timeout = $rows['timed'];
		$timein2 = $rows['timein2'];
		$timeout2 = $rows['timeout2'];
		$timein3 = $rows['timein3'];
		$timeout3 = $rows['timeout3'];
		$timein4 = $rows['timein4'];
		$timeout4 = $rows['timeout4'];
		$timein5 = $rows['timein5'];
		$timeout5 = $rows['timeout5'];
		$timein6 = $rows['timein6'];
		$timeout6 = $rows['timeout6'];
		$day1 = $rows['day1'];
		$day2 = $rows['day2'];
		$day3 = $rows['day3'];
		$day4 = $rows['day4'];
		$day5 = $rows['day5'];
		$day6 = $rows['day6'];
		$teacher = $rows['teacher'];
		$subject1 = $rows['subject'];
		$timeinin = date('h:i A', strtotime($timein));
		$timeoutin = date('h:i A', strtotime($timeout));
		$timeinin2 = date('h:i A', strtotime($timein2));
		$timeoutin2 = date('h:i A', strtotime($timeout2));
		$timeinin3 = date('h:i A', strtotime($timein3));
		$timeoutin3 = date('h:i A', strtotime($timeout3));
		$timeinin4 = date('h:i A', strtotime($timein4));
		$timeoutin4 = date('h:i A', strtotime($timeout4));
		$timeinin5 = date('h:i A', strtotime($timein5));
		$timeoutin5 = date('h:i A', strtotime($timeout5));
		$timeinin6 = date('h:i A', strtotime($timein6));
		$timeoutin6 = date('h:i A', strtotime($timeout6));
		
					$result = mysql_query("SELECT * FROM teachersubject WHERE subject='$subject1' AND teacher='$idnumber'");
					while($row = mysql_fetch_array($result))
							{			
			echo '<tr>';
		//	echo '<td>'.$timeinin.' - '.$timeoutin.'</td>';
			// day1 Monday
			if ($day1 == 'Monday') {
			echo '<td height="50" bgcolor="yellow">'.$subject1.'<br>'.$timeinin.' - '.$timeoutin.'</td>'; 
			} else {
			echo '<td style="border:none"></td>';
			}
			
			// day2
			if ($day1 == 'Tuesday') {
			echo '<td height="50" bgcolor="green">'.$subject1.'<br>'.$timeinin2.' - '.$timeoutin2.'</td>'; 
			} 
			else if ($day2 == 'Tuesday'){
			echo '<td height="50" bgcolor="green">'.$subject1.'<br>'.$timeinin2.' - '.$timeoutin2.'</td>'; 
			}
			else {
			echo '<td style="border:none"></td>';
			}
			// day 3
			if ($day1 == 'Wednesday') {
			echo '<td height="50" bgcolor="orange">'.$subject1.'<br>'.$timeinin3.' - '.$timeoutin3.'</td>'; 
			} 
			else if ($day2 == 'Wednesday'){
			echo '<td height="50" bgcolor="orange">'.$subject1.'<br>'.$timeinin3.' - '.$timeoutin3.'</td>'; 
			}
			else if ($day3 == 'Wednesday'){
			echo '<td height="50" bgcolor="orange">'.$subject1.'<br>'.$timeinin3.' - '.$timeoutin3.'</td>'; 
			}
			else {
			echo '<td style="border:none"></td>';
			}
			// day 4
			if ($day1 == 'Thursday') {
			echo '<td height="50" bgcolor="violet">'.$subject1.'<br>'.$timeinin4.' - '.$timeoutin4.'</td>'; 
			} 
			else if ($day2 == 'Thursday'){
			echo '<td height="50" bgcolor="violet">'.$subject1.'<br>'.$timeinin4.' - '.$timeoutin4.'</td>'; 
			}
			else if ($day3 == 'Thursday'){
			echo '<td height="50" bgcolor="violet">'.$subject1.'<br>'.$timeinin4.' - '.$timeoutin4.'</td>'; 
			}
			else if ($day4 == 'Thursday'){
			echo '<td height="50" bgcolor="violet">'.$subject1.'<br>'.$timeinin4.' - '.$timeoutin4.'</td>'; 
			}
			else {
			echo '<td style="border:none"></td>';
			}
			// day 5
			if ($day1 == 'Friday') {
			echo '<td height="50" bgcolor="white"><font color="black">'.$subject1.'<br>'.$timeinin5.' - '.$timeoutin5.'</td>'; 
			} 
			else if ($day2 == 'Friday'){
			echo '<td height="50" bgcolor="white"><font color="black">'.$subject1.'<br>'.$timeinin5.' - '.$timeoutin5.'</td>'; 
			}
			else if ($day3 == 'Friday'){
			echo '<td height="50" bgcolor="white"><font color="black">'.$subject1.'<br>'.$timeinin5.' - '.$timeoutin5.'</td>'; 
			}
			else if ($day4 == 'Friday'){
			echo '<td height="50" bgcolor="white"><font color="black">'.$subject1.'<br>'.$timeinin5.' - '.$timeoutin5.'</td>'; 
			}
			else if ($day5 == 'Friday'){
			echo '<td height="50" bgcolor="white"><font color="black">'.$subject1.'<br>'.$timeinin5.' - '.$timeoutin5.'</td>'; 
			}
			else {
			echo '<td style="border:none"></td>';
			}
			// day 6
			if ($day1 == 'Saturday') {
			echo '<td height="50" bgcolor="#39B7CD"><font color="black">'.$subject1.'<br>'.$timeinin6.' - '.$timeoutin6.'</td>'; 
			} 
			else if ($day2 == 'Saturday'){
			echo '<td height="50" bgcolor="#39B7CD"><font color="black">'.$subject1.'<br>'.$timeinin6.' - '.$timeoutin6.'</td>'; 
			}
			else if ($day3 == 'Saturday'){
			echo '<td height="50" bgcolor="#39B7CD"><font color="black">'.$subject1.'<br>'.$timeinin6.' - '.$timeoutin6.'</td>'; 
			}
			else if ($day4 == 'Saturday'){
			echo '<td height="50" bgcolor="#39B7CD"><font color="black">'.$subject1.'<br>'.$timeinin6.' - '.$timeoutin6.'</td>'; 
			}
			else if ($day5 == 'Saturday'){
			echo '<td height="50" bgcolor="#39B7CD"><font color="black">'.$subject1.'<br>'.$timeinin6.' - '.$timeoutin6.'</td>'; 
			}
			else if ($day6 == 'Saturday'){
			echo '<td height="50" bgcolor="#39B7CD"><font color="white">'.$subject1.'<br>'.$timeinin6.' - '.$timeoutin6.'</td>'; 
			}
			else {
			echo '<td style="border:none"></td>';
			}
			echo '<td>'.$rows['room'].'</td>';
			echo '<td><a href="update_sched.php?id='.$rows['id'].'&idnumber='.$idnumber.'">Update Schedule</a> <hr><a href="del_sched.php?id='.$rows['id'].'" onclick="return confirm(\'Are you sure you want to delete this record?\')">Delete</a></td>';
			echo '</tr>';
				}

				}
	?>
	




</table>			

  
</div>
	  
		
				  <!-- end -->
				  
				  <br>
                     
					  
         
                  
                </div> 
              </div>
             
           
            </div>
          </div>
        </main>
        <!-- partial:partials/_footer.html -->
        <footer>
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                <span class="text-center text-sm-left d-block d-sm-inline-block tx-14">Copyright © <a href="#" target="_blank">Paharang Integrated School </a>2023</span>
              </div>
              
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
    </div>
  </div>
  
<script type="text/javascript">
 		function checksched()
		{
			var d1 =  document.getElementById('day1label').textContent;
			var d2 =  document.getElementById('day2label').textContent;
			var d3 =  document.getElementById('day3label').textContent;
			var d4 =  document.getElementById('day4label').textContent;
			var d5 =  document.getElementById('day5label').textContent;
			var d6 =  document.getElementById('day6label').textContent;
			var subje = document.getElementById('subjectlabel').textContent;
			
			if(d1 != "" || d2 != "" || d3 != "" || d4 != "" || d5 != "" || d6 != "" || subje != "")
			{
			alert('Your schedule is still conflict to other subject.');
			document.getElementById('days1').value = "";
			document.getElementById('days2').value = "";
			document.getElementById('days3').value = "";
			document.getElementById('days4').value = "";
			document.getElementById('days5').value = "";
			document.getElementById('days6').value = "";
			return false;	
			}
			else{	
					
				return true;
			}
		}


 
 //end check sched
function showUser(str) {
  if (str=="") {
    document.getElementById("subject").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("subject").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","teach.php?q="+str,true);
  xmlhttp.send();

  }
  // day1 start here


 function day1(days1) {
 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("day1label").innerHTML=xmlhttp.responseText;
    }
  }
  var times = document.getElementById('timein').value;
  var timef = document.getElementById('timeout').value;
  var room = document.getElementById('room').value;
  var day1 = document.getElementById('days1').value;
  var teacher = document.getElementById('teacher').value;
  var all = times + "&timeout="+timef + "&room="+room + "&day1="+day1 + "&teacher="+teacher;
  xmlhttp.open("GET","day1.php?timein="+all,true);
  xmlhttp.send();
}
 function day2(days2) {
 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("day2label").innerHTML=xmlhttp.responseText;
	}
  }
  var times = document.getElementById('timein').value;
  var timef = document.getElementById('timeout').value;
  var room = document.getElementById('room').value;
  var day2 = document.getElementById('days2').value;
  var teacher = document.getElementById('teacher').value;
  var all = times + "&timeout="+timef + "&room="+room + "&day2="+day2 + "&teacher="+teacher;
  xmlhttp.open("GET","day2.php?timein="+all,true);
  xmlhttp.send();
}
 function day3(days3) {
 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("day3label").innerHTML=xmlhttp.responseText;
	}
  }
  var times = document.getElementById('timein').value;
  var timef = document.getElementById('timeout').value;
  var room = document.getElementById('room').value;
  var day3 = document.getElementById('days3').value;
  var teacher = document.getElementById('teacher').value;
  var all = times + "&timeout="+timef + "&room="+room + "&day3="+day3 + "&teacher="+teacher;
  xmlhttp.open("GET","day3.php?timein="+all,true);
  xmlhttp.send();
}
 function day4(days4) {
 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("day4label").innerHTML=xmlhttp.responseText;
	}
  }
  var times = document.getElementById('timein').value;
  var timef = document.getElementById('timeout').value;
  var room = document.getElementById('room').value;
  var day4 = document.getElementById('days4').value;
  var teacher = document.getElementById('teacher').value;
  var all = times + "&timeout="+timef + "&room="+room + "&day4="+day4 + "&teacher="+teacher;
  xmlhttp.open("GET","day4.php?timein="+all,true);
  xmlhttp.send();
}
 function day5(days5) {
 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("day5label").innerHTML=xmlhttp.responseText;
	}
  }
  var times = document.getElementById('timein').value;
  var timef = document.getElementById('timeout').value;
  var room = document.getElementById('room').value;
  var day5 = document.getElementById('days5').value;
  var teacher = document.getElementById('teacher').value;
  var all = times + "&timeout="+timef + "&room="+room + "&day5="+day5 + "&teacher="+teacher;
  xmlhttp.open("GET","day5.php?timein="+all,true);
  xmlhttp.send();
}
 function day6(days6) {
 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("day6label").innerHTML=xmlhttp.responseText;
	}
  }
  var times = document.getElementById('timein').value;
  var timef = document.getElementById('timeout').value;
  var room = document.getElementById('room').value;
  var day6 = document.getElementById('days6').value;
  var teacher = document.getElementById('teacher').value;
  var all = times + "&timeout="+timef + "&room="+room + "&day6="+day6 + "&teacher="+teacher;
  xmlhttp.open("GET","day6.php?timein="+all,true);
  xmlhttp.send();
}
 function subj(subject) {
 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("subjectlabel").innerHTML=xmlhttp.responseText;
	}
  }
  var subject = document.getElementById('subject').value;
  xmlhttp.open("GET","subjectexec.php?subject="+subject,true);
  xmlhttp.send();
}

</script>

  <!-- plugins:js -->
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../assets/vendors/chartjs/Chart.min.js"></script>
  <script src="../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../assets/js/material.js"></script>
  <script src="../assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>
</html> 