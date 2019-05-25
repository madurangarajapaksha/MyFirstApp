<html>
<body bgcolor="FAEBD7">
<INPUT TYPE="button" VALUE="Back to previous page" onClick="history.go(-1);">
<?php
	include("DBConnection.php");
 
	$orderId=$_POST["orderId"];
	$supplierId=$_POST["supplierId"];
	$book_category=$_POST["book_category"];
	$numberOfbooks=$_POST["numberOfbooks"];
	$orderDate=$_POST["orderDate"];
	
 
	$query = "INSERT INTO order_handling (orderId,supplierId ,book_category ,numberOfbooks , orderDate)
		values ('$orderId', '$supplierId', '$book_category', '$numberOfbooks', '$orderDate')";
	$result = mysqli_query($db,$query);
	
?> 
Successful !
</body>
</html>