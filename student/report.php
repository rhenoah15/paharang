<?php include('header.php'); 
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
                    <h6 class="card-title card-padding pb-0">Report on Learner's Observed Values</h6>
 
                  <div class="table-responsive">
				                  <div class="mdc-card">

<span id="message" style="color:#000;padding:10px;font-size:15px;">
	   </span>

 <div style="width:100%;overflow-x:scroll">
 <table id="customers" width="100%">
                    <thead>
                        <tr>
                          <th class="text-left" rowspan="2" width="25%"><center>Core Values</th>
                          <th class="text-left" rowspan="2" width="55%"><center>Behavior Statement</th>
                          <th class="text-left" colspan="4"><center>Quarter</th>
                        </tr>
						<tr>
							<td width="5%"><center>1</td>
							<td width="5%"><center>2</td>
							<td width="5%"><center>3</td>
							<td width="5%"><center>4</td>
						</tr>
                      </thead>
                      <tbody>
						<tr>
							<td rowspan="2"  width="25%">1. Maka-Diyos</td>
							<td  width="55%">Expresses one's spiritual beliefs while respecting the spiritual beliefs of others</td>
							<td width="5%"><center><?php echo $a1 ?></td>
							<td width="5%"><center><?php echo $a2 ?></td>
							<td width="5%"><center><?php echo $a3 ?></td>
							<td width="5%"><center><?php echo $a4 ?></td>
						</tr>
						<tr>
							<td  width="55%">Show adherence to ethical principles by upholding truth</td>
							<td width="5%"><center><?php echo $a5 ?></td>
							<td width="5%"><center><?php echo $a6 ?></td>
							<td width="5%"><center><?php echo $a7 ?></td>
							<td width="5%"><center><?php echo $a8 ?></td>
						</tr>
						<tr>
							<td rowspan="2"  width="25%">2. Makatao</td>
							<td  width="55%">Is sensitive to individual social and cultural differences</td>
							<td width="5%"><center><?php echo $a9 ?></td>
							<td width="5%"><center><?php echo $a10 ?></td>
							<td width="5%"><center><?php echo $a11 ?></td>
							<td width="5%"><center><?php echo $a12 ?></td>
						</tr>
						<tr>
							<td  width="55%">Demonstrates contributions toward solidarity</td>
							<td width="5%"><center><?php echo $a13 ?></td>
							<td width="5%"><center><?php echo $a14 ?></td>
							<td width="5%"><center><?php echo $a15 ?></td>
							<td width="5%"><center><?php echo $a16 ?></td>
						</tr>
						<tr>
							<td rowspan="1"  width="25%">3. Makakalikasan</td>
							<td  width="55%">Cares for the environment and utilizes resources wisely, judicously and economically</td>
							<td width="5%"><center><?php echo $a17 ?></td>
							<td width="5%"><center><?php echo $a18 ?></td>
							<td width="5%"><center><?php echo $a18 ?></td>
							<td width="5%"><center><?php echo $a20 ?></td>
						</tr>
						
						<tr>
							<td rowspan="2"  width="25%">4. Makabansa</td>
							<td  width="55%">Demonstrates price in being a Filipino; execises the rights and responsibilities of a Filipino Citizen</td>
							<td width="5%"><center><?php echo $a21 ?></td>
							<td width="5%"><center><?php echo $a22 ?></td>
							<td width="5%"><center><?php echo $a23 ?></td>
							<td width="5%"><center><?php echo $a24 ?></td>
						</tr>
						<tr>
							<td  width="55%">Demonstrates appropriate behaviour in carrying out activities in the school, activities in the school, community and country</td>
							<td width="5%"><center><?php echo $a25 ?></td>
							<td width="5%"><center><?php echo $a26 ?></td>
							<td width="5%"><center><?php echo $a27 ?></td>
							<td width="5%"><center><?php echo $a28 ?></td>
						</tr>
					  </table> <br>
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