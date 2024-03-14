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
<h2>Submit Grade</h2>
   <!--start-->

   <!--start-->
	<input type="hidden" name="subject" value="<?php echo $_POST['subject']?>">
			
			
			  <?php 
				include('../connect.php');
				//start
				if($type1 == 'Pre Elementary') {
					
				$subject=$_POST['subject'];
				$results = mysql_query("SELECT * FROM preelem ");
						while($rows = mysql_fetch_array($results))
							{	
						$student = $rows['idnumber'];
						$results1 = mysql_query("SELECT * FROM quiz WHERE subject='$subject' AND idnumber='$student' ORDER BY ID DESC LIMIT 1");
				$count=mysql_num_rows($results1);
				if($count>0) {
						while($rows1 = mysql_fetch_array($results1))
							{	
						$grade = $rows1['score'];
							}
				} else {
					$grade = 0;
				}
							?>
							<table cellpadding="1" cellspacing="1" id="customers" class="tftable order-table table bluetext">
			<thead>
			  <tr>
					<th align="center">Student Number</th>
					<th  style="border-left: 1px solid #C1DAD7" align="center"> Last Name</th>
					<th  style="border-left: 1px solid #C1DAD7" align="center"> First Name</th>
					<th  style="border-left: 1px solid #C1DAD7" align="center"> Middle Name</th>
				<th>Grade</th>
				<th>Action</th>
			  </tr>
			  </thead>
					<form id="form1" method="post" action="savegrade.php" name="form1" onsubmit="return validateForm()">
			  <tr>
				<td style="border-left: 1px solid #C1DAD7" width="20%"><span style="float:left"><?php echo $rows['idnumber']?>
				<input type="hidden" name="studidnum" value="<?php echo $rows['idnumber']?>"></td>
				<input type="hidden" name="subject" value="<?php echo $subject?>"></td>
				
				
				<td width=""><span style="float:left"><?php echo $rows['lname']?></td>
				<td width=""><span style="float:left"><?php echo $rows['fname']?></td>
				<td width=""><span style="float:left"><?php echo $rows['mname']?></td>
				
					<select name="term" style="display:none">
			<option></option>
			<option>Prelim</option>
			<option>Midterm</option>
			<option>Semi-Final</option>
			<option>Finals</option>
			</select>
				<td width="8%" align="center" >
				<input list="grades" name="grade" required  class="form" style="width:200px" value="<?php echo $grade ?>">
				<datalist id="grades">
				<option value="1.00">
				<option value="1.25">
				<option value="1.50">
				<option value="1.75">
				<option value="2.00">
				<option value="2.25">
				<option value="2.50">
				<option value="2.75">
				<option value="3.00">
				<option value="4.00">
				<option value="5.00">
				<option value="Drop">
				</datalist>
				</td>
				<td width="10%" align="center">
					<span style="float:left">
			<input type="submit" value="Record">
		</form>
				</td>
			  </tr>
					<?php
					
							}
				}
				//end
				//start
				if($type1 == 'Junior High School') {
					
				$subject=$_POST['subject'];
				$results = mysql_query("SELECT * FROM juniorstudents ");
						while($rows = mysql_fetch_array($results))
							{	
						$student = $rows['idnumber'];
						$results1 = mysql_query("SELECT * FROM quiz WHERE subject='$subject' AND idnumber='$student' ORDER BY ID DESC LIMIT 1");
				$count=mysql_num_rows($results1);
				if($count>0) {
						while($rows1 = mysql_fetch_array($results1))
							{	
						$grade = $rows1['score'];
							}
				} else {
					$grade = 0;
				}
							?>
							<table cellpadding="1" cellspacing="1" id="customers" class="tftable order-table table bluetext">
			<thead>
			  <tr>
					<th align="center">Student Number</th>
					<th  style="border-left: 1px solid #C1DAD7" align="center"> Last Name</th>
					<th  style="border-left: 1px solid #C1DAD7" align="center"> First Name</th>
					<th  style="border-left: 1px solid #C1DAD7" align="center"> Middle Name</th>
					<th  style="border-left: 1px solid #C1DAD7" align="center"> Grading</th>
				<th>Grade</th>
				<th>Action</th>
			  </tr>
			  </thead>
					<form id="form1" method="post" action="savegrade.php" name="form1" onsubmit="return validateForm()">
			  <tr>
				<td style="border-left: 1px solid #C1DAD7" width="20%"><span style="float:left"><?php echo $rows['idnumber']?>
				<input type="hidden" name="studidnum" value="<?php echo $rows['idnumber']?>"></td>
				<input type="hidden" name="subject" value="<?php echo $subject?>"></td>
				
				
				<td width=""><span style="float:left"><?php echo $rows['lname']?></td>
				<td width=""><span style="float:left"><?php echo $rows['fname']?></td>
				<td width=""><span style="float:left"><?php echo $rows['mname']?></td>
				<td>
					<select name="term" style="display:none">
			<option></option>
			<option>First Grading</option>
			<option>Second Grading</option>
			<option>Third Grading</option>
			<option>Fourth Grading</option>
			</select>
			</td>
				<td width="8%" align="center" >
				
				<input list="grades" name="grade" required  class="form" style="width:200px" value="<?php echo $grade ?>">
				<datalist id="grades">
				<option value="1.00">
				<option value="1.25">
				<option value="1.50">
				<option value="1.75">
				<option value="2.00">
				<option value="2.25">
				<option value="2.50">
				<option value="2.75">
				<option value="3.00">
				<option value="4.00">
				<option value="5.00">
				<option value="Drop">
				</datalist>
				</td>
				<td width="10%" align="center">
					<span style="float:left">
			<input type="submit" value="Record">
		</form>
				</td>
			  </tr>
					<?php
					
							}
				}
				//end//start
				if($type1 == 'Senior High School') {
					
				$subject=$_POST['subject'];
				$results = mysql_query("SELECT * FROM seniorstudents ");
						while($rows = mysql_fetch_array($results))
							{	
						$student = $rows['idnumber'];
						$results1 = mysql_query("SELECT * FROM quiz WHERE subject='$subject' AND idnumber='$student' ORDER BY ID DESC LIMIT 1");
				$count=mysql_num_rows($results1);
				if($count>0) {
						while($rows1 = mysql_fetch_array($results1))
							{	
						$grade = $rows1['score'];
							}
				} else {
					$grade = 0;
				}
							?>
							<table cellpadding="1" cellspacing="1" id="customers" class="tftable order-table table bluetext">
			<thead>
			  <tr>
					<th align="center">Student Number</th>
					<th  style="border-left: 1px solid #C1DAD7" align="center"> Last Name</th>
					<th  style="border-left: 1px solid #C1DAD7" align="center"> First Name</th>
					<th  style="border-left: 1px solid #C1DAD7" align="center"> Middle Name</th>
				<th>Grade</th>
				<th>Action</th>
			  </tr>
			  </thead>
					<form id="form1" method="post" action="savegrade.php" name="form1" onsubmit="return validateForm()">
			  <tr>
				<td style="border-left: 1px solid #C1DAD7" width="20%"><span style="float:left"><?php echo $rows['idnumber']?>
				<input type="hidden" name="studidnum" value="<?php echo $rows['idnumber']?>"></td>
				<input type="hidden" name="subject" value="<?php echo $subject?>"></td>
				
				
				<td width=""><span style="float:left"><?php echo $rows['lname']?></td>
				<td width=""><span style="float:left"><?php echo $rows['fname']?></td>
				<td width=""><span style="float:left"><?php echo $rows['mname']?></td>
				
				<td width="8%" align="center" >
				<input list="grades" name="grade" required  class="form" style="width:200px" value="<?php echo $grade ?>">
				<datalist id="grades">
				<option value="1.00">
				<option value="1.25">
				<option value="1.50">
				<option value="1.75">
				<option value="2.00">
				<option value="2.25">
				<option value="2.50">
				<option value="2.75">
				<option value="3.00">
				<option value="4.00">
				<option value="5.00">
				<option value="Drop">
				</datalist>
				</td>
				<td width="10%" align="center">
					<span style="float:left">
			<input type="submit" value="Record">
		</form>
				</td>
			  </tr>
					<?php
					
							}
				}
				//end
				if($type1 == 'College') {
				$subject=$_POST['subject'];
				$results = mysql_query("SELECT * FROM studsub WHERE subject='$subject' AND status='active' GROUP BY student");
						while($rows = mysql_fetch_array($results))
							{	
					$student = $rows['student'];
					//check for grade
				$results1 = mysql_query("SELECT * FROM quiz WHERE subject='$subject' AND idnumber='$student' ORDER BY ID DESC LIMIT 1");
				$count=mysql_num_rows($results1);
				if($count>0) {
						while($rows1 = mysql_fetch_array($results1))
							{	
						$grade = $rows1['score'];
							}
				} else {
					$grade = '';
				}
					//end check
				?>
				<table cellpadding="1" cellspacing="1" id="customers" class="tftable order-table table bluetext">
			<thead>
			  <tr>
					<th align="center">Student Number</th>
					<th  style="border-left: 1px solid #C1DAD7" align="center"> Last Name</th>
					<th  style="border-left: 1px solid #C1DAD7" align="center"> First Name</th>
					<th  style="border-left: 1px solid #C1DAD7" align="center"> Middle Name</th>
				<th>Grade</th>
				<th>Action</th>
			  </tr>
			  </thead>
	<form id="form1" method="post" action="savegrade.php" name="form1" onsubmit="return validateForm()">
			  <tr>
				<td style="border-left: 1px solid #C1DAD7" width="20%"><span style="float:left"><?php echo $rows['student']?>
				<input type="hidden" name="studidnum" value="<?php echo $rows['student']?>"></td>
				<input type="hidden" name="subject" value="<?php echo $subject?>"></td>
				
				
				<td width=""><span style="float:left"><?php echo $rows['lname']?></td>
				<td width=""><span style="float:left"><?php echo $rows['fname']?></td>
				<td width=""><span style="float:left"><?php echo $rows['mname']?></td>
				
					<select name="term" style="display:none">
			<option></option>
			<option>Prelim</option>
			<option>Midterm</option>
			<option>Semi-Final</option>
			<option>Finals</option>
			</select>
				<td width="8%" align="center">
				<input type="text" name="grade" required  class="form" value="<?php echo number_format($grade,2) ?>" width="250px" style="width:200px">
				
				</td>
				<td width="10%" align="center">
					<span style="float:left">
			<input type="submit" value="Record">
		</form>
				</td>
			  </tr>
			  <?php
			  
			  }
				}
			  ?>
			</table>
                  
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