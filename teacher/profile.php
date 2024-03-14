<?php
include('header.php')
?>
<?php
$id=$_SESSION['SESS_MEMBER_ID'];
include('../connect.php');
$result = mysql_query("SELECT * FROM login WHERE id='$id'");
while($row = mysql_fetch_array($result))
	{
$fname = $row['fname'];
$lname = $row['lname'];
$mname =$row['mname'];
$username = $row['username'];
$email = $row['email'];
$contact = $row['contact'];
$lrn = $row['lrn'];
$ext = $row['ext'];
$sex = $row['sex'];
$bday = $row['bday'];
$name = $fname.' '.$mname.' '.$lname;
	}

$result1 = mysql_query("SELECT * FROM teacher WHERE idnumber='$username'");
while($row1 = mysql_fetch_array($result1))
	{
		$name =$row1['fname'];
		$gender =$row1['gender'];
		$status =$row1['status'];
		$contact =$row1['contact'];
		$image =$row1['image'];
		$email =$row1['email'];
		$bday =$row1['bday'];
		$work =$row1['work'];
	}
 $timestamp = date("Y-m-d H:i:s");
	mysql_query("UPDATE login SET timestamp = '$timestamp' WHERE username = '$username'");	
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
            
          
			
            
          </div>
        </div>
      </header>
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
           
         
           
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                  <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-0">Faculty Profile</h4>
                    <div>
                        
                    </div>
                  </div>
				  <hr>
                  <br>
				 <style>
				 
/* Float four columns side by side */
.column1 {
  float: left;
  width: 25%;
  padding: 0 10px;
}
.column2 {
  float: left;
  width: 70%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding in columns */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the counter cards */
.card {
  border:2px solid #007BFF;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 16px;
  text-align: center;
  background-color: #FFF;
  border-radius:10px
}

/* Responsive columns - one column layout (vertical) on small screens */
@media screen and (max-width: 600px) {
  .column1,.column2 {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
				 </style>
				 
				 <?php
				 if($image == '') {
					 $image = 'profile.png';
				 }
				 if(isset($_POST['submit'])) {
					 $image = $_POST['file'];
					 mysql_query("UPDATE teacher SET image= '$image' WHERE idnumber='$username'");
				 }
				 ?>
				 <div class="row">
  <div class="column1" >
    <div class="card">
	<center>
	<form action="#" method="POST">
	<img src="<?php echo $image ?>" style="width:300px;;height:300px">
	<h1><?php echo $name ?></h1>
	<h3 style="color:#808080"><?php echo $username ?></h3>
	
<input type="file" placeholder="File Upload" name="file1" id="upload" required placeholder="username" class="form-control"/>
			<textarea id="file" name="file" style="display:none"></textarea>
			<input type="submit" name="submit" value="Update Profile Image" class="btn btn-primary">
			</form>
	</div>
  </div>
  <div class="column2" style="text-align:left">
    <div class="card" style="text-align:left">
	<input type="button" value="Personal Information" class="btn">
	<hr>
	<br>
	<?php
	if(isset($_POST['submit1'])) {
		$username = $_POST['username'];
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$bday = $_POST['bday'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
					 mysql_query("UPDATE teacher SET name= '$name' WHERE idnumber='$username'");
					 mysql_query("UPDATE teacher SET gender= '$gender' WHERE idnumber='$username'");
					 mysql_query("UPDATE teacher SET bday= '$bday' WHERE idnumber='$username'");
					 mysql_query("UPDATE teacher SET email= '$email' WHERE idnumber='$username'");
					 mysql_query("UPDATE teacher SET contact= '$contact' WHERE idnumber='$username'");
				echo '<script>alert("Account has been updated")</script>';
	}
	?>
	<form action="#" method="POST">
						Employee ID<br>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" name="username" value="<?php echo $username ?>" >
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
					  <br>
					   Name<br>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" name="name" value="<?php echo $name ?>" >
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
					  <br>
					
					  Sex<br>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
						<input class="mdc-text-field__input" id="text-field-hero-input" name="gender" value="<?php echo $gender ?>" >
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
					  <br>
					  Birthday<br>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" name="bday" type="date" value="<?php echo $bday?>">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
					  <br>
					  Email Address<br>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" name="email" value="<?php echo $email ?>">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
					  Contact Number<br>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" name="contact" value="<?php echo $contact ?>">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
			<input type="submit" name="submit1" value="Update Profile " class="btn btn-primary">
					  <br>
					  <br>
				  <br>
				  
					  </form>
                     
	</div>
  </div>
</div>
	
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
                <span class="text-center text-sm-left d-block d-sm-inline-block tx-14">Copyright © <a href="#" target="_blank">2023 </a>Paharang Integrated School</span>
              </div>
              
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
    </div>
  </div>
  
	<script>
const fileInput = document.getElementById('upload');
fileInput.addEventListener('change', (e) => {
// get a reference to the file
const file = e.target.files[0];

// encode the file using the FileReader API
const reader = new FileReader();
reader.onloadend = () => {

    // use a regex to remove data url part
    const base64String = reader.result;
        document.getElementById('file').value =reader.result; 
		document.getElementById('img').src = reader.result; 
    console.log(base64String);
};
reader.readAsDataURL(file);});
				</script>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
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