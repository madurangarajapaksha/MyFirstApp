<html>
<body bgcolor="FAEBD7">
<INPUT TYPE="button" VALUE="Back to previous page" onClick="history.go(-1);">
<br>
<table border="2" align="center" cellpadding="5" cellspacing="5">
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
	$set=$_REQUEST['search'];
	if($set)
	{
		$show="select * from supplier_add where supplierId ='$set'";
		$result = mysqli_query($db,$show);
		while($rows=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>";
			echo $rows ["supplierId"];
			echo "</td>";
			echo "<td>";
			echo $rows["supplierName"];
			echo "</td>";
			echo "<td>";
			echo $rows["supplierAddress"];
			echo "</td>";
			echo "<td>";
			echo $rows["supplierContact"];
			echo "</td>";
			echo "<td>";
			echo $rows["supplierEmail"];
			echo "</td>";
			echo "<td>";
			echo $rows["regDate"];
			echo "</td>";
			echo "</tr>";
		}
	}else{
		echo "Please Enter Supplier No";
	}

?>
</table>
</body>
</html>