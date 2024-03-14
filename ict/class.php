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

	
	<!-- start -->
			
	<form name="frmApp" method="post" action="./images/Message.html" enctype="multipart/form-data"></form>
  <input type="hidden" name="hJob" value="search">
  <input type="hidden" name="studList">
  <input type="hidden" name="msgTo">
  <input type="hidden" name="txtMsgTo" value="">
  <input type="hidden" name="msgList">
  <input type="hidden" name="canSend">
  <input type="hidden" name="toType" value="">
  <tbody>
  <!---- body -->
  <tr bgcolor="lightblue">
   <td>
   <style>
 #table1 td{
	font-size: 13px;
}
</style> 

   <!--start-->

<?php
	require_once('../auth.php');
?>
<?php
include('../connect.php');
$subject=$_GET['subject'];
	$resultj = mysql_query("SELECT * FROM teachersubject WHERE subject='$subject'");
while($rowj = mysql_fetch_array($resultj))
	{
	$ttt=$rowj['teacher'];
	}
	
	
$result2a = mysql_query("SELECT * FROM teacher WHERE idnumber='$ttt'");
while($row2a = mysql_fetch_array($result2a))
	{
		$idnumber1 = $row2a['idnumber'];
		$type1 = $row2a['type'];
		echo '<script>console.log("'.$type1.'")</script>';
	}
?>
<div id="scroll" style="overflow-x:scroll">

<b>Subject: </b><?php echo $subject ?>
<br>
<br>
	
<div id="printTable">
			<?php
	if($type1== 'Junior High School') {
	?>	
		<table cellpadding="1" cellspacing="1" id="customers" class="tftable order-table table bluetext" border="1">
			<thead>
  <tr>
    <th >Name</th>
    
    <th style="border-left: 1px solid #C1DAD7"  >Subject</th>
    <th style="border-left: 1px solid #C1DAD7"  >Term</th>
    <th  >Grade</th>
	</tr>
	</thead>
	<?php
$resultj = mysql_query("SELECT * FROM juniorstudents ");
while($rowj = mysql_fetch_array($resultj))
	{
		$fname = $rowj['fname'];
		$mname = $rowj['mname'];
		$lname = $rowj['lname'];
		$name = $fname.' '.$mname.' '.$lname;
		$idnumber = $rowj['idnumber'];
?>
<tr>
<!-- student -->
<td style="text-align:left">

<?php echo $name ?>
</td>
<td style="text-align:left">

<?php echo $subject ?>
</td>
<!-- student -->
<!-- pecentage -->
  	
	</td>
     <!-- end percentage -->
	      <!-- Unit -->
	 
	     <!-- end unit -->
		 
	     <!-- grades prelims -->


	<?php
	$results = mysql_query("SELECT * FROM quiz WHERE  idnumber='$idnumber' AND subject='$subject' ORDER BY ID DESC LIMIT 1");
	$count=mysql_num_rows($results);//isipon kn may tyakto sa query
		if ($count > 0) {
while($rows = mysql_fetch_array($results))
	{
		echo '<td>'.$rows['term'].'</td>';
	echo '<td>	'.number_format($rows['score'],2).'</td>';
	}
	}
	else {
		echo '<td></td>';
		echo '<td></td>';
	}
	?>

  </tr>
 <?php
  }
  ?>	
</table>
		<?php
	}
	
	?>
	<?php
	if($type1== 'Senior High School') {
	?>	
		<table cellpadding="1" cellspacing="1" id="customers" class="tftable order-table table bluetext" border="1">
			<thead>
  <tr>
    <th >Name</th>
    
    <th style="border-left: 1px solid #C1DAD7"  >Subject</th>
    <th style="border-left: 1px solid #C1DAD7"  >Term</th>
    <th  >Grade</th>
	</tr>
	</thead>
	<?php
$resultj = mysql_query("SELECT * FROM seniorstudents ");
while($rowj = mysql_fetch_array($resultj))
	{
		$fname = $rowj['fname'];
		$mname = $rowj['mname'];
		$lname = $rowj['lname'];
		$name = $fname.' '.$mname.' '.$lname;
		$idnumber = $rowj['idnumber'];
?>
<tr>
<!-- student -->
<td style="text-align:left">

<?php echo $name ?>
</td>
<td style="text-align:left">

<?php echo $subject ?>
</td>
<!-- student -->
<!-- pecentage -->
  
	</td>
     <!-- end percentage -->
	      <!-- Unit -->
	 
	     <!-- end unit -->
		 
	     <!-- grades prelims -->


	<?php
	$results = mysql_query("SELECT * FROM quiz WHERE  idnumber='$idnumber' AND subject='$subject' ORDER BY ID DESC LIMIT 1");
	$count=mysql_num_rows($results);//isipon kn may tyakto sa query
		if ($count > 0) {
while($rows = mysql_fetch_array($results))
	{
		echo '<td>'.$rows['term'].'</td>';
	echo '<td>	'.number_format($rows['score'],2).'</td>';
	}
	}
	else {
		echo '<td></td>';
		echo '<td></td>';
	}
	?>
  </tr>
 <?php
  }
  ?>	
</table>
		<?php
	}
	if($type1 == 'College') {
	
	?>
			<table cellpadding="1" cellspacing="1" id="customers" class="tftable order-table table bluetext" border="1">
			<thead>
  <tr>
    <th >Name</th>
    <th style="border-left: 1px solid #C1DAD7"  >Subject</th>
    <th >Unit</th>
    <th  >Grade</th>
	</tr>
	</thead>
	<?php
$resultj = mysql_query("SELECT * FROM studsub WHERE subject='$subject' GROUP BY student");
while($rowj = mysql_fetch_array($resultj))
	{
		$fname = $rowj['fname'];
		$mname = $rowj['mname'];
		$lname = $rowj['lname'];
		$name = $fname.' '.$mname.' '.$lname;
		$idnumber = $rowj['student'];
?>
<tr>
<!-- student -->
<td>

<?php echo $name ?>
</td>
<td>

<?php echo $subject ?>
</td>
<!-- student -->
<!-- pecentage -->
  	
     <!-- end percentage -->
	      <!-- Unit -->
	 <td>
	<?php
	$results = mysql_query("SELECT * FROM subject WHERE subject_id='$subject'");
while($rows = mysql_fetch_array($results))
	{
	echo $rows['unit'];
	}
	?>
	</td>
	
	     <!-- end unit -->
		 
	     <!-- grades prelims -->
<td>	

	<?php
	$results = mysql_query("SELECT * FROM quiz WHERE term='' AND idnumber='$idnumber' AND subject='$subject' ORDER BY ID DESC LIMIT 1");
	$count=mysql_num_rows($results);//isipon kn may tyakto sa query
		if ($count > 0) {
while($rows = mysql_fetch_array($results))
	{
	echo ''.number_format($rows['score'],2).'</a>';
	$prelim = $rows['score'];
	}
	}
	else {
	echo 0;
	$prelim = 0;
	}
	?>
	</td>

   <!-- end project-->	
	
	
	
  </tr>
	
	
	
	
	
	
	
	
	
	
	
 <?php
	}
  }
  ?>	
</table>
</div>
			<!-- <input type="button" value="Approve Grades" onclick="window.location='app.php?id=<?php echo $subject ?>'" style="width:200px" class="btn btn-primary"> -->
									<br>
			<!-- end -->
<script>
$(document).ready(function() {
    $('#customers').DataTable( {
        responsive: true
    } );
} );
</script>
				  <!-- end -->
  
				
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