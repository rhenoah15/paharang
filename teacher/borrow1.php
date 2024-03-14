<?php include('header.php'); ?>

<?php
$book = $_GET['id'];

$id=$_SESSION['SESS_MEMBER_ID'];
include('../connect.php');
$result2 = mysql_query("SELECT * FROM user WHERE id='$id'");
while($row2 = mysql_fetch_array($result2))
	{
		$username = $row2['idnumber'];
		//$name = $row2['name'];
	}
	

include('../connect.php');

$resultab = mysql_query("SELECT * FROM borrow WHERE borrower = '$idnumber' AND returnbook = ''");

		$countab=mysql_num_rows($resultab);
if($countab >= 100) {
	
	echo '<script>alert("Student or Teacher can only borrow 3 books a day");window.location="index.php"</script>';
} else {
		$result = mysql_query("SELECT * FROM user WHERE idnumber = '$idnumber'");
		$count=mysql_num_rows($result);
if($count > 0) {
	
		$result1 = mysql_query("SELECT * FROM student WHERE idnumber = '$idnumber'");
		$count1=mysql_num_rows($result1);
		if($count1  > 0) {
		while($row1 = mysql_fetch_array($result1))
		{
			$name = $row1["fname"].' '.$row1['lname'];
			$username = $row1["idnumber"];
			$address = $row1["course"];
			$contact = $row1["yearlevel"];
			$bday = $row1["semester"];
		}
		}
		$result2 = mysql_query("SELECT * FROM teacher WHERE idnumber = '$idnumber'");
		$count2=mysql_num_rows($result2);
		if($count2  > 0) {
		while($row2 = mysql_fetch_array($result2))
		{
			$name = $row2["fname"].' '.$row2['lname'];
			$username = $row2["idnumber"];
			$address = $row2["work"];
			$contact = $row2["gender"];
			$bday = $row2["bday"];
		}
		}
		// book
		
		$result3 = mysql_query("SELECT * FROM book WHERE id = '$book'");
		$count3=mysql_num_rows($result3);
		if($count3  > 0) {
		while($row3 = mysql_fetch_array($result3))
		{
			$bookname = $row3["name"];	
			$pages = $row3["pages"];
			$publisher = $row3["publisher"];
			$author = $row3["author"];
			$datepub = $row3["datepub"];
			$datepur = $row3["datepur"];
			$status = $row3["status"];
		}
		}
		
		
		$result4 = mysql_query("SELECT * FROM borrow ORDER BY ID DESC LIMIT 1");
		$count4=mysql_num_rows($result4);
		if($count4  > 0) {
		while($row4 = mysql_fetch_array($result4))
		{
			$trans = $row4["id"];	
			$trans = sprintf("%05d", $trans);
			
		}
		} else {
			$trans = '1';
			$trans = sprintf("%05d", $trans);
			
		}
		
} else {
	//echo '<script>alert("Student or Teacher not found");window.location="index.php"</script>';
	
}
}

$date = date('Y-m-d');
$d =  date('Y-m-d', strtotime($date. ' + 7 days'));

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
<h2>Borrow Book</h2>
<br>
			

<form action="borrowexec.php" method="POST">
<table style="width:90%" border="0">
		<tr>
		<td width="45%" valign="top">
	<h3>Book Information</h3>
	
	
	<table >
		<tr>
			<td width="30%">Transaction Number:</td>
			<td></td>
			<td width="75%"><input type="text" name="trans" class="form" required value="<?php echo $trans ?>" readonly></td>
		</tr>
		<tr>
			<td width="30%">Title:</td>
			<td></td>
			<td width="75%"><input type="text" name="name" class="form" required value="<?php echo $bookname ?>" readonly></td>
		</tr>
		<tr>
			<td width="20%">Number of Pages:</td>
			<td></td>
			<td width="75%"><input type="number" name="pages" class="form" required value="<?php echo $pages ?>" readonly></td>
		</tr>
		<tr>
			<td width="20%">Publisher:</td>
			<td></td>
			<td width="75%"><input type="text" name="publisher" class="form" required value="<?php echo $publisher ?>" readonly></td>
		</tr>
		<tr>
			<td width="20%">Author:</td>
			<td></td>
			<td width="75%"><input type="text" name="author" class="form" required value="<?php echo $author ?>" readonly></td>
		</tr>
		
	</table>
	
	</td>
	<td>
	&nbsp;
	&nbsp;
	</td>
	<td valign="top" width="50%">
	<h3>Borrower's Information</h3>
	<center>
	<table >
		<tr>
			<td width="30%">Student Name:</td>
			<td></td>
			<td width="75%"><input type="text" name="name" class="form" required readonly value="<?php echo $name ?>"></td>
		</tr>
		<tr>
			<td width="20%">Course:</td>
			<td></td>
			<td width="75%"><input type="text" name="bday" class="form" required readonly value="<?php echo $course ?>"></td>
		</tr>
		<?php
		$date = date('Y-m-d');
		$return1 = date('Y-m-d', strtotime($date. ' +1 day'));
		
		?>
		<tr>
			<td width="20%">Date Borrow:</td>
			<td></td>
			<td width="75%"><input type="date" name="borrow" class="form" required readonly value="<?php echo $date ?>"></td>
		</tr>
		<tr>
			<td width="20%">Date Return:</td>
			<td></td>
			<td width="75%"><input value="<?php echo $d ?>" type="date" name="return" class="form" required readonly></td>
		</tr>
		
	
	</table>
	</td>
	</tr>
	</table>
	</center>
	<input type="hidden" name="book1" value="<?php echo $book ?>">
	<input type="hidden" name="borrower" value="<?php echo $idnumber ?>">
	
	<input type="submit" value="Reserve Book" name="submit" class="btn" style="margin-left:60px;">
	</form>
                  
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