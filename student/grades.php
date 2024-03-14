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
	<div id="printme">
<h2>Report on Learning Progress and Achivement</h2>
			
<div id="print_content"><center>
<?php
include('../connect.php');


$result = mysql_query("SELECT * FROM juniorstudents WHERE idnumber='$username'");
$counta=mysql_num_rows($result);
if($counta>0) {
		while($row = mysql_fetch_array($result))
			{
				$fname = $row['fname']; 
				$mname = $row['mname']; 
				$stat = $row['status']; 
				$lname = $row['lname'];
				$name = $fname.' '.$mname.' '.$lname;
				$department = 'Junior High School';
			}
}
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

<hr>
<table style="width:100%">
	<tr>
		<td width="45%" valign="top">
			<!-- start -- -->
	First Semester		
<table cellpadding="5" cellspacing="0" id="customers" border="1" style="font-size:15px">
  <tr>
    <th rowspan="2"><center>Subject</th>
    <th colspan="2"><center>Quarter</th>
    <th rowspan="2"><center>Semester Final Grade</th>
  </tr>
  <tr>
    <th><center>1</th>
    <th><center>2</th>
  </tr>
  <tr>
  </tr>
  <?php
	ini_set('display_errors', 0);
		$grade1 = 0;
	$result= mysql_query("SELECT * FROM quiz WHERE idnumber = '$username' GROUP BY subject");
	while($row = mysql_fetch_array($result))
			{
				$signature =$row['status'];
			$subject = $row['subject'];	
			echo '<tr>';
		echo '<td>'.$subject.'</td>';
		//check for grades
		echo '<td>';
		$result4= mysql_query("SELECT * FROM quiz WHERE idnumber = '$username' AND term ='First Semester' AND quarter = 'First Quarter'  ORDER BY ID DESC LIMIT 1");
		$count=mysql_num_rows($result4);
		if($count>0) {
		while($row4 = mysql_fetch_array($result4))
			{
				$grade1a = number_format($row4['score'],2);
				$subject = $row4['subject'];
			}
			} else {
				$grade1a = '';
		}
		echo $grade1a;
		echo '</td>';
		echo '<td>';
		$result4= mysql_query("SELECT * FROM quiz WHERE idnumber = '$username' AND term ='First Semester' AND quarter = 'Second Quarter'  ORDER BY ID DESC LIMIT 1");
		$count=mysql_num_rows($result4);
		if($count>0) {
		while($row4 = mysql_fetch_array($result4))
			{
				$grade1b = number_format($row4['score'],2);
				$subject = $row4['subject'];
			}
			} else {
				$grade1b = '';
		}
		echo $grade1b;
		echo '</td>';
		if($grade1a == '') {
			$grade1a = 0;
		}
		if($grade1b == '') {
			$grade1b = 0;
		}
		$grade1 = ($grade1a + $grade1b)  / 2;
		echo '<td><center>'.number_format($grade1,2).'</td>';
		echo '</tr>';
			}
	
  ?>

</table>
			
		<br><br>
		<center>
		<h5>LEARNING PROGRESS AND ACHIVEMENT</h3>
		<table style="width:100%">
			<tr>
				<td>Descriptors</td>
				<td>Grading Scale</td>
				<td>Remarks</td>
			</tr>
			<tr>
				<td>Outstanding</td>
				<td>90-100</td>
				<td>Passed</td>
			</tr>
			<tr>
				<td>Very Satisfactory</td>
				<td>85-89</td>
				<td>Passed</td>
			</tr>
			<tr>
				<td>Satisfactory</td>
				<td>80-84</td>
				<td>Passed</td>
			</tr>
			<tr>
				<td>Fairly Satisfactory</td>
				<td>75-79</td>
				<td>Passed</td>
			</tr>
			<tr>
				<td>Do Not Meet Expectations</td>
				<td>Below 75</td>
				<td>Failed</td>
			</tr>
			
		</table>
			<!-- end -->
		</td>
		
		<td width="45%" valign="top">
			<!-- start -- -->
	Second Semester		
<table cellpadding="5" cellspacing="0" id="customers" border="1" style="font-size:15px">
  <tr>
    <th rowspan="2"><center>Subject</th>
    <th colspan="2"><center>Quarter</th>
    <th rowspan="2"><center>Semester Final Grade</th>
  </tr>
  <tr>
    <th><center>1</th>
    <th><center>2</th>
  </tr>
  <tr>
  </tr>
  <?php
	
		$grade1 = 0;
	$result= mysql_query("SELECT * FROM quiz WHERE idnumber = '$username' GROUP BY subject");
	while($row = mysql_fetch_array($result))
			{
			$subject = $row['subject'];	
			echo '<tr>';
		echo '<td>'.$subject.'</td>';
		//check for grades
		echo '<td>';
		$result4= mysql_query("SELECT * FROM quiz WHERE idnumber = '$username' AND term ='Second Semester' AND quarter = 'First Quarter' ORDER BY ID DESC LIMIT 1");
		$count=mysql_num_rows($result4);
		if($count>0) {
		while($row4 = mysql_fetch_array($result4))
			{
				$grade1a = number_format($row4['score'],2);
				$subject = $row4['subject'];
			}
			} else {
				$grade1a = '';
		}
		echo $grade1a;
		echo '</td>';
		
		echo '<td>';
		$result4= mysql_query("SELECT * FROM quiz WHERE idnumber = '$username' AND term ='Second Semester'  AND quarter = 'Second Quarter'  ORDER BY ID DESC LIMIT 1");
		$count=mysql_num_rows($result4);
		if($count>0) {
		while($row4 = mysql_fetch_array($result4))
			{
				$grade1b = number_format($row4['score'],2);
				$subject = $row4['subject'];
			}
			} else {
				$grade1b = '';
		}
		echo $grade1b;
		echo '</td>';
		if($grade1a == '') {
			$grade1a = 0;
		}
		if($grade1b == '') {
			$grade1b = 0;
		}
		$grade1 = ($grade1a + $grade1b)  / 2;
		echo '<td><center>'.number_format($grade1,2).'</td>';
		echo '</tr>';
			}
	
  ?>

</table>
<br><br>
<table id="customers">
	<tr>
		<td></td>
		<td>Aug</td>
		<td>Sep</td>
		<td>Oct</td>
		<td>Nov</td>
		<td>Dec</td>
		<td>Jan</td>
		<td>Feb</td>
		<td>Mar</td>
		<td>Apr</td>
		<td>May</td>
		<td>Jun</td>
		<td>Jul</td>
		<td>Total</td>
	</td>
	<tr>
		<td>No. of School Days</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</td>
	<tr>
		<td>No. of Days Present</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</td>
	<tr>
		<td>No. of Days Absent</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</td>
</table>
		</td>
	</tr>
</table>
<br>
<br>
<br>
<h6 class="card-title card-padding pb-0">Report on Learner's Observed Values</h6>
 <table id="customers" width="100% !important;table-layout: fixed;
   overflow-wrap: break-word;">
                    <thead>
                        <tr>
                          <th class="text-left" rowspan="2" width="25%"><center>Core Values</th>
                          <th class="text-left" rowspan="2" width="55%"><center>Behavior Statement</th>
                          <th class="text-left" colspan="4"><center>Quarter</th>
                        </tr>
						<tr>
							<td width="5%"><center>1</td>
							<td width="5%"><center>2</td>
							<td width="5%"><center>3</td>
							<td width="5%"><center>4</td>
						</tr>
                      </thead>
                      <tbody>
						<tr>
							<td rowspan="2"  width="25%">1. Maka-Diyos</td>
							<td  width="55%">Expresses one's spiritual beliefs while respecting the spiritual beliefs of others</td>
							<td width="5%"><center><?php echo $a1 ?></td>
							<td width="5%"><center><?php echo $a2 ?></td>
							<td width="5%"><center><?php echo $a3 ?></td>
							<td width="5%"><center><?php echo $a4 ?></td>
						</tr>
						<tr>
							<td  width="55%">Show adherence to ethical principles by upholding truth</td>
							<td width="5%"><center><?php echo $a5 ?></td>
							<td width="5%"><center><?php echo $a6 ?></td>
							<td width="5%"><center><?php echo $a7 ?></td>
							<td width="5%"><center><?php echo $a8 ?></td>
						</tr>
						<tr>
							<td rowspan="2"  width="25%">2. Makatao</td>
							<td  width="55%">Is sensitive to individual social and cultural differences</td>
							<td width="5%"><center><?php echo $a9 ?></td>
							<td width="5%"><center><?php echo $a10 ?></td>
							<td width="5%"><center><?php echo $a11 ?></td>
							<td width="5%"><center><?php echo $a12 ?></td>
						</tr>
						<tr>
							<td  width="55%">Demonstrates contributions toward solidarity</td>
							<td width="5%"><center><?php echo $a13 ?></td>
							<td width="5%"><center><?php echo $a14 ?></td>
							<td width="5%"><center><?php echo $a15 ?></td>
							<td width="5%"><center><?php echo $a16 ?></td>
						</tr>
						<tr>
							<td rowspan="1"  width="25%">3. Makakalikasan</td>
							<td  width="55%">Cares for the environment and utilizes resources wisely, judicously and economically</td>
							<td width="5%"><center><?php echo $a17 ?></td>
							<td width="5%"><center><?php echo $a18 ?></td>
							<td width="5%"><center><?php echo $a18 ?></td>
							<td width="5%"><center><?php echo $a20 ?></td>
						</tr>
						
						<tr>
							<td rowspan="2"  width="25%">4. Makabansa</td>
							<td  width="55%">Demonstrates price in being a Filipino; execises the rights and responsibilities of a Filipino Citizen</td>
							<td width="5%"><center><?php echo $a21 ?></td>
							<td width="5%"><center><?php echo $a22 ?></td>
							<td width="5%"><center><?php echo $a23 ?></td>
							<td width="5%"><center><?php echo $a24 ?></td>
						</tr>
						<tr>
							<td  width="55%">Demonstrates appropriate behaviour in carrying out activities in the school, activities in the school, community and country</td>
							<td width="5%"><center><?php echo $a25 ?></td>
							<td width="5%"><center><?php echo $a26 ?></td>
							<td width="5%"><center><?php echo $a27 ?></td>
							<td width="5%"><center><?php echo $a28 ?></td>
						</tr>
					  </table> <br>
					  <h2>Observed Values</h2>
					  <table width="40%">
						<tr>
							<td>Marking</td>
							<td>Non-Numeric Rating</td>
						</tr>
						<tr>
							<td>AO</td>
							<td>Always Observed</td>
						</tr>
						<tr>
							<td>SO</td>
							<td>Sometimes Observed</td>
						</tr>
						<tr>
							<td>RO</td>
							<td>Rarely Observed</td>
						</tr>
						<tr>
							<td>NO</td>
							<td>Never Observed</td>
						</tr>
					  </table>
	<img src="<?php echo $signature ?>" style="width:200px;float:right">

</div>
</div>

<input type="button" value="Print" onclick="printData()" class="btn" style="width:200px">
		
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