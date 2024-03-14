<?php include('header.php'); ?>
	<?php
			
							?>
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
<h2>View Students - <?php echo $_GET['id'] ?></h2>
   <!--start-->

   <!--start-->
<table cellpadding="1" cellspacing="1" id="customers" style="font-size:12px">
			<tr>
				<th style="border-left: 1px solid #C1DAD7" >Grade</th>
				<th style="border-left: 1px solid #C1DAD7" >Strand</th>
				<th style="border-left: 1px solid #C1DAD7" >Subject</th>
				<th style="border-left: 1px solid #C1DAD7" >Description</th>
				<th><center>Action</th>
			</tr>
			<?php
			
				include('../connect.php');
		$quarter = $_GET['quarter'];
		$sem = $_GET['id'];
	$results = mysql_query("SELECT * FROM teacher WHERE idnumber='$idnumber'");
			while($rows = mysql_fetch_array($results))
				{
				$idnum = $rows['idnumber'];
				$type = $rows['type'];
				}
			$result = mysql_query("SELECT * FROM teachersubject WHERE teacher='$idnumber' ORDER BY level ASC");
			while($row = mysql_fetch_array($result))
				{
					$subject =$row['subject'];	
					$grade = $row['course'];
					$section = $row['level'];
					if($type == 'Junior High School') {
			$result1 = mysql_query("SELECT * FROM juniorsubjects WHERE subject='$subject' AND course = '$grade'");
			while($row1 = mysql_fetch_array($result1))
				{
					$subject  = $row1['subject'];
					$description  = $row1['description'];
					$grade = $row1['course'];
				}
				//section
				$result1c = mysql_query("SELECT * FROM section WHERE course='$grade' AND section='$section'");
			while($row1c = mysql_fetch_array($result1c))
				{
					
					echo '<tr>';
					echo '<td style="border-left: 1px solid #C1DAD7"><div align="left">'.$grade.'</div></td>';
					echo '<td style="border-left: 1px solid #C1DAD7"><div align="left">'.$row1c['section'].'</div></td>';
					echo '<td style="border-left: 1px solid #C1DAD7"><div align="left">'.$subject.'</div></td>';
					echo '<td style="border-left: 1px solid #C1DAD7"><div align="left">'.$description.'</div></td>';
					echo '<td><div align="center"><a href="submitgrade.php?subject='.$row['subject'].'&quarter='.$quarter.'&sem='.$sem.'&grade='.$grade.'&section='.$row1c['section'].'&type=Junior High School" title="Click To Edit" class="btn btn-info">View Students</a>  </div></td>';
					echo '</tr>';
					
				}
				// end section
				}
					if($type == 'Senior High School') {
			$result1 = mysql_query("SELECT * FROM seniorsubjects WHERE subject='$subject' ");
			while($row1 = mysql_fetch_array($result1))
				{
					$subject  = $row1['subject'];
					$description  = $row1['description'];
					$grade1 =$row1['grade'];
					$section1 = $row1['strand'];
				$result1c = mysql_query("SELECT * FROM senior WHERE strand='$section1' AND grade = '$grade1'");
				
$count1=mysql_num_rows($result1c);
			while($row1c = mysql_fetch_array($result1c))
				{
					echo '<tr>';
					echo '<td style="border-left: 1px solid #C1DAD7"><div align="left">'.$row1c['grade'].'</div></td>';
					echo '<td style="border-left: 1px solid #C1DAD7"><div align="left">'.$row1c['strand'].'</div></td>';
					echo '<td style="border-left: 1px solid #C1DAD7"><div align="left">'.$subject.'</div></td>';
					echo '<td style="border-left: 1px solid #C1DAD7"><div align="left">'.$description.'</div></td>';
					echo '<td><div align="center"><a href="submitgrade.php?subject='.$row['subject'].'&quar='.$quarter.'&quarter='.$sem.'&type=Senior High School&grade='.$row1c['grade'].'&section='.$row1c['strand'].'" title="Click To Edit" class="btn btn-info">View Students</a>  </div></td>';
					echo '</tr>';
					
				}
				
				}
				}
		
				}
			?>
		</table>
   
   
   
   <!-- end -->
   </td>
  </tr>
  
</tbody></table>
                  
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