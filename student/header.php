<?php
include('../auth.php');
$id=$_SESSION['SESS_MEMBER_ID'];
include('../connect.php');
$result2 = mysql_query("SELECT * FROM login WHERE id='$id'");
while($row2 = mysql_fetch_array($result2))
	{
		$username = $row2['username'];
		$name = $row2['fname'].' '.$row2['lname'].' '.$row2['ext'];
		$course = $row2['course'];
		$contact = $row2['contact'];
		$address = $row2['address'];
	}
	
$result = mysql_query("SELECT * FROM seniorstudents WHERE idnumber='$username'");
$counta=mysql_num_rows($result);
if($counta>0) {
	$type1 = 'Senior High School';
		while($row = mysql_fetch_array($result))
			{
				$fname = $row['fname']; 
				$mname = $row['mname']; 
				$stat = $row['status']; 
				$lname = $row['lname'];
				$section = $row['strand'];
				$course = $row['grade'];
				$name = $fname.' '.$mname.' '.$lname;
				$department = 'Senior High School';
			}
}
 $timestamp = date("Y-m-d H:i:s");
	mysql_query("UPDATE login SET timestamp = '$timestamp' WHERE username = '$username'");
	
$result2c = mysql_query("SELECT * FROM ay");
while($row2c = mysql_fetch_array($result2c))
	{
		$ay = $row2c['ay1'];
		$semester = $row2c['semester'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Paharang Integrated School | STUDENT</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/css/demo/style.css">
  
  <!-- End layout styles -->
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Default" disabled href="/css/app-34c216fc2822b17a4662e494f89c8c00.css?vsn=d">
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome" href="/css/app-wa-cf1015c0f0d2a982155aa9e63e6ff6d4.css?vsn=d" >
      <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css" >
      <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/sharp-solid.css">

	  <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
      <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.1/css/jquery.dataTables.css">
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.1/js/jquery.dataTables.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/1.0.0/css/dataTables.responsive.css">
      <script type="text/javascript" src="https://cdn.datatables.net/responsive/1.0.0/js/dataTables.responsive.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-solid.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-regular.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-light.css">
</head>

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
<body>
<style>

.notification {
  
  color: white;
  text-decoration: none;
  padding: 10px 16px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}


.notification .badge1 {
  position: absolute;
  top: -10px;
  right: 0px;
  padding: 5px 10px;
  
  
  background: #A2A2A2;
  color: #000;
}
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
@media only screen and (max-width: 600px) {
 .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left:0px;
  top: 0;
  width: 100%; /* Full width */
  
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
 
 
}

/* Modal Content */
.modal-content {
	width:90%;
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
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

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 10px 5px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}

.btn {
  background-color: #2196F3;
  color: white;
  font-size: 16px;
  border: none;
  outline: none;
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
          <center><p class="name"><?php echo $name ?>
		  <br>
		  Student Portal
		  </p></center>
          <!-- <p class="email">admin@admin.com</p> -->
        </div>
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
         
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link notification" href="profile.php">
                <i class="fa-solid fa-address-card"></i>&nbsp;
                Profile
              </a>
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
              <a class="mdc-drawer-link notification" href="shedule.php">
                <i class="fa-solid fa-clock"></i>&nbsp;
                Class Schedule
              </a>
            </div>
						   <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="grades.php?id=First Semester" data-toggle="expansionPanel" data-target="ui-sub-menu1">
               <i class="fa fa-list-alt" aria-hidden="true"></i>
					<span>&nbsp; Grades</span>
                <!-- <i class="mdc-drawer-arrow material-icons">chevron_right</i> -->
              </a>
			  <!--
              <div class="mdc-expansion-panel" id="ui-sub-menu1">
                <nav class="mdc-list mdc-drawer-submenu">
                  
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="grades.php?id=First Semester">
                      First Semester
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="grades.php?id=Second Semester">
                      Second Semester
                    </a>
                  </div>
                  
                </nav>
              </div>
			  -->
            </div>			
									
									
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menuc">
               <i class="fa fa-list-alt" aria-hidden="true"></i>
					&nbsp;Subject List
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menuc">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                  </div> 
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="subjectlist.php?sem=First Semester">
                      First Semester
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="subjectlist.php?sem=Second Semester">
                      Second Semester
                    </a>
                  </div>
                  
                </nav>
              </div>
            </div>
			<!--
            <div class="mdc-list-item mdc-drawer-item">
									<li>
										<a class="mdc-drawer-link" href="report.php">
											<i class="fa fa-list" aria-hidden="true"></i>
											<span>&nbsp; Report</span>
										</a>
									</li>
									</div>
									<!--
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link notification" href="payment.php">
                <i class="fa-sharp fa-regular fa-money-bill"></i>&nbsp;
                Transaction
              </a>
            </div>
			-->
            
            <div class="mdc-list-item mdc-drawer-item">
			<a class="mdc-drawer-link notification" href="../logout.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">inbox</i>
                Logout
              </a>
            </div>
            
          </nav>
        </div>
        <div class="profile-actions">
          
          
          
        </div>
       
      </div>
    </aside>