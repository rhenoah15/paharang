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
<h2>Library Management</h2>
<br>
			
		<table class="tftable  order-table table" id="customers">
				<thead>
                                <tr>
                                    <th style="color:#FFF"><center>Title</th>
                                    <th style="color:#FFF"><center>Number of Pages</th>
                                    <th style="color:#FFF"><center>Author</th>
                                    <th style="color:#FFF"><center>Publisher</th>
                                    <th style="color:#FFF"><center>Number of Copies</th>
                                    <th style="color:#FFF"><center>Category</th>
                                    <th style="color:#FFF"><center>Status</th>
                                    <th style="color:#FFF"><center>Action</th>
                                </tr>
								</thead>
								<tbody>
								  				<?php
				include('../connect.php');
		$result = mysql_query("SELECT * FROM book ORDER BY name ASC");
		while($row = mysql_fetch_array($result))
		{
				$id = $row['id'];
			$number =$row['number'];
	$resulta=mysql_query("SELECT * FROM borrow WHERE book='$id' AND status <> 'Done'");
$counta=mysql_num_rows($resulta);
			$status = $row['status'];
			$n = $number - $counta;
								echo '<tr>';
                                  //  echo '<td valign="top">'.$row['access'].'</td>';
                                    //echo '<td valign="top">'.$row['call1'].'</td>';
                                    echo '<td valign="top" style="text-align:left">'.$row['name'].'</td>';
                                    echo '<td valign="top">'.$row['pages'].'</td>';
                                    echo '<td valign="top">'.$row['author'].'</td>';
                                    echo '<td valign="top"><center>'.$row['publisher'].'</td>';
                                    //echo '<td valign="top"><center>'.$row['datepur'].'</td>';
                                    echo '<td valign="top"><center>'.$n.'</td>';
                                    echo '<td valign="top"><center>'.$row['category'].'</td>';
									if($n > 0) {
                                    echo '<td style="color:green" valign="top" style="text-align:left"><center>'.$row['status'].'</td>';
										
									
									echo '<td valign="top" width="20%"><center><a href="viewbook.php?id='.$row['id'].'" rel="facebox" class="btn-secondary" style="color:#FFF;padding:10px;margin:5px">View Book Information</a> <a href="borrow1.php?id='.$row['id'].'" class="btn-primary" style="color:#FFF;padding:10px;margin:5px" >Reserve Book</a> <br>	</td>';
									
									} else {
									echo '<td style="color:red" valign="top" style="text-align:left"><center>Not Available</td>';	
									echo '<td></td>';
									}
									
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