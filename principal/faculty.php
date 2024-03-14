<?php include('header.php'); ?>
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.html -->
      <header class="mdc-top-app-bar">
        <div class="mdc-top-app-bar__row">
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
            <span class="mdc-top-app-bar__title">Faculty</span>
            
          </div>
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
            
            <div class="divider d-none d-md-block"></div>
         
               
			
            
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
                    <h6 class="card-title card-padding pb-0">Employee List</h6>

                  <div class="table-responsive">
				                  <div class="mdc-card">
<button class="btn" style="width:150px"  id="myBtn">Add Faculty</button>
<br>
<br>
<div style="width:100%;overflow-x:scroll">
                    <table id="customers">
                    <thead>
                        <tr>
                          <th class="text-left">Name</th>
                          <th class="text-left">Employee ID</th>
                          <th class="text-left">Email</th>
                          <th class="text-left">Contact Number</th>
                          <th class="text-left">Address</th>
                          <!-- <th class="text-left">Status</th> -->
                          <th class="text-left"><center>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  	<?php
				include('../connect.php');
				$result = mysql_query("SELECT * FROM login WHERE type = 'Faculty' ORDER BY name ASC");
				while($row = mysql_fetch_array($result))
				{           
			$stat = $row['stat'];
			$d1 = $row['d1'];
			$d2 = $row['d2'];
			$d1 = date('F d, Y',strtotime($d1));
			$d2 = date('F d, Y',strtotime($d2));
						echo' <tr>';
                        echo'   <td class="text-left">'.$row['name'].'</td>';
                          echo' <td class="text-left">'.$row['username'].'</td>';
                          echo' <td class="text-left">'.$row['username'].'</td>';
                          echo' <td class="text-left">'.$row['contact'].'</td>';
                          echo' <td class="text-left">'.$row['address'].'</td>';
                        // echo' <td class="text-left">'.$row['stat'].'';
						 // echo '<br>';
						  //if($row['stat'] == '') {
							  
						//  } else{ 
						//  echo 'until '.$d1.'';
						//  }
						//  echo '</td>';
                          echo' <td class="text-left" width=20%"><center>';
						  echo '<button class="btn">Action</button>
						<div class="dropdown">
						  <button class="btn" style="border-left:1px solid #0d8bf2">
								<i class="fa fa-caret-down"></i>
						  </button>
						  <div class="dropdown-content" style="text-align:left">
							<a href="profile2.php?id='.$row['id'].'" >View Information</a>';
							if($stat == 'On Leave') {
							echo '<a href="leave1.php?id='.$row['id'].'" onclick="return confirm(\'Are you sure you want to end this employee leave?\')">End Leave</a>';	
							} else {
							echo '<a href="leave.php?id='.$row['id'].'" rel="facebox" >Set as Leave</a>';
							}
							echo '<a href="deletefaculty.php?id='.$row['id'].'&contact='.$row['contact'].'&name='.$row['name'].'" onclick="return confirm(\'Are you sure you want to delete this record?\')">Delete Employee</a>
						  </div>
						</div>';
						 // <a href="viewfaculty.php?id='.$row['id'].'" rel="facebox" class="mdc-button mdc-button--raised filled-button--success" style="width:80%">View Information</a><br><br>
						  //<input type="button" class="mdc-button mdc-button--raised filled-button--secondary" value="Delete User" style="width:80%" onclick="window.location=\'deletefaculty.php?id='.$row['id'].'\'">
					echo'	  </td>';
                        echo' </tr>';
				}
				?>
            			</table>
						<br>
						<br>
						<br>
						<br>
						<br>
						</div>
                    </div>
                  </div>
                  <div class="d-block d-sm-flex justify-content-between align-items-center">
				  
				  <br>
                     
					
<script>
$(document).ready(function() {
    $('#customers').DataTable( {
        responsive: true
    } );
} );
</script>

<style>
 .dataTables_filter input {
    padding: 10px !important;

    }
.dataTables_wrapper .dataTables_filter {
   
}
</style>     
                     
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
	<h3>Enter Faculty Information</h6>
    <form action="facultyexec.php" method="POST" >
	
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" name="name">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Name</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
					  <br>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" name="username">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Employee ID</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
					  <br>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" name="email">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Email Address</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
					  <br>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" name="contact">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Contact Number</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
					  <br>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" name="address">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Address</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
					  <br>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" name="password" type="password" minlength="8">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Password</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
					  <br>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" name="cpassword" type="password">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Confirm Password</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
					  <br>
					  <input type="submit" name="submit" value="Register Faculty"  class="btn" >
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