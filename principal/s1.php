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
function createRandomPassword() {
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;
    while ($i <= 7) {

        $num = rand() % 33;

        $tmp = substr($chars, $num, 1);

        $pass = $pass . $tmp;

        $i++;

    }
    return $pass;
}
$finalcode='AC-'.createRandomPassword();
?>
<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<?php
			include('../connect.php');
			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM teacher WHERE idnumber='$id'");
			while($row = mysql_fetch_array($result))
			{
					$idnumber = $row['idnumber'];
			$fname = $row['fname'];
			$mname = $row['mname'];
			$lname = $row['lname'];
			}
			
?>
<b>Faculty: <?php echo $fname.' '.$mname.' '.$lname ?></b>
<br><br>
Fill up the items below to assign a subject for specific teacher:<br><br>
		<form action="setsubjectteacher.php" method="post">
		<table width="100%">
		<tbody style="font-family:arial;font-size:12">
<tr><td width="20%">
		Teacher</td><td>
		<select name="teacher" class="form" required>
		<?php
			echo '<option value="'.$idnumber.'">'.$fname.' '.$mname.' '.$lname.'</option>';
			
		?>
		</select>
		</td>
		<td></td>
		</tr>
		<tr>
			<td>Subject</td>
			<td>
		<select name="subject" class="form" required>
		<option></option>
		<?php
		

		$results = mysql_query("SELECT * FROM juniorsubjects ORDER BY subject ASC");
		while($rows = mysql_fetch_array($results))
			{
			echo '<option value="'.$rows['subject'].'">'.$rows['subject'].'</option>';
			}
		$results = mysql_query("SELECT * FROM seniorsubjects ORDER BY subject ASC");
		while($rows = mysql_fetch_array($results))
			{
			echo '<option value="'.$rows['subject'].'">'.$rows['subject'].'</option>';
			}
		?>
			</select>
			</td>
		<td></td>
		</tr>
		<tr><td>
		</td><td></td><td></td></tr>
		<tr>
			<td>Grade/Strand</td>
			<td>
		<select name="grade" required class="form" onChange="showUser(this.value)" id="grade">
			<option></option>
			<?php
		$results = mysql_query("SELECT * FROM junior ");
		while($rows = mysql_fetch_array($results))
			{
			echo '<option value="'.$rows['course'].'">'.$rows['course'].'</option>';
			}
		$results = mysql_query("SELECT * FROM senior ");
		while($rows = mysql_fetch_array($results))
			{
			echo '<option value="'.$rows['grade'].'">'.$rows['grade'].'</option>';
			}
			?>
		</select></td>
		<td></td>
		</tr>
		<tr>
			<td>Grade/Strand</td>
			<td>
		<select name="section" required class="form"  id="section">
			<option></option>
		</select></td>
		<td></td>
		</tr>
		
		</table>
		<input type="submit" value="Assign"  onClick="abc()" class="btn">
		</form>
<table border="1" align="center" id="customers"> 
<tbody align="center" style="font-family:Arial;font-size:12px">
<tr>
	<th>Subject</th>
<tr>

	<?php
	include('../connect.php');	
			
				
	$results = mysql_query("SELECT * FROM teachersubject WHERE teacher = '$idnumber' AND status <> 'Done' ");
	while($rows = mysql_fetch_array($results))
		{
		echo '<tr>';
			
			echo '<td align="left">'.$rows['subject'].'</td>';
			echo '</tr>';
				

				}
	?>
	




</table>		
				  <!-- end -->
				  
				  <br>
                     
					  

      <script>
 //end check sched
function showUser(str) {
  if (str=="") {
    document.getElementById("section").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("section").innerHTML=xmlhttp.responseText;
    }
  }
  //alert(str);
  xmlhttp.open("GET","g1.php?q="+str,true);
  xmlhttp.send();

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