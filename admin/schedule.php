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
  width: 45%;
  padding: 0 10px;
}
.column1a {
  float: left;
  width: 70%;
  padding: 0 10px;
}

.column1b {
  float: left;
  width: 50%;
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
<h2>Schedule Summary
<br>	
</h2>

<br>
				

	<div style="width:100%;overflow-x:scroll">
		
<?php
include('../connect.php');
?>

<table align="center" width="100%" id="customers"> 
<tbody align="center" style="font-family:Arial;font-size:12px">
<tr>
	<th>Time</th>
	<th>Monday</th>
	<th>Tuesday</th>
	<th>Wednesday</th>
	<th>Thursday</th>
	<th>Friday</th>
	<th>Saturday</th>
	<th>Instructor</th>
	<th>Room</th>
<tr>

	<?php
	include('../connect.php');	
			
				
	$results = mysql_query("SELECT * FROM sched  ORDER BY times ASC");
	while($rows = mysql_fetch_array($results))
		{
		$timein = $rows['times'];
		$timeout = $rows['timed'];
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
			echo '<tr>';
			echo '<td>'.$timeinin.' - '.$timeoutin.'</td>';
			// day1 Monday
			if ($day1 == 'Monday') {
			echo '<td height="50" bgcolor="yellow">'.$subject1.'</td>'; 
			} else {
			echo '<td style="border:none"></td>';
			}
			
			// day2
			if ($day1 == 'Tuesday') {
			echo '<td height="50" bgcolor="green">'.$subject1.'</td>'; 
			} 
			else if ($day2 == 'Tuesday'){
			echo '<td height="50" bgcolor="green">'.$subject1.'</td>'; 
			}
			else {
			echo '<td style="border:none"></td>';
			}
			// day 3
			if ($day1 == 'Wednesday') {
			echo '<td height="50" bgcolor="orange">'.$subject1.'</td>'; 
			} 
			else if ($day2 == 'Wednesday'){
			echo '<td height="50" bgcolor="orange">'.$subject1.'</td>'; 
			}
			else if ($day3 == 'Wednesday'){
			echo '<td height="50" bgcolor="orange">'.$subject1.'</td>'; 
			}
			else {
			echo '<td style="border:none"></td>';
			}
			// day 4
			if ($day1 == 'Thursday') {
			echo '<td height="50" bgcolor="violet">'.$subject1.'</td>'; 
			} 
			else if ($day2 == 'Thursday'){
			echo '<td height="50" bgcolor="violet">'.$subject1.'</td>'; 
			}
			else if ($day3 == 'Thursday'){
			echo '<td height="50" bgcolor="violet">'.$subject1.'</td>'; 
			}
			else if ($day4 == 'Thursday'){
			echo '<td height="50" bgcolor="violet">'.$subject1.'</td>'; 
			}
			else {
			echo '<td style="border:none"></td>';
			}
			// day 5
			if ($day1 == 'Friday') {
			echo '<td height="50" bgcolor="white"><font color="black">'.$subject1.'</td>'; 
			} 
			else if ($day2 == 'Friday'){
			echo '<td height="50" bgcolor="white"><font color="black">'.$subject1.'</td>'; 
			}
			else if ($day3 == 'Friday'){
			echo '<td height="50" bgcolor="white"><font color="black">'.$subject1.'</td>'; 
			}
			else if ($day4 == 'Friday'){
			echo '<td height="50" bgcolor="white"><font color="black">'.$subject1.'</td>'; 
			}
			else if ($day5 == 'Friday'){
			echo '<td height="50" bgcolor="white"><font color="black">'.$subject1.'</td>'; 
			}
			else {
			echo '<td style="border:none"></td>';
			}
			// day 6
			if ($day1 == 'Saturday') {
			echo '<td height="50" bgcolor="#39B7CD"><font color="black">'.$subject1.'</td>'; 
			} 
			else if ($day2 == 'Saturday'){
			echo '<td height="50" bgcolor="#39B7CD"><font color="black">'.$subject1.'</td>'; 
			}
			else if ($day3 == 'Saturday'){
			echo '<td height="50" bgcolor="#39B7CD"><font color="black">'.$subject1.'</td>'; 
			}
			else if ($day4 == 'Saturday'){
			echo '<td height="50" bgcolor="#39B7CD"><font color="black">'.$subject1.'</td>'; 
			}
			else if ($day5 == 'Saturday'){
			echo '<td height="50" bgcolor="#39B7CD"><font color="black">'.$subject1.'</td>'; 
			}
			else if ($day6 == 'Saturday'){
			echo '<td height="50" bgcolor="#39B7CD"><font color="white">'.$subject1.'</td>'; 
			}
			else {
			echo '<td style="border:none"></td>';
			}
				$resultt = mysql_query("SELECT * FROM teacher WHERE idnumber='$teacher'");
				while($rowt = mysql_fetch_array($resultt))
					{
					$fname = $rowt['fname'];
					$mname = $rowt['mname'];
					$lname = $rowt['lname'];
			echo '<td align="left">'.$fname.' '.$mname.' '.$lname.'</td>';
					}
					echo '<td>'.$rows['room'].'</td>';
			echo '</tr>';
			
				

				}
	?>
	




</table>

<script>
$(document).ready(function() {
    $('#customers').DataTable( {
        responsive: true
    } );
} );
</script>
				  <!-- end -->
				  
				  <br>
                     
					  
                     
  <script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>  
                  
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