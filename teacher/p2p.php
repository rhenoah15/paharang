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

	<h2 >Peer to Peer Evaluation </h2>
	<!-- start -->
	
	
<div style="width:100%;overflow-x:scroll">
								<table class="align-middle mb-0 table table-borderless table-striped table-hover tftable order-table table bluetext" id="customers">
      <thead>
				<tr>
					<th align="center">Faculty ID</th>
					<th  style="border-left: 1px solid #C1DAD7" align="center"> Last Name</th>
					<th  style="border-left: 1px solid #C1DAD7" align="center"> First Name</th>
					<th  style="border-left: 1px solid #C1DAD7" align="center"> Middle Name</th>
					<th>Work</th>
					<th>Gender</th>
					<th>Status</th>
					<th>Birthday</th>
					<th> Action </th>
				</tr>
			</thead>
			<tbody>
			<?php
				include('../connect.php');
				//$id =$_GET['id'];
				
				$result1 = mysql_query("SELECT * FROM evaluator WHERE eval = '$idnumber'");
				while($row1 = mysql_fetch_array($result1))
					{
						$idnum = $row1['idnumber'];
				$result = mysql_query("SELECT * FROM teacher WHERE idnumber = '$idnum'");
				while($row = mysql_fetch_array($result))
					{
						$faculty =$row['idnumber'];
						echo '<tr class="record">';
												echo '<td><span style="float:left">'.$row['idnumber'].'</div></td>';
						echo '<td  style="border-left: 1px solid #C1DAD7"><span style="float:left">'.$row['lname'].'</td>';
						echo '<td  style="border-left: 1px solid #C1DAD7"><span style="float:left">'.$row['fname'].'</td>';
						echo '<td  style="border-left: 1px solid #C1DAD7"><span style="float:left">'.$row['mname'].'</td>';
						echo '<td  valign="top"><div align="left">'.$row['work'].'</div></td>';
						echo '<td  valign="top"><div align="left">'.$row['gender'].'</div></td>';
						echo '<td  valign="top"><div align="left">'.$row['status'].'</div></td>';
						echo '<td  valign="top"><div align="left">'.$row['bday'].'</div></td>';
						//check if recorded
						//echo $idnumber;
						//echo $faculty;
						$result1a = mysql_query("SELECT * FROM evaluation WHERE faculty = '$faculty' AND student = '$idnumber'");
						$count1a=mysql_num_rows($result1a);
						//echo $count1a;
						if($count1a>0) {
						echo '<td  valign="top"><div align="center"> <a href="eval2.php?id='.$row['idnumber'].'" >View Evaluation</a> </div></td>';	
						} else {
						echo '<td  valign="top"><div align="center"> <a href="eval1.php?id='.$row['idnumber'].'" >Evaluate Faculty</a> </div></td>';
						}
						//end check
						echo '</tr>';
					}
					}
				?> 
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