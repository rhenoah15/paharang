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

.form {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.form :active{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  background-color: #800000;
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
<h2>Department - <?php echo $_GET['id'] ?></h2>
<br>
			
<?php
$message = "";
if(isset($_POST['submit'])){ 
include('../connect.php');
  $course = $_POST['course']; 
  $type = $_POST['type']; 
  $description = $_POST['description']; 
  $save1=mysql_query("INSERT INTO course (course, description,type) VALUES ('$course','$description','$type')");

  $message = "<span style='color:red'>You have been successfully added a curriculum</span><br>";
}    
?>
<?php
if($_GET['id'] == 'Pre Elementary') {
	//start pre elem
	?>
	
			<table class="align-middle mb-0 table table-borderless table-striped table-hover tftable order-table table bluetext" id="customers">
                                <thead>
		<tr>
			<th><center>Type</th>
			<th width="20%"><center>Action</th>
			
		</tr>
	</thead>
	<tbody>
	<?php
	include('../connect.php');

		$result1 = mysql_query("SELECT * FROM course WHERE type <> 'College' AND type <> 'Junior High School' AND type <> 'Senior High School'");
		while($row1 = mysql_fetch_array($result1))
			{
		
			echo'<tr>';
			echo'	<td><span style="float:left">'.$row1['course'].'</td>';
			echo'	<td><center><a href="studentlist3.php?id='.$row1['id'].'&course='.$row1['course'].'&type='.$row1['type'].'" >Student List</a> <hr style="margin:0px">  <a href="subject3a.php?course='.$row1['course'].'" >Subject List</a> <hr style="margin:0px"> <a href="delete.php?id='.$row1['id'].'&dept='.$id.'" onclick="return confirm(\'Are you sure you want to delete this record?\')">Delete Course</a></td>';
			echo'</tr>';
			}
	
	?>
	</tbody>
</table>
					
	<?php
	
	//end
} else {
	if($_GET['id'] == 'Senior High School') {
		$p = 'Strand';
	} else {
		$p = 'Program';
	}
	
?>
<form action="#" method="POST">
<fieldset>
  <legend>Fill up all fields to add a course:</legend>
  <?php echo $message ?>
<select name="type" required  style="width:100%;display:none" class="form" style="display:none">
	<option selected ><?php echo $_GET['id'] ?></option>
</select>
<input type="text" name="course" placeholder="<?php echo $p ?>" required style="width:100%" class="form">
<input type="text" name="description" placeholder="<?php echo $p ?> Description" required style="width:100%" class="form">
</fieldset>
							<input type="submit" value="Add <?php echo $p ?>" name="submit"  style="width:100%">
							
							</form>
									<table class="align-middle mb-0 table table-borderless table-striped table-hover tftable order-table table bluetext" id="customers">
                                <thead>
		<tr>
			<th><center>Type</th>
			<th><center><?php echo $p ?></th>
			<th><center><?php echo $p ?> Description</th>
			<th width="20%"><center>Action</th>
			
		</tr>
	</thead>
	<tbody>
	<?php
	include('../connect.php');
	$id = $_GET['id'];
		$result1 = mysql_query("SELECT * FROM course WHERE type = '$id' ORDER BY course ASC ");
		while($row1 = mysql_fetch_array($result1))
			{
		
			echo'<tr>';
			echo'	<td><span style="float:left">'.$row1['type'].'</td>';
			echo'	<td><span style="float:left">'.$row1['course'].'</td>';
			echo'	<td><span style="float:left">'.$row1['description'].'</td>';
			echo'	<td><center><a href="studentlist.php?id='.$row1['id'].'&course='.$row1['course'].'&type='.$row1['type'].'" >Student List</a> <hr style="margin:0px"> <a href="subject1.php?id='.$row1['type'].'" >Subject List</a> <hr style="margin:0px"> <a href="delete.php?id='.$row1['id'].'&dept='.$id.'" onclick="return confirm(\'Are you sure you want to delete this record?\')">Delete Course</a></td>';
			echo'</tr>';
			}
	
	?>
	</tbody>
</table>
					
							<?php
}
?>
						
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