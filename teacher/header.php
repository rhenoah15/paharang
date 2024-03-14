<?php
include('../auth.php');
$id=$_SESSION['SESS_MEMBER_ID'];
include('../connect.php');
$result2 = mysql_query("SELECT * FROM login WHERE id='$id'");
while($row2 = mysql_fetch_array($result2))
	{
		$idnumber = $row2['username'];
	}
	

$result2a = mysql_query("SELECT * FROM teacher WHERE idnumber='$idnumber'");
while($row2a = mysql_fetch_array($result2a))
	{
		$g1 = $row2a['d1'];
		$g2 = $row2a['d2'];
		$idnumber1 = $row2a['idnumber'];
		$type1 = $row2a['type'];
		echo '<script>console.log("'.$type1.'")</script>';
	}
 $timestamp = date("Y-m-d H:i:s");



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Paharang Integrated School</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Default" disabled href="/css/app-34c216fc2822b17a4662e494f89c8c00.css?vsn=d">
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome" href="/css/app-wa-cf1015c0f0d2a982155aa9e63e6ff6d4.css?vsn=d" >
      <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css" >
      <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/sharp-solid.css">
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!--<link rel="stylesheet" href="css/bootstrap.min.css"/> -->
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/css/demo/style.css">
  <!-- End layout styles -->

</head>
        <script src="js/jq.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <body >	
		
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
  jQuery(document).ready(function($) {
  
	 $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
	
    })
	</script>

	  <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
      <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.1/css/jquery.dataTables.css">
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.1/js/jquery.dataTables.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/1.0.0/css/dataTables.responsive.css">
      <script type="text/javascript" src="https://cdn.datatables.net/responsive/1.0.0/js/dataTables.responsive.js"></script>
<style>

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left:220px;
  top: 0;
  width: 90%; /* Full width */
  
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s;
  height:700px;
  overflow-y:scroll;
  
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}


.button {
  width: 100%;
  background-color: #343a40;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
	
.btn {
  background-color: #343a40;
  color: white;
  margin: 8px 0;
  border: none;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}


.dropdown {
  position: absolute;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  margin-left:-70px;
  background-color: #f1f1f1;
  min-width: 160px;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
  display: block;
}

.btn:hover, .dropdown:hover .btn {
  background-color: #0b7dda;
}

input[type=file] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 80%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}

.form {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.form :active{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}



	</style>
<script src="../assets/js/preloader.js"></script> 
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open" style="background:#004BAA">
      <div class="mdc-drawer__header">
        <a href="index.php" class="brand-logo">
          <center><img src="../img/logo.png" alt="logo" style="width:100px"></center>
        </a>
      </div>
      <div class="mdc-drawer__content">
        <div class="user-info">
          <p class="name">Faculty Account</p>
          <!-- <p class="email">admin@admin.com</p> -->
        </div>
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
		  
		  <!-- start -->
		  
									<div class="mdc-list-item mdc-drawer-item">
									<li>
										<a class="mdc-drawer-link" href="profile.php">
											<i class="fa fa-user" aria-hidden="true"></i>
											<span>&nbsp; Profile</span>
										</a>
									</li>
									</div>
									<div class="mdc-list-item mdc-drawer-item">
									<li>
										<a class="mdc-drawer-link" href="index.php">
											<i class="fa fa-table" aria-hidden="true"></i>
											<span>&nbsp; Schedule</span>
										</a>
									</li>
									</div>
									<div class="mdc-list-item mdc-drawer-item">
									<li>
										<a class="mdc-drawer-link" href="announcement.php">
											<i class="fa fa-calendar" aria-hidden="true"></i>
											<span>&nbsp; Announcement</span>
										</a>
									</li>
									</div>
									<div class="mdc-list-item mdc-drawer-item">
									<li>
										<a  class="mdc-drawer-link" href="calendar.php">
											<i class="fa  fa-calendar" aria-hidden="true"></i>
											<span>&nbsp;  School Calendar</span>
										</a>
									</li>
									</div>
									<div class="mdc-list-item mdc-drawer-item">
									<li>
										<a class="mdc-drawer-link" href="studentlist.php">
											<i class="fa fa-calendar" aria-hidden="true"></i>
											<span>&nbsp; Student List</span>
										</a>
									</li>
									<li>
										<a class="mdc-drawer-link" href="advising.php">
											<i class="fa fa-calendar" aria-hidden="true"></i>
											<span>&nbsp; Advising Class</span>
										</a>
									</li>
									</div>
									<?php
									if($type1 == 'Junior High School') {
									?>
              <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menu1">
               <i class="fa fa-list-alt" aria-hidden="true"></i>
					<span>&nbsp; Submit Grade</span>
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menu1">
                <nav class="mdc-list mdc-drawer-submenu">
                  
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="listsubject.php?id=First Quarter">
                      First Quarter
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="listsubject.php?id=Second Quarter">
                      Second Quarter
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="listsubject.php?id=Third Quarter">
                      Third Quarter
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="listsubject.php?id=Fourth Quarter">
                      Fourth Quarter
                    </a>
                  </div>
                  
                </nav>
              </div>
            </div>
						<?php
									} else {
				?>						
						   <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menu1a">
               <i class="fa fa-list-alt" aria-hidden="true"></i>
					<span>&nbsp; Submit Grade</span>
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menu1a" style="margin-left:-40px;font-size:15px">
                <nav class="mdc-list mdc-drawer-submenu">
                  
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="listsubject.php?id=First Semester&quarter=First Quarter" style="font-size:12px">
                      1st Semester 1st Quarter
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="listsubject.php?id=First Semester&quarter=Second Quarter" style="font-size:12px">
                      1st Semester 2nd Quarter
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="listsubject.php?id=Second Semester&quarter=First Quarter" style="font-size:12px">
                      2nd Semester 1st Quarter
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="listsubject.php?id=Second Semester&quarter=Second Quarter" style="font-size:12px">
                      2nd Semester 2nd Quarter
                    </a>
                  </div>
                  
                </nav>
              </div>
            </div>			
									
									
									<?php
									}
									?>
									<!--
									<div class="mdc-list-item mdc-drawer-item">
									<li>
										<a class="mdc-drawer-link" href="editgrades.php" rel="facebox">
											<i class="fa fa-send (alias)" aria-hidden="true"></i>
											<span>&nbsp; Update Grades</span>
										</a>
									</li>
									</div>
									-->
									<div class="mdc-list-item mdc-drawer-item">
									<li>
										<a class="mdc-drawer-link" href="record.php">
											<i class="fa-solid fa-record-vinyl"></i>
											<span>&nbsp; Class Records</span>
										</a>
									</li>
									</div>
									
              <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menu1c">
               <i class="fa-regular fa-file-chart-column"></i>
					&nbsp; Generated Report  &nbsp;
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menu1c">
                <nav class="mdc-list mdc-drawer-submenu">
                  
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="action_plan.php">
                      Action Plan
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="accomplishment_plan.php">
                      Accomplishment
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="modular.php">
                      Modular
                    </a>
                  </div>
                  
                </nav>
              </div>
            </div>
									<!--
									<div class="mdc-list-item mdc-drawer-item">
									<li>
										<a class="mdc-drawer-link" href="lesson.php">
											<i class="fa-solid fa-person-chalkboard"></i>
											<span>&nbsp; Lesson Plan</span>
										</a>
									</li>
									</div>
									-->
								
									<div class="mdc-list-item mdc-drawer-item">
									<li>
										<a  class="mdc-drawer-link" href="account.php">
											<i class="fa  fa-gear" aria-hidden="true"></i>
											<span>&nbsp;  Account Settings</span>
										</a>
									</li>
									</div>
									<div class="mdc-list-item mdc-drawer-item">
									<li>
										<a class="mdc-drawer-link" href="../logout.php">
											<i class="fa-solid fa-right-from-bracket"></i>
											<span>&nbsp; Logout</span>
										</a>
									</li>
		  
		 
			</div>
			<style>
			.notification {
  
  color: white;
  text-decoration: none;
  padding: 10px 16px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}


.notification .badge {
  position: absolute;
  top: -10px;
  right: 0px;
  padding: 5px 10px;
  
  
  background: #ADD8E6;
  color: #000;
}
			</style>
		
          </nav>
        </div>
        <div class="profile-actions">
          
          
<script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("customers1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}
</script>
          
        </div>
       
      </div>
    </aside>
	
	