

   <!--start-->
	<table cellpadding="1" cellspacing="1" id="customers">
			<tr>
				<th style="border-left: 1px solid #C1DAD7" width="60%">Subject</th>
				<th><center>Action</th>
			</tr>
			<?php
			
				include('../connect.php');
	$id=$_GET['id'];
	$results = mysql_query("SELECT * FROM teacher WHERE id='$id'");
			while($rows = mysql_fetch_array($results))
				{
				$idnum = $rows['idnumber'];
				}
			$result = mysql_query("SELECT * FROM teachersubject WHERE teacher='$id'");
			while($row = mysql_fetch_array($result))
				{
					echo '<tr>';
					echo '<td style="border-left: 1px solid #C1DAD7"><div align="left">'.$row['subject'].'</div></td>';
					echo '<td><div align="center"><a href="class.php?subject='.$row['subject'].'&id='.$row['id'].'">View Class Record</a></a></div></td>';
					echo '</tr>';
				}
			?>
		</table>
											<br>
									<br>
									
								</center>
							</div>
						</section>
						
						
					<!-- end: page -->
				</section>
			</div>


		</section>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/select2/select2.js"></script>
		<script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="assets/javascripts/tables/examples.datatables.default.js"></script>
		<script src="assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
		<script src="assets/javascripts/tables/examples.datatables.tabletools.js"></script>
	</body>
</html>