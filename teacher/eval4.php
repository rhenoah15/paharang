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
	<div id="printme">
	<?php
	$idnumber1 = $_GET['student'];
	$faculty = $_GET['faculty'];
	$type = $_GET['type'];
				$result = mysql_query("SELECT * FROM teacher WHERE idnumber= '$faculty'");
				while($row = mysql_fetch_array($result))
					{
						$name =''.$row['fname'].' '.$row['mname'].' '.$row['lname'].'';
						$faculty =$row['idnumber'];
						$department =$row['type'];
					}
					if($type == 'Faculty') {
				$result2 = mysql_query("SELECT * FROM teacher WHERE idnumber= '$idnumber1'");
				while($row2 = mysql_fetch_array($result2))
					{
						$name1 =''.$row2['fname'].' '.$row2['mname'].' '.$row2['lname'].'';
					} 
					} else {
				$result2 = mysql_query("SELECT * FROM student WHERE idnumber= '$idnumber1'");
				while($row2 = mysql_fetch_array($result2))
					{
						$name1 =''.$row2['fname'].' '.$row2['mname'].' '.$row2['lname'].'';
					} 
						
					}
					
				
	?>
 <div class="row">
            <div class="col-md-6">
                <div class="demo-content"><h2 >Faculty Evaluation Form</h2></center>
	<h3>Faculty Name:<?php echo  $name ?></h3>
	<h3>Department:<?php echo  $department ?></h3></div>
            </div>
            
        </div>
	
	<!-- start -->
	
	
	<!-- start -->
	
	<input type="hidden" name="faculty" value="<?php echo $idnumber ?>">
	<br>
	<table id="customers">
		<thead>
			<th width="40%">Factor	Weight</th>
			<th>1</th>
			<th>2</th>
			<th>3</th>
			<th>4</th>
			<th>5</th>
		</thead>
		<tbody>
			<?php
				$resulta = mysql_query("SELECT * FROM question WHERE type = 'Student' GROUP BY category ");
				while($rowa = mysql_fetch_array($resulta))
					{
						$category = $rowa['category'];
						
		echo '<tr>';
		echo '	<th colspan="6">'.$rowa['category'].'</th>';
		echo '</tr>';
				$resulta1 = mysql_query("SELECT * FROM question WHERE category = '$category' AND type = 'Student'");
				while($rowa1 = mysql_fetch_array($resulta1))
					{
		$id1 =$rowa1['id'];
		
		//check for answer
		
		$faculty  =$_GET['faculty'];
		$student = $_GET['student'];
		$result1 = mysql_query("SELECT * FROM evaluation WHERE faculty = '$faculty' AND student = '$student' AND qid = '$id1'");
				while($row1 = mysql_fetch_array($result1))
					{
						$comment = $row1['comment'];
						$answer=$row1['answer'];
		echo '<input type="hidden" name="qid[]" value="'.$id1.'">';
		echo '<tr>';
		echo '	<td>'.$rowa1['question'].'</td>';
		if($answer == '1') {
		echo '	<td><input type="radio" name="answer['.$id1.']" value="1"  onclick="javascript: return false;" checked></td>';
		} else {
		echo '	<td><input type="radio" name="answer['.$id1.']" value="1"  onclick="javascript: return false;"></td>';
		}
		if($answer == '2') {
		echo '	<td><input type="radio" name="answer['.$id1.']" value="1"  onclick="javascript: return false;" checked></td>';
		} else {
		echo '	<td><input type="radio" name="answer['.$id1.']" value="1"  onclick="javascript: return false;"></td>';
		}
		if($answer == '3') {
		echo '	<td><input type="radio" name="answer['.$id1.']" value="1"  onclick="javascript: return false;" checked></td>';
		} else {
		echo '	<td><input type="radio" name="answer['.$id1.']" value="1"  onclick="javascript: return false;"></td>';
		}
		if($answer == '4') {
		echo '	<td><input type="radio" name="answer['.$id1.']" value="1"  onclick="javascript: return false;" checked></td>';
		} else {
		echo '	<td><input type="radio" name="answer['.$id1.']" value="1"  onclick="javascript: return false;"></td>';
		}
		if($answer == '5') {
		echo '	<td><input type="radio" name="answer['.$id1.']" value="1"  onclick="javascript: return false;" checked></td>';
		} else {
		echo '	<td><input type="radio" name="answer['.$id1.']" value="1"  onclick="javascript: return false;"></td>';
		}
		echo '</tr>';
		
		//end check
					}
					}
					}
		?>
		
	</table>
			Comment/Recommendation:<br>
		<textarea style="height:200px;width:100%" class="form-control" required name="comment" readonly><?php echo $comment ?></textarea>	
</div>		
			<br>
			<input type="button" value="Print Report" class="btn-primary" style="background:#800000;width:200px" onclick="PrintElem('printme')" >
			
					
			

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