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
			<?php
			$username =$_GET['id'];
$result = mysql_query("SELECT * FROM seniorstudents WHERE idnumber='$username'");
$counta=mysql_num_rows($result);
if($counta>0) {
	$type1 = 'Senior High School';
		while($row = mysql_fetch_array($result))
			{
				$fname = $row['fname']; 
				$mname = $row['mname']; 
				$stat = $row['status']; 
				$lname = $row['lname'];
				$section = $row['strand'];
				$course = $row['grade'];
				$name = $fname.' '.$mname.' '.$lname;
				$department = 'Senior High School';
			}
}
			?>
            
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
	<div id="printme">
<h2>Grades - <?php echo $name ?></h2>
			
<div id="print_content"><center>
<?php
include('../connect.php');
$username = $_GET['id'];

$result = mysql_query("SELECT * FROM seniorstudents WHERE idnumber='$username'");
$counta=mysql_num_rows($result);
if($counta>0) {
		while($row = mysql_fetch_array($result))
			{
				$fname = $row['fname']; 
				$mname = $row['mname']; 
				$stat = $row['status']; 
				$lname = $row['lname'];
				$name = $fname.' '.$mname.' '.$lname;
				$department = 'Senior High School';
			}
}
			//echo "<b>Name: $fname $mname $lname</b>";
			
?>

<table cellpadding="5" cellspacing="0" id="customers" border="1">
  <tr>
    
    <th style="border-left: 1px solid #C1DAD7" width="86" >Subject</th>
    <th width="59" >Instructor</th>
    <th width="23" >Grade</th>
  </tr>
  <tr>
  </tr>
  <?php

		
		$username = $_GET['id'];
  $result4= mysql_query("SELECT * FROM quiz WHERE idnumber = '$username' ORDER BY ID DESC LIMIT 1");
  $count=mysql_num_rows($result4);
  if($count>0) {
while($row4 = mysql_fetch_array($result4))
	{
		$grade = number_format($row4['score'],2);
  $subject = $row4['subject'];
	}
  } else {
	  $grade = 'Grade is not submitted yet';
  }
  
		//check for instructor
  $result1 = mysql_query("SELECT * FROM teachersubject WHERE subject='$subject'  GROUP BY subject");
while($row1 = mysql_fetch_array($result1))
	{
		$teacher  = $row1['teacher'];
	//echo $teacher;	
  $result2 = mysql_query("SELECT * FROM teacher WHERE idnumber='$teacher'");
while($row2 = mysql_fetch_array($result2))
	{
		$teachername  = $row2['fname'].' '.$row2['mname'].' '.$row2['lname'];
	}
	}
	//check unit
		
	
  echo '<tr>';
		echo '<td>'.$subject.'</td>';
		echo '<td>'.$teachername.'</td>';
		//check for grades
		echo '<td>';
		echo $grade;
		echo '</td>';
		
		
		
		echo '</tr>';
	
  ?>

	
	
	
	
	
	
	
	
	
	
		
</table>
</div>
</div>

		
<script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printme");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}
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