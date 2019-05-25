<html>
<body>
<INPUT TYPE="button" VALUE="Back to previous page" onClick="history.go(-1);">
<br>
<h2> Delete Supplier</h2>

<body bgcolor="FAEBD7">
<table border=2>
	<tr>
		<th>Supplier ID</th>
		<th>Supplier Name</th>
		<th>Supplier Address</th>
		<th>Supplier Contact</th>
		<th>Supplier Email</th>
		<th>Supplier RegDate</th>
	</tr>
	<?php
			include("DBConnection.php");
			
			$sql = "select * from supplier_add";
			$records = mysqli_query($db, $sql) or die(mysqli_error());
			
			while($row = mysqli_fetch_array($records))
			{
				echo "<tr>";
				echo "<td>".$row['supplierId']."</td>";
				echo "<td>".$row['supplierName']."</td>";
				echo "<td>".$row['supplierAddress']."</td>";
				echo "<td>".$row['supplierContact']."</td>";
				echo "<td>".$row['supplierEmail']."</td>";
				echo "<td>".$row['regDate']."</td>";
				echo "<td><a href = deleteSupplierphp.php?supplierId=".$row['supplierId'].">Delete</a></td>";
			}
	?>
</table>
	<br>
</body>
</html>