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
                    <h6 class="card-title card-padding pb-0">Announcement</h6>
 
                  <div class="table-responsive">
				                  <div class="mdc-card">
<!-- <button class="btn btn-primary" style="width:250px"  id="myBtn">Add Announcement</button> -->

<span id="message" style="color:#000;padding:10px;font-size:15px;">
	   </span>

 <div style="width:100%;overflow-x:scroll">
 <table id="customers" width="100%">
                    <thead>
                        <tr>
                          <th class="text-left">Announcement</th>
                          <th class="text-left">Date</th>
                          <th class="text-left">Description</th>
                          
                        </tr>
                      </thead>
                      <tbody>
					  	<?php
				include('../connect.php');
				$result = mysql_query("SELECT * FROM tools ");
				while($row = mysql_fetch_array($result))
				{           
						echo' <tr>';
                        echo'   <td class="text-left">'.$row['title'].'</td>';
                        echo'   <td class="text-left">'.$row['date'].'</td>';
                        echo'   <td class="text-left">'.$row['description'].'</td>';
                          //<a href="viewstudent.php?id='.$row['id'].'" rel="facebox" class="mdc-button mdc-button--raised filled-button--success" style="width:80%">View Information</a>
						  //<br><br>
						  //<input type="button" class="mdc-button mdc-button--raised filled-button--secondary" value="Delete User" style="width:80%" onclick="window.location=\'deletestudent.php?id='.$row['id'].'\'">
						
                        echo' </tr>';
				}
				?>
            			</table>                   
						<br>
						<br>
						<br>
						<br>
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