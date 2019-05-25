<html>
<body bgcolor="FAEBD7">
<INPUT TYPE="button" VALUE="Back to previous page" onClick="history.go(-1);">
<?php
	include("DBConnection.php");
 
	$orderId=$_POST["orderId"];
	$supplierId=$_POST["supplierId"];
	$book_category=$_POST["book_category"];
	$numberOfbooks=$_POST["numberOfbooks"];
	$OrderDate=$_POST["OrderDate"];
	
 
	$query = "INSERT INTO supplier_add (orderId,supplierId ,book_category ,numberOfbooks , OrderDate)
		values ('$orderId', '$supplierId', '$book_category', '$numberOfbooks', '$OrderDate')";
	$result = mysqli_query($db,$query);
	
?> 
Successful !
</body>
</html>