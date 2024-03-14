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

input[type=text], input[type=file], input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
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
	include('../connect.php');
	if(isset($_POST['submit'])) {
		$name =$_POST['name'];
		$section =$_POST['section'];
		$file =$_POST['file'];
		$number =$_POST['number'];
		$date =$_POST['date'];
		$reason =$_POST['reason'];
		$grade =$_POST['grade'];
		$username =$username;
		
mysql_query("INSERT INTO transaction (username, name, section,file,number,date,year,reason,grade)
VALUES ('$username','$name','$section','$file','$number','$date','$department','$reason','$grade')");
echo '<script>alert("Transaction has been sent.");window.location="payment.php"</script>';
	}
	?>
<h2>Transaction</h2>
			<form action="#" method="POST">
				Full Name:<br>
				<input type="text" name="name" required ech>
				<?php
				if($type1 == 'Junior High School') {
				echo 'Section :<br>';	
				} else {
				echo 'Strand :<br>';	
				}
				?>
				
				<input type="text" name="section" required value="<?php echo $section ?>">
				Grade :<br>
				<input type="text" name="grade" required value="<?php echo $course ?>">
				Attached Receipt:<br>
				<input type="file" name="receipt" required id="upload">
				<textarea id="file" name="file" style="display:none"></textarea>
				Reference Number:<br>
				<input type="text" name="number" required>
				Reason for Payment:<br>
				<input type="text" name="reason" required>
				Date of Payment:<br>
				<input type="date" name="date" required>
				<input type="submit" name="submit" value="Submit">
			</form>
						<script>
const fileInput = document.getElementById('upload');
fileInput.addEventListener('change', (e) => {
// get a reference to the file
const file = e.target.files[0];

// encode the file using the FileReader API
const reader = new FileReader();
reader.onloadend = () => {

    // use a regex to remove data url part
    const base64String = reader.result;
        document.getElementById('file').value =reader.result; 
    console.log(base64String);
};
reader.readAsDataURL(file);});
				</script>
			
<div id="print_content"><center>

	<div style="overflow-x:scroll">
	<table class="align-middle mb-0 table table-borderless table-striped table-hover tftable order-table table bluetext" id="customers">
                                <thead>
		<tr>
			<th><center>Student</th>
			<th><center>Date of Payment</th>
			<th><center>Reason of Payment</th>
			<th width="20%"><center>Reference Number</th>
			<th width="20%"><center>Receipt</th>
			
		</tr>
	</thead>
	<tbody>
	<?php
	include('../connect.php');
		$result1 = mysql_query("SELECT * FROM transaction WHERE username = '$username' ORDER BY ID DESC");
		while($row1 = mysql_fetch_array($result1))
			{
		
			$date = $row1['date'];
			$date = date('F d, Y',strtotime($date));
			echo'<tr>';
			echo'	<td><span style="float:left">'.$row1['name'].'</td>';
			echo'	<td><span style="float:left">'.$date.'</td>';
			echo'	<td><span style="float:left">'.$row1['reason'].'</td>';
			echo'	<td><span style="float:left">'.$row1['number'].'</td>';
			echo'	<td><center><a href="'.$row1['file'].'" download>View Receipt</a></td>';
			echo'</tr>';
			}
	
	?>
	</tbody>
</table>
	
</div>
		
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