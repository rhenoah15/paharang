<?php
include('../auth.php');
$id=$_SESSION['SESS_MEMBER_ID'];
include('../connect.php');
$result2 = mysql_query("SELECT * FROM login WHERE id='$id'");
while($row2 = mysql_fetch_array($result2))
	{
		$username = $row2['username'];
		$name = $row2['name'];
		$course = $row2['course'];
		$contact = $row2['contact'];
		$address = $row2['address'];
		$email = $row2['email'];
	}

 $timestamp = date("Y-m-d H:i:s");
	mysql_query("UPDATE login SET timestamp = '$timestamp' WHERE username = '$username'");	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SASMS | Faculty</title>
  <!-- plugins:css -->
  
  <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
      <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.1/css/jquery.dataTables.css">
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.1/js/jquery.dataTables.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/1.0.0/css/dataTables.responsive.css">
      <script type="text/javascript" src="https://cdn.datatables.net/responsive/1.0.0/js/dataTables.responsive.js"></script>
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Default" disabled href="/css/app-34c216fc2822b17a4662e494f89c8c00.css?vsn=d">
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome" href="/css/app-wa-cf1015c0f0d2a982155aa9e63e6ff6d4.css?vsn=d" >
      <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css" >
      <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/sharp-solid.css">
  <!--<link rel="stylesheet" href="css/bootstrap.min.css"/> -->
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/css/demo/style.css">
  <!-- End layout styles -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
		
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
</head>

        <script src="js/jq.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <body>
		
	  <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
      <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.1/css/jquery.dataTables.css">
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.1/js/jquery.dataTables.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/1.0.0/css/dataTables.responsive.css">
      <script type="text/javascript" src="https://cdn.datatables.net/responsive/1.0.0/js/dataTables.responsive.js"></script>
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
  
  
  background: #A2A2A2;
  color: #000;
}
input[type=submit]:hover {
  background-color: #45a049;
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

input[type=text],textarea {
  
padding: 5px !important;
}

input[type=submit],.button {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

	
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 5px 5px;
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
  padding: 16px;
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

</style>
<script src="../assets/js/preloader.js"></script> 
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open" style="background:#343a40">
      <div class="mdc-drawer__header">
        <a href="index.php" class="brand-logo">
          <center><img src="../img/logo.png" alt="logo" style="width:100px"></center>
        </a>
      </div>
      <div class="mdc-drawer__content">
        <div class="user-info">
          <center><p style="text-align:center" class="name"><?php echo $name ?><br>Teacher's Portal</p></center>
          <!-- <p class="email">admin@admin.com</p> -->
        </div>
    
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="index.php">
                <i class="fa-solid fa-gauge"></i>&nbsp;
                Dashboard
              </a>
            </div>
         
           
						
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link notification" href="appointments.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
                Add Report Card
              </a>
            </div>

            
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="student.php">
                <i class="fa-solid fa-users"></i> &nbsp;
                View Enrolled Students
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="calendar.php">
                <i class="fa-solid fa-calendar-days"></i>&nbsp;
                View Schedule
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="report.php">
                <i class="fa-solid fa-file"></i>&nbsp;
                Generate Report
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="../logout.php">
                <i class="fa-solid fa-arrow-up-left-from-circle"></i>&nbsp;
                Logout
              </a>
            </div>
            	
          </nav>
        </div>
        <div class="profile-actions">
          
          
          
        </div>
       
      </div>
    </aside>