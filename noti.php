<html>
<body bgcolor="FAEBD7">
<INPUT TYPE="button" VALUE="Back to previous page" onClick="history.go(-1);">
<br>
<center><h2> Notification  </h2>
<form>
<?php
	include("DBConnection.php");
	$query = "select * from  supplier_details";
	$result = mysqli_query($db, $query);

	echo "<table border='2' align='center' cellpadding='5' cellspacing = '5'>
	<tr>
		<th>supplier ID</th>
		<th>supplier contact</th>
		<th>expences</th>
	</tr>";
	$count=0;
	foreach($result as $row)
	{
		$count=$count+1;
		echo '<tr>
				<td>'.$row['supplier ID'].'</td>
				<td>'.$row['supplier contact'].'</td>
				<td>'.$row['expences'].'</td>
				<td>
					<input type="checkbox" />
				</td>
				
			</tr>';
	}
	
?>
<th>
	<td colspan="3"></td>
	<td><button type="button">Select All</button>
	</td>
	</th>

</center>
</form>
</body>
</html>
