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
<?php
$grade = $_GET['grade'];
$strand = $_GET['strand'];
?>	
<h2>Student List - Senior HighSchool
<br>
<?php echo $grade.' - '.$strand ?>
</h2>
<br>
				

	<div style="width:100%;overflow-x:scroll">
		<table id="customers" class="tftable order-table table bluetext">
			<thead>
				<tr>
					<th>Student Number</th>
					<th  style="border-left: 1px solid #C1DAD7"> Name </th>
					<th>Semester</th>
					<th>Guardian</th>
					<th>Guardian Contact Number</th>
					<th> Action </th>
				</tr>
			</thead>
			<tbody>
			<?php
				include('../connect.php');
				$result = mysql_query("SELECT * FROM seniorstudents WHERE grade = '$grade' AND strand = '$strand' AND status1 <> 'Drop' AND status <> 'Pending'");
				while($row = mysql_fetch_array($result))
					{
						echo '<tr class="record1">';
						echo '<td><div align="left">'.$row['idnumber'].'</div></td>';
						echo '<td  style="border-left: 1px solid #C1DAD7">'.$row['fname'].'</td>';
						echo '<td><div align="left">'.$row['semester'].'</div></td>';
						echo '<td><div align="left">'.$row['guardian'].'</div></td>';
						echo '<td><div align="left">'.$row['cguardian'].'</div></td>';
						//echo '<td><div align="left">'.$row['status'].'</div></td>';
						//echo '<td width="25%"><div align="center"><a  href="preview.php?id='.$row['id'].'">View Grade</a> | <a rel="facebox" href="viewsubject.php?id='.$row['idnumber'].'">View Load</a> | <a href="#" id="'.$row['idnumber'].'" class="delbutton" title="Click To Delete">Delete</a> | <a rel="facebox" href="changeyear.php?id='.$row['idnumber'].'" >Change Year</a> |  <a href="#" onClick="window.open(\'regsubject.php?id='.$row['idnumber'].'\',\'mywindow\',\'scrollbars=no,width=1050,height=500\')">Register Subject</a></div></td>';
						echo '<td width="25%"><div align="center"><a rel="facebox" href="viewsubject2.php?id='.$row['idnumber'].'">View Load</a> 
						| <a href="drop2a.php?id='.$row['id'].'" id="'.$row['idnumber'].'" class="delbutton" title="Click To Drop" onclick="return confirm(\'Are you sure you want to drop this student?\')">Drop</a> | 
						<a rel="facebox" href="changeyear2.php?id='.$row['idnumber'].'" >Change Year</a>   
						</div></td>';
						echo '</tr>';
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