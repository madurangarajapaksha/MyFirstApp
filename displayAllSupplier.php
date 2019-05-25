<html>
<body bgcolor="FAEBD7">
<INPUT TYPE="button" VALUE="Back to previous page" onClick="history.go(-1);">
<br>
<form>
<?php
	include("DBConnection.php");
	$query = "select * from supplier_add";
	$result = mysqli_query($db, $query);
	
	echo "<table border='2' align='center' cellpadding='5' cellspacing = '5'>
	<tr>
		<th>supplierId</th> 
		<th>supplierName</th>
		<th>supplierAddress</th>
		<th>supplierContact</th>
		<th>supplierEmail</th>
		<th>regDate</th>
	</tr>";

	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>" . $row['supplierId'] . "</td>";
		echo "<td>" . $row['supplierName'] . "</td>";
		echo "<td>" . $row['supplierAddress'] . "</td>";
		echo "<td>" . $row['supplierContact'] . "</td>";
		echo "<td>" . $row['supplierEmail'] . "</td>";
		echo "<td>" . $row['regDate'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";

	mysqli_close($db);
?>
</form>
</body>
</html>
