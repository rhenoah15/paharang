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

	<center><h2 >Faculty Evaluation </h2></center>
	<!-- start -->
	
	
<div style="width:100%;overflow-x:scroll">
								<table class="align-middle mb-0 table table-borderless table-striped table-hover tftable order-table table bluetext" id="customers">
      <thead>
				<tr>
					<!-- <th  style="border-left: 1px solid #C1DAD7">Student Number</th> -->
					<th>Department</th>
					<th>Total Average</th>
					<th> Action </th>
				</tr>
			</thead>
			<tbody>
			<?php
			$tot =0;
			$q = 0;
				$resulta = mysql_query("SELECT * FROM evaluation WHERE faculty = '$idnumber' GROUP BY student");
				while($rowa = mysql_fetch_array($resulta))
					{
						$student = $rowa['student'];
						$type = $rowa['type'];
						//echo $student;
						if($type == 'Faculty') {
	$result1 = mysql_query("SELECT * FROM teacher WHERE idnumber='$student'");
				while($row1 = mysql_fetch_array($result1))
					{
						$name =$row1['fname'].' '.$row1['mname'].' '.$row1['lname'];
						$department =$row1['type'];
						//$course =$row1['course'];
						$id =$rowa['student'];
					}					
						} else {
	$result1 = mysql_query("SELECT * FROM preelem WHERE idnumber='$student'");
				while($row1 = mysql_fetch_array($result1))
					{
						$name =$row1['fname'].' '.$row1['mname'].' '.$row1['lname'];
						$department ='Pre Elementary';
						$eval =$row1['idnumber'];
						//$course =$row1['course'];
					}	
	$result1 = mysql_query("SELECT * FROM juniorstudents WHERE idnumber='$student'");
				while($row1 = mysql_fetch_array($result1))
					{
						$name =$row1['fname'].' '.$row1['mname'].' '.$row1['lname'];
						$department ='Junior High School';
						$eval =$row1['idnumber'];
						//$course =$row1['course'];
					}	
	$result1 = mysql_query("SELECT * FROM seniorstudents WHERE idnumber='$student'");
				while($row1 = mysql_fetch_array($result1))
					{
						$name =$row1['fname'].' '.$row1['mname'].' '.$row1['lname'];
						$department ='Senior High School';
						$eval =$row1['idnumber'];
						//$course =$row1['course'];
					}	
	$result1 = mysql_query("SELECT * FROM student WHERE idnumber='$student'");
				while($row1 = mysql_fetch_array($result1))
					{
						$name =$row1['fname'].' '.$row1['mname'].' '.$row1['lname'];
						$department ='College';
						$eval =$row1['idnumber'];
						//$course =$row1['course'];
					}		
							
						}
						$total = 0;
						$qu = 0;
						$result1b = mysql_query("SELECT qid,faculty, SUM(answer) AS ans1, COUNT(*) as count1 FROM evaluation WHERE faculty = '$id'  AND student = '$student'");
				while($row1b = mysql_fetch_array($result1b))
					{
		$t = $row1b['ans1'];
		$qu = $row1b['count1'];
		if($t == '') {
			$t = 0;
		}
		
					}
					
					$tot =0;
			$q = 0;
				$resulta = mysql_query("SELECT * FROM question WHERE type = 'Student' GROUP BY category");
				while($rowa = mysql_fetch_array($resulta))
					{
						$category = $rowa['category'];
						
				$resulta1 = mysql_query("SELECT * FROM question WHERE category = '$category' AND  type = 'Student'");
				while($rowa1 = mysql_fetch_array($resulta1))
					{
		$id1 =$rowa1['id'];
		$q +=1;
		//check for answer
		
		$faculty  =$idnumber;
		$result1 = mysql_query("SELECT comment,qid,faculty, SUM(answer) AS ans1, COUNT(*) as count1 FROM evaluation WHERE faculty = '$idnumber'  AND qid = '$id1'");
				while($row1 = mysql_fetch_array($result1))
					{
						$tot +=  $row1['ans1'];
		
		//$count1 = $row1['count1'];
		//end check
					}
					}
					}
					//echo $q;
					$final = $tot / $q;
					//$id = $i;
					$pre = sprintf("%06d", $id);
					//$total = $t / $qu;
					echo '<tr class="record">';
						//echo '<td  valign="top"><div align="left">'.$eval.'</td>';
						echo '<td  valign="top"><div align="left">'.$department.'</div></td>';
						echo '<td  valign="top"><div align="left">'.number_format($final,2).'</div></td>';
						echo '<td  valign="top"><div align="center"> <a href="eval4.php?student='.$student.'&faculty='.$idnumber.'&type='.$type.'" >View Evaluation</a> </div></td>';
						echo '</tr>';
					}
	
		?>
		<!--
			<?php
				include('../connect.php');
				$id =$_GET['idnumber'];
				$result = mysql_query("SELECT * FROM evaluation WHERE faculty='$id'");
				while($row = mysql_fetch_array($result))
					{
						$student =$row['student'];
						
				
					$a =$row['a'];
					$b =$row['b'];
					$c =$row['c'];
					$d =$row['d'];
					$e =$row['e'];
					$f =$row['f'];
					$total =($a+$b+$c+$d+$e+$f)/6;
						echo '<tr class="record">';
						echo '<td  valign="top"><div align="left">'.$name.'</td>';
						echo '<td  valign="top"><div align="left">'.$student.'</div></td>';
						echo '<td  valign="top"><div align="left">'.$department.'</div></td>';
						echo '<td  valign="top"><div align="left">'.$course.'</div></td>';
						echo '<td  valign="top"><div align="left">'.number_format($total,2).'</div></td>';
						echo '<td  valign="top"><div align="center"> <a href="eval4.php?student='.$student.'&faculty='.$idnumber.'" >View Evaluation</a> </div></td>';
						echo '</tr>';
					}
				?> 
				-->
			</tbody>
		</table>
									

  
					
<script>
$(document).ready(function() {
    $('#customers').DataTable( {
        responsive: true
    } );
} );
</script>
			
			
			
			
			
			
					
			

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
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