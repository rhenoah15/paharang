<?php
include('../connect.php');
$id = $_GET['id'];
$result = mysql_query("SELECT * FROM book WHERE id = '$id'");
		while($row = mysql_fetch_array($result))
		{
			$name = $row['name'];
			$pages = $row['pages'];
			$publisher = $row['publisher'];
			$author = $row['author'];
			$datepub = $row['datepub'];
			$datepur = $row['datepur'];
			$call = $row['call1'];
			$access = $row['access'];
		
		
		}

?>
<style>
		
.email{
  background:#ecf0f1;
  border: #ccc 1px solid;
  border-bottom: #ccc 2px solid;
  padding: 8px;
  width:90%;
  color:#000;
  margin-top:10px;
  font-size:1em;
  border-radius:4px;
}
</style>
<center>
<h2>Book Information</h2>
<hr>
	<table style="min-width:500px;">
	<!--
		<tr>
			<td width="30%">Call ID:</td>
			<td></td>
			<td width="75%"><input type="text" name="name" class="email" required value="<?php echo $call ?>" readonly></td>
		</tr>
		<tr>
			<td width="30%">Accession Number:</td>
			<td></td>
			<td width="75%"><input type="text" name="name" class="email" required value="<?php echo $access ?>" readonly></td>
		</tr>
		-->
		<tr>
			<td width="30%">Title:</td>
			<td></td>
			<td width="75%"><input type="text" name="name" class="email" required value="<?php echo $name ?>" readonly></td>
		</tr>
		<tr>
			<td width="20%">Number of Pages:</td>
			<td></td>
			<td width="75%"><input type="number" name="pages" class="email" required value="<?php echo $pages ?>" readonly></td>
		</tr>
		<tr>
			<td width="20%">Publisher:</td>
			<td></td>
			<td width="75%"><input type="text" name="publisher" class="email" required value="<?php echo $publisher ?>" readonly></td>
		</tr>
		<tr>
			<td width="20%">Author:</td>
			<td></td>
			<td width="75%"><input type="text" name="author" class="email" required value="<?php echo $author ?>" readonly></td>
		</tr>
		<tr>
			<td width="20%">Date Published:</td>
			<td></td>
			<td width="75%"><input type="text" name="datepub" class="email" required value="<?php echo $datepub ?>" readonly></td>
		</tr>
		<tr>
			<td width="20%">Date Purchased:</td>
			<td></td>
			<td width="75%"><input type="text" name="datepur" class="email" required value="<?php echo $datepur ?>" readonly</td>
		</tr>		
	
	</table>