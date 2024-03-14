<div id="printme">
<?php
include('../connect.php');
$id =$_GET['id'];

	$result = mysql_query("SELECT * FROM modular_plan WHERE id = '$id'");
	while($row = mysql_fetch_array($result))
	{
		$title =$row['title'];
		$description = $row['description'];
		$date = $row['date'];
	}
?>
<h3><?php echo $title ?></h3>
<i><?php echo $date ?></i>
<hr style="width:500px">
<?php
echo $description
?>
</div>
<input type="button" value="Print" class="btn btn-primary" onclick="printDiv('printme')">
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>