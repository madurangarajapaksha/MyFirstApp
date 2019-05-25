<html>
<body bgcolor="FAEBD7">
<?php
	include("DBConnection.php");
	$sql = "delete from supplier_add where supplierId = '$_GET[supplierId]'";
	
	if(mysqli_query($db, $sql))
		header ("refresh:1; url = deleteSupplier.php");
	else
		echo "Not Deleted";
?>
</body>
</html>