<?php
include('../auth.php');
$id=$_SESSION['SESS_MEMBER_ID'];
include('../connect.php');
$result2 = mysql_query("SELECT * FROM login WHERE id='$id'");
while($row2 = mysql_fetch_array($result2))
	{
		$username = $row2['username'];
	}
 $timestamp = date("Y-m-d H:i:s");



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Paharang Integrated School - Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Default" disabled href="/css/app-34c216fc2822b17a4662e494f89c8c00.css?vsn=d">
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome" href="/css/app-wa-cf1015c0f0d2a982155aa9e63e6ff6d4.css?vsn=d" >
      <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css" >
      <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/sharp-solid.css">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

<script >
	(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
			var x = $('#data-table tbody tr:visible').length;
			document.getElementById("box").innerHTML = 'Number of Prisoner: '+x;
					
				});
			});
			
			
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
			
			
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
			
		};
		
			
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			
			LightTableFilter.init();
			
		}
	});
})(document);
//# sourceURL=pen.js
</script>	
  <!--<link rel="stylesheet" href="css/bootstrap.min.css"/> -->
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/css/demo/style.css">
  <!-- End layout styles -->
<style>


input[type=text],input[type=number], .select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

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
			</style>
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
.button {
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

input[type=file] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
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
         <center><p style="text-align:center" class="name">Principal Account</p></center>
          <!-- <p class="email">admin@admin.com</p> -->
        </div>
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="index.php">
               <i class="fa-solid fa-gauge"></i>&nbsp; Dashboard
              </a>
            </div>
			
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="announcement.php">
              <i class="fa-solid fa-calendar-days"></i>  &nbsp; Announcements
              </a>
            </div>
			
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="calendar.php">
              <i class="fa-light fa-calendar"></i> &nbsp; School Calendar
              </a>
            </div>
			  <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menu1">
               <i class="fa fa-users" aria-hidden="true"></i>
					&nbsp; Teacher  &nbsp;
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menu1">
                <nav class="mdc-list mdc-drawer-submenu">
                  
                  <div class="mdc-list-item mdc-drawer-item">
                    <!-- <a class="mdc-drawer-link" href="faculty1.php?id=Junior High School">
                      Junior High School
                    </a> -->
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="faculty1.php?id=Senior High School">
                      Senior High School
                    </a>
                  </div>
                  
                </nav>
              </div>
            </div>
           
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menu">
               <i class="fa fa-list-alt" aria-hidden="true"></i>
					&nbsp;Student List
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                 <!--   <a class="mdc-drawer-link" href="course1a.php?id=Junior High School">
                      Junior High School
                    </a> -->
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="course1b.php?id=Senior High School">
                      Senior High School
                    </a>
                  </div>
                  
                </nav>
              </div>
            </div>
			
			<!--
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="access.php">
              <i class="fa-duotone fa-universal-access"></i>  &nbsp; User Access
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menu3">
               <i class="fa-solid fa-money-bill"></i>
					&nbsp;Payment
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menu3">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="payment1.php?id=Junior High School">
                      Junior High School
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="payment2.php?id=Senior High School">
                      Senior High School
                    </a>
                  </div>
                  
                </nav>
              </div>
            </div>
            		
			-->				
            
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="../logout.php" onclick="return confirm('Are you sure you want to logout?')">
               <i class="fa-solid fa-right-from-bracket"></i>&nbsp; Logout
              </a>
            </div>
          </nav>
        </div>
        <div class="profile-actions">
          
          
          
        </div>
       
      </div>
    </aside>
	