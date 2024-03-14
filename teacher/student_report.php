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
            
            <div class="divider d-none d-md-block"></div>
         
               
			<!--
					<span style="float:right">
				  <input type="button" value="View All" class="btn" onclick="document.getElementById('message2').style.display='block';this.style.display='none';document.getElementById('v2').style.display='block'" id="v1">                        
				  <input type="button" value="Hide Events" class="btn" onclick="document.getElementById('message2').style.display='none';this.style.display='none';document.getElementById('v1').style.display='block'" id="v2" style="display:none">
                    </span>
            -->
          </div>
        </div>
      </header>
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
				<?php
		$username =$_GET['username'];
		
		$results = mysql_query("SELECT * FROM seniorstudents WHERE idnumber = '$username'");
		while($rows = mysql_fetch_array($results))
			{	
			$student = $rows['idnumber'];
			$name  = $rows['fname'].' '.$rows['lname'];
			}
			if(isset($_POST['submit'])) {
				$idnumber = $_GET['username'];
				mysql_query("DELETE FROM report WHERE idnumber = '$idnumber'");
				$a1 = $_POST['a1'];
				$a2 = $_POST['a2'];
				$a3 = $_POST['a3'];
				$a4 = $_POST['a4'];
				$a5 = $_POST['a5'];
				$a6 = $_POST['a6'];
				$a7 = $_POST['a7'];
				$a8 = $_POST['a8'];
				$a9 = $_POST['a9'];
				$a10 = $_POST['a10'];
				$a11 = $_POST['a11'];
				$a12 = $_POST['a12'];
				$a13 = $_POST['a13'];
				$a14 = $_POST['a14'];
				$a15 = $_POST['a15'];
				$a16 = $_POST['a16'];
				$a17 = $_POST['a17'];
				$a18 = $_POST['a18'];
				$a19 = $_POST['a19'];
				$a20 = $_POST['a20'];
				$a21 = $_POST['a21'];
				$a22 = $_POST['a22'];
				$a23 = $_POST['a23'];
				$a24 = $_POST['a24'];
				$a25 = $_POST['a25'];
				$a26 = $_POST['a26'];
				$a27 = $_POST['a27'];
				$a28 = $_POST['a28'];
				mysql_query("INSERT INTO report (idnumber, a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,a11,a12,a13,a14,a15,a16,a17,a18,a19,a20,a21,a22,a23,a24,a25,a26,a27,a28)
VALUES ('$idnumber','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28')");
echo '<script>alert("Learner\'s Observed Values Report has been added");window.location="student_report.php?username='.$idnumber.'"</script>';
			}
			$username =$_GET['username'];
		$result = mysql_query("SELECT * FROM report WHERE idnumber = '$username'");
		while($row = mysql_fetch_array($result))
			{	
			$a1 = $row['a1'];
			$a2 = $row['a2'];
			$a3 = $row['a3'];
			$a4 = $row['a4'];
			$a5 = $row['a5'];
			$a6 = $row['a6'];
			$a7 = $row['a7'];
			$a8 = $row['a8'];
			$a9 = $row['a9'];
			$a10 = $row['a10'];
			$a11 = $row['a11'];
			$a12 = $row['a12'];
			$a13 = $row['a13'];
			$a14 = $row['a14'];
			$a15 = $row['a15'];
			$a16 = $row['a16'];
			$a17 = $row['a17'];
			$a18 = $row['a18'];
			$a19 = $row['a19'];
			$a20 = $row['a20'];
			$a21 = $row['a21'];
			$a22 = $row['a22'];
			$a23 = $row['a23'];
			$a24 = $row['a24'];
			$a25 = $row['a25'];
			$a26 = $row['a26'];
			$a27 = $row['a27'];
			$a28 = $row['a28'];
			}
				?>
                    <h6 class="card-title card-padding pb-0">
					Student Number:<?php echo $student ?><br>
					Student Name:<?php echo $name ?><br>
					Report on Learner's Observed Values</h6>
 
                  <div class="table-responsive">
				                  <div class="mdc-card">

<span id="message" style="color:#000;padding:10px;font-size:15px;">
	   </span>

 <div style="width:100%;overflow-x:scroll">
 <form action="#" method="POST">
 <table id="customers" width="100%">
                    <thead>
                        <tr>
                          <th class="text-left" rowspan="2" width="25%"><center>Core Values</th>
                          <th class="text-left" rowspan="2" width="35%"><center>Behavior Statement</th>
                          <th class="text-left" colspan="4"><center>Quarter</th>
                        </tr>
						<tr>
							<td width="10%"><center>1</td>
							<td width="10%"><center>2</td>
							<td width="10%"><center>3</td>
							<td width="10%"><center>4</td>
						</tr>
                      </thead>
                      <tbody>
						<tr>
							<td rowspan="2"  width="25%">1. Maka-Diyos</td>
							<td  width="35%">Expresses one's spiritual beliefs while respecting the spiritual beliefs of others</td>
							<td width="10%"><center>
							<select name="a1" required class="form-control">
								<option><?php echo $a1 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td>
							<td width="10%"><center>
							<select name="a2" required class="form-control">
								<option><?php echo $a2 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
							<td width="10%"><center>
							<select name="a3" required class="form-control">
								<option><?php echo $a3 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
							<td width="10%"><center>
							<select name="a4" required class="form-control">
								<option><?php echo $a4 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
						</tr>
						<tr>
							<td  width="35%">Show adherence to ethical principles by upholding truth</td>
							<td width="10%"><center>
							<select name="a5" required class="form-control">
								<option><?php echo $a5 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
							<td width="10%"><center>
							<select name="a6" required class="form-control">
								<option><?php echo $a6 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
							<td width="10%"><center>
							<select name="a7" required class="form-control">
								<option><?php echo $a7 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
							<td width="10%"><center>
							<select name="a8" required class="form-control">
								<option><?php echo $a8 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
						</tr>
						<tr>
							<td rowspan="2"  width="25%">2. Makatao</td>
							<td  width="35%">Is sensitive to individual social and cultural differences</td>
							<td width="10%"><center>
							<select name="a9" required class="form-control">
								<option><?php echo $a9 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
							<td width="10%"><center>
							<select name="a10" required class="form-control">
								<option><?php echo $a10 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
							<td width="10%"><center>
							<select name="a11" required class="form-control">
								<option><?php echo $a11 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
							<td width="10%"><center>
							<select name="a12" required class="form-control">
								<option><?php echo $a12 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
						</tr>
						<tr>
							<td  width="35%">Demonstrates contributions toward solidarity</td>
							<td width="10%"><center>
							<select name="a13" required class="form-control">
								<option><?php echo $a13 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
							<td width="10%"><center>
							<select name="a14" required class="form-control">
								<option><?php echo $a14 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
							<td width="10%"><center>
							<select name="a15" required class="form-control">
								<option><?php echo $a15 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
							<td width="10%"><center>
							<select name="a16" required class="form-control">
								<option><?php echo $a16 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
						</tr>
						<tr>
							<td rowspan="1"  width="25%">3. Makakalikasan</td>
							<td  width="35%">Cares for the environment and utilizes resources wisely, judicously and economically</td>
							<td width="10%"><center>
							<select name="a17" required class="form-control">
								<option><?php echo $a17 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
							<td width="10%"><center>
							<select name="a18" required class="form-control">
								<option><?php echo $a18 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
							<td width="10%"><center>
							<select name="a19" required class="form-control">
								<option><?php echo $a19 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
							<td width="10%"><center>
							<select name="a20" required class="form-control">
								<option><?php echo $a20 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
						</tr>
						
						<tr>
							<td rowspan="2"  width="25%">4. Makabansa</td>
							<td  width="35%">Demonstrates price in being a Filipino; execises the rights and responsibilities of a Filipino Citizen</td>
							<td width="10%"><center>
							<select name="a21" required class="form-control">
								<option><?php echo $a21 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
							<td width="10%"><center>
							<select name="a22" required class="form-control">
								<option><?php echo $a22 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
							<td width="10%"><center>
							<select name="a23" required class="form-control">
								<option><?php echo $a23 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
							<td width="10%"><center>
							<select name="a24" required class="form-control">
								<option><?php echo $a24 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
						</tr>
						<tr>
							<td  width="35%">Demonstrates appropriate behaviour in carrying out activities in the school, activities in the school, community and country</td>
							<td width="10%"><center>
							<select name="a25" required class="form-control">
								<option><?php echo $a25 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
							<td width="10%"><center>
							<select name="a26" required class="form-control">
								<option><?php echo $a26 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
							<td width="10%"><center>
							<select name="a27" required class="form-control">
								<option><?php echo $a27 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
							<td width="10%"><center>
							<select name="a28" required class="form-control">
								<option><?php echo $a28 ?></option>
								<option>AO</option>
								<option>SO</option>
								<option>RO</option>
								<option>NO</option>
							</td></td>
						</tr>
					  </table>
					  <input type="submit" name="submit" value="Submit" class="btn">
					  <br>
					  <h2>Observed Values</h2>
					  <table width="40%">
						<tr>
							<td>Marking</td>
							<td>Non-Numeric Rating</td>
						</tr>
						<tr>
							<td>AO</td>
							<td>Always Observed</td>
						</tr>
						<tr>
							<td>SO</td>
							<td>Sometimes Observed</td>
						</tr>
						<tr>
							<td>RO</td>
							<td>Rarely Observed</td>
						</tr>
						<tr>
							<td>NO</td>
							<td>Never Observed</td>
						</tr>
					  </table>
					  </form>
						</div>
						</div>
                  </div>
                  <div class="d-block d-sm-flex justify-content-between align-items-center">
				  
				  <br>
                     
					  
                     
                  </div>
                  
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
                
              </div>
              
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
    </div>
  </div>
  
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
	<h3>Add Announcement</h6>
    <form action="eventexec.php" method="POST" >
	
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" name="title">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Announcement Name</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
					  <br>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" name="date" type="date">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Date</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
					  <br>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" name="description">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Description</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
					  <br>
                     
					  <br>
					  <input type="submit" name="submit" value="Announcement Event"  class="mdc-button mdc-button--raised filled-button--success" >
	</form>
  </div>

</div>
  <script>
  
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
  <!-- plugins:js -->
  <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
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