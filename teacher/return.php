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
<h2>For Return</h2>
<br>
 <?php
				  $result2a = mysql_query("SELECT * FROM penalty");
				while($row2a = mysql_fetch_array($result2a))
					{
						$penal = $row2a['penalty'];
					}
				  ?>
						<table class="tftable  order-table table" id="customers">
				<thead>
                                <tr>
                                    <th style="color:#FFF"><center>Transaction Number</th>
                                    <th style="color:#FFF"><center>Borrower</th>
                                    <th style="color:#FFF"><center>Title</th>
                                    <th style="color:#FFF"><center>Author</th>
                                    <th style="color:#FFF"><center>Date Borrowed</th>
                                    <th style="color:#FFF"><center>Return Date</th>
                                    <th style="color:#FFF"><center>Penalty</th>
                                    <th style="color:#FFF"><center>Action</th>
                                </tr>
								</thead>
								<tbody>
								  				<?php
										//	error_reporting(0);
//ini_set('display_errors', 0);	
$date =date('Y-m-d');
date_default_timezone_set('Asia/Taipei');
				include('../connect.php');
				
		$result = mysql_query("SELECT * FROM borrow WHERE borrower = '$idnumber'  AND status = 'Borrowed' OR stat = 'Renew' AND status <> 'Done'");
		$coun=mysql_num_rows($result);
		if($coun > 0) {
		while($row = mysql_fetch_array($result))
		{
			$status = $row['status'];
			$id = $row['id'];
			$i = sprintf("%06d", $id);
			$book = $row['book'];
			$stat = $row['stat'];
			$idborrow = $row['id'];
			$dreturn= $row['datereturn'];
			
				$result1a = mysql_query("SELECT * FROM book WHERE id = '$book'");
				while($row1a = mysql_fetch_array($result1a))
					{
						$name1 = $row1a['name'];
						$author = $row1a['author'];
						$dewey = $row1a['datepur'];
					}
				$result1 = mysql_query("SELECT * FROM borrow WHERE id = '$id' ");
				while($row1 = mysql_fetch_array($result1))
					{
						$trans = $row1['trans'];
						$dateborrow = date("F j, Y", strtotime($row1['dateborrow']));
						$datereturn = date("F j, Y", strtotime($row1['datereturn']));
						$transid = $row1['id'];
						$borrower = $row1['borrower'];
							$result2 = mysql_query("SELECT * FROM student WHERE idnumber = '$borrower' ");
							$count2=mysql_num_rows($result2);
							if($count2  > 0) {
							while($row2 = mysql_fetch_array($result2))
								{
									$name = $row2['fname'].' '.$row2['lname'];
									
								}
							} 
							$result4 = mysql_query("SELECT * FROM teacher WHERE idnumber = '$borrower' ");
							$count4=mysql_num_rows($result4);
							if($count4  > 0) {
							while($row4 = mysql_fetch_array($result4))
								{
									$name = $row4['fname'].' '.$row4['lname'];
								}
							} 
								
					}
					$datenow  = strtotime(date('Y-m-d'));
					$returnd = strtotime($datereturn);
					$datediff = $datenow - $returnd;
					//check penalty 
					$now = time(); // or your date as well
$your_date = strtotime($dreturn);
$datediff = $now - $your_date;

$days =  round($datediff / (60 * 60 * 24));
					//end check
					
					$all =  floor($datediff/3600/24);
									echo '<tr>';
                                    echo '<td valign="top">'.$i.'</td>';
                                    echo '<td valign="top">'.$name.'</td>';
                                    echo '<td valign="top">'.$name1.'</td>';
                                    echo '<td valign="top">'.$author.'</td>';
                                    echo '<td valign="top"><center>'.$dateborrow.'</td>';
                                    echo '<td valign="top"><center>'.$datereturn.'</td>';
									$penalty =$penal * $days;
									if($days >0) {
										echo '<td>'.number_format($penalty,2).' Pesos</td>';
									} else {
										echo '<td></td>';
									}
									
									if($stat == 'Renew') {
									echo '<td></td>';	
									} else {
                                    echo '<td valign="top"><center><a href="extend.php?id='.$idborrow.'">Extend Borrowing Time</a></td>';
									}
									if($all  > 0 ) {
										// new
										
	
										
										// end new
										
									
									} else {
									
									}
                                    
									//echo '<td valign="top" width="20%"><center><a href="returnbook.php?id='.$row['id'].'&transid='.$transid.'" class="myButton" style="color:#000" onclick="return confirm(\'Are you sure you want to return this book?Press OK to continue.\')">Return Book</a>	</td>';
									
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