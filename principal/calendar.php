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
                    <h6 class="card-title card-padding pb-0">School Calendar</h6>
 
                  <div class="table-responsive">
				                  <div class="mdc-card">


<span id="message" style="color:#000;padding:10px;font-size:15px;">
	   </span>

 <!-- start calendar -->
 <?php 
	$currentData = date('Y-m-d');
	?>

	<!-- Calendar Container -->
	<div id='calendar-container'>
    	<div id='calendar'></div>
  	</div>

  	<!-- jQuery -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  	<!-- Fullcalendar  -->
	<script type="text/javascript" src="fullcalendar/dist/index.global.min.js"></script>

	<!-- Sweetalert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script>
	document.addEventListener('DOMContentLoaded', function() {
	    var calendarEl = document.getElementById('calendar');

	    var calendar = new FullCalendar.Calendar(calendarEl, {
	      	initialDate: '<?= $currentData ?>',
	      	height: '600px',
	      	selectable: true,
	      	editable: true,
	      	dayMaxEvents: true, // allow "more" link when too many events
	      	events: 'fetchevents.php', // Fetch all events
	      	select: function(arg) { // Create Event
	        	
	        	// Alert box to add event
		        Swal.fire({
				  	title: 'Add New Event',
					showCancelButton: true,
					confirmButtonText: 'Create',
				  	html:
				    '<input id="eventtitle" class="swal2-input" placeholder="Event name" style="width: 84%;"  >' +
				    '<textarea id="eventdescription" class="swal2-input" placeholder="Event description" style="width: 84%; height: 100px;"></textarea>',
				  	focusConfirm: false,
				  	preConfirm: () => {
					    return [
					      	document.getElementById('eventtitle').value,
					      	document.getElementById('eventdescription').value
					    ]
				  	}
				}).then((result) => {
				  
				  	if (result.isConfirmed) {
				    	
				    	var title = result.value[0].trim();
				    	var description = result.value[1].trim();
				    	var start_date = arg.startStr;
				    	var end_date = arg.endStr;

				    	if(title != '' && description != ''){

				    		// AJAX - Add event
				    		$.ajax({
						  		url: 'ajaxfile.php',
						  		type: 'post',
						  		data: {request: 'addEvent',title: title,description: description,start_date: start_date,end_date: end_date},
						  		dataType: 'json',
						  		success: function(response){

						  			if(response.status == 1){

						  				// Add event
						  				calendar.addEvent({
								            eventid: response.eventid,
								            title: title,
								            description: description,
								            start: arg.start,
								            end: arg.end,
								            allDay: arg.allDay
							          	}) 

							          	// Alert message
						  				Swal.fire(response.message,'','success');

						  			}else{
						  				// Alert message
						  				Swal.fire(response.message,'','error');
						  			}
						  			
						  		}
						  	});
				    	}
				    	
				  	}
				})

	        	calendar.unselect()
	      	},
	      	eventDrop: function (event, delta) { // Move event

	      		// Event details
	      		var eventid = event.event.extendedProps.eventid;
	      		var newStart_date = event.event.startStr;
	      		var newEnd_date = event.event.endStr;
	           	
	           	// AJAX request
	           	$.ajax({
					url: 'ajaxfile.php',
					type: 'post',
					data: {request: 'moveEvent',eventid: eventid,start_date: newStart_date, end_date: newEnd_date},
					dataType: 'json',
					async: false,
					success: function(response){

						console.log(response);
									
					}
				}); 

	        },
	      	eventClick: function(arg) { // Edit/Delete event
	      		
	      		// Event details
	      		var eventid = arg.event._def.extendedProps.eventid;
	      		var description = arg.event._def.extendedProps.description;
	      		var title = arg.event._def.title;

	      		// Alert box to edit and delete event
	      		Swal.fire({
				  	title: 'Edit Event',
				  	showDenyButton: true,
					showCancelButton: true,
					confirmButtonText: 'Update',
					denyButtonText: 'Delete',
				  	html:
				    '<input id="eventtitle" class="swal2-input" placeholder="Event name" style="width: 84%;" value="'+ title +'" >' +
				    '<textarea id="eventdescription" class="swal2-input" placeholder="Event description" style="width: 84%; height: 100px;">' + description + '</textarea>',
				  	focusConfirm: false,
				  	preConfirm: () => {
					    return [
					      	document.getElementById('eventtitle').value,
					      	document.getElementById('eventdescription').value
					    ]
				  	}
				}).then((result) => {
				  
				  	if (result.isConfirmed) { // Update
				    	
				    	var newTitle = result.value[0].trim();
				    	var newDescription = result.value[1].trim();

				    	if(newTitle != '' && newDescription != ''){

				    		// AJAX - Edit event
				    		$.ajax({
								url: 'ajaxfile.php',
								type: 'post',
								data: {request: 'editEvent',eventid: eventid,title: newTitle, description: newDescription},
								dataType: 'json',
								async: false,
								success: function(response){

									if(response.status == 1){
										
										// Refetch all events
										calendar.refetchEvents();

										// Alert message
										Swal.fire(response.message, '', 'success');
									}else{

										// Alert message
										Swal.fire(response.message, '', 'error');
									}
										
								}
							}); 
				    	}
				    	
				  	} else if (result.isDenied) { // Delete

				  		// AJAX - Delete Event
				    	$.ajax({
							url: 'ajaxfile.php',
							type: 'post',
							data: {request: 'deleteEvent',eventid: eventid},
							dataType: 'json',
							async: false,
							success: function(response){

								if(response.status == 1){

									// Remove event from Calendar
									arg.event.remove();

									// Alert message
									Swal.fire(response.message, '', 'success');
								}else{

									// Alert message
									Swal.fire(response.message, '', 'error');
								}
									
							}
						}); 
				  	}
				})
	      		
	      	}
	    });

	    calendar.render();
	});

	</script>
 <!-- end calendar -->

					
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
	<h3>Enter Event Information</h6>
    <form action="eventexec.php" method="POST" >
	
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" name="title">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Event Name</label>
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
					  <input type="submit" name="submit" value="Add Event"  class="mdc-button mdc-button--raised filled-button--success" >
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