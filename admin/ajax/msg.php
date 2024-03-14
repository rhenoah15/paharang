	<ul id="chat">
	<?php
include('../../../auth.php');
$id=$_SESSION['SESS_MEMBER_ID'];
include('../../../connect.php');
$result2 = mysql_query("SELECT * FROM login WHERE id='$id'");
while($row2 = mysql_fetch_array($result2))
	{
		$username = $row2['username'];
		$name = $row2['fname'].' '.$row2['lname'];
		$course = $row2['course'];
		$contact = $row2['contact'];
		$address = $row2['address'];
	}
	
?>
                          <?php
     include('../../../connection.php');
                        $sen = $username;
                        $rec = $_SESSION['rece'];
                        $i = 0;
                    			    $query = mysqli_query($con,"select * from msg WHERE user2 = '$rec' AND user = '$username' OR user2 = '$username' AND user = '$rec' order by 1 desc ");
								    if(mysqli_num_rows($query)>0){
                                    while($data = mysqli_fetch_array($query)){
										$user = $data['user'];
										$file = $data['file'];
										if($file == '') {
											
										}else {
											$file = '<a href="../../uploads/'.$data['file'].'" target="blank">View attachment</a>';
										}
										$result2 = mysql_query("SELECT * FROM login WHERE username='$user'");
										while($row2 = mysql_fetch_array($result2))
										{
											$type =$row2['type'];
											if($user == $username) {
											if($type == 'student') {
												
										$u = ucwords($row2['fname'].' '.$row2['lname']);
										
                                        $id = $data['id'];
                                        $m = $data['msg'];
										$date = $data['date'];
										$time = $data['time'];
										$time = date('d:i A',strtotime($time));
										$date = date('F d, Y',strtotime($date));
										?>
										<li class="me">
				<div class="entete">
					<h3><?php echo $time ?>, <?php echo $date ?></h3>
					<h2><?php echo $u ?></h2>
					<span class="status blue"></span>
				</div>
				<div class="message">
					<?php echo $m ?>
					<br>
					<?php echo $file ?>
				</div>
			</li>
									<?php
										
											} else {
										$u = ucwords($row2['name']);
										
                                       $id = $data['id'];
                                        $m = $data['msg'];
										$date = $data['date'];
										$time = $data['time'];
										$time = date('d:i A',strtotime($time));
										$date = date('F d, Y',strtotime($date));
										?>
																<li class="me">
				<div class="entete">
					<span class="status green"></span>
					<h3><?php echo $time ?>, <?php echo $date ?></h3>
					<h2><?php echo $u ?></h2>
				</div>
				<div class="message">
				<?php echo $m ?>
					<br>
					<?php echo $file ?>
				</div>
			</li>
					
										<?php
											}	
												
											} else {
											if($type == 'student') {
												
										$u = ucwords($row2['fname'].' '.$row2['lname']);
										
                                        $id = $data['id'];
                                        $m = $data['msg'];
										$date = $data['date'];
										$time = $data['time'];
										$time = date('d:i A',strtotime($time));
										$date = date('F d, Y',strtotime($date));
										?>
										<li class="you">
				<div class="entete">
					<h3><?php echo $time ?>, <?php echo $date ?></h3>
					<h2><?php echo $u ?></h2>
					<span class="status blue"></span>
				</div>
				<div class="message">
					<?php echo $m ?>
					<br>
					<?php echo $file ?>
				</div>
			</li>
									<?php
										
											} else {
										$u = ucwords($row2['name']);
										
                                       $id = $data['id'];
                                        $m = $data['msg'];
										$date = $data['date'];
										$time = $data['time'];
										$time = date('d:i A',strtotime($time));
										$date = date('F d, Y',strtotime($date));
										?>
																<li class="you">
				<div class="entete">
					<span class="status green"></span>
					<h3><?php echo $time ?>, <?php echo $date ?></h3>
					<h2><?php echo $u ?></h2>
				</div>
				<div class="message">
				<?php echo $m ?>
					<br>
					<?php echo $file ?>
				</div>
			</li>
					
										<?php
											}
											}
										}
                                        $i++;
                                        ?>
<!--
                                <a style="text-decoration:none; color:#222;" id="<?php echo $i ?>" value="<?php echo $id ?>">
                                <div class="col-sm-10 details" style="text-align:; padding-left:30px">
                                   <h4 title=""><?php echo $u ?></h4> 
                                    <p><?php echo $m ?></p><hr>
                                </div>
                                       </a>
-->
                                           
                                        <script>	
                                    $("#<?php echo $i ?>").click(function(){
                                        var id = $("#<?php echo $i ?>").attr("value");
				                        if(confirm('Do you want to delete ?')==true){
                                            $.get("ajax/del.php",{id:id},function(data){
                                                //$("#res").html(data);
                                            });
                                        }
                                    });
                            </script>

                                




<?php } }else{ ?>
   <h3 style="color:red;">No Messages...</3>
 




<?php } ?>
                           
						   </ul>