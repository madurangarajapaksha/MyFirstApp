<!DOCTYPE HTML>
<html>
<body bgcolor="FAEBD7">
<INPUT TYPE="button" VALUE="Back to previous page" onClick="history.go(-1);">
<h2>Supplier Registration</h2>
<form action="addSupplierphp.php" method="post">
<table>
	<tr>
		<td>Supplier ID :</td>
		<td><input type="text" name="supplierId" size="50"></td>
	</tr>
	<tr>
		<td>Supplier Name :</td>
		<td><input type="text" name="supplierName" size="50"></td>
	</tr>
	<tr>
		<td>Supplier Address :</td>
		<td><input type="text" name="supplierAddress" size="50"></td>
	</tr>
	<tr>
		<td>Supplier Contact :</td>
		<td><input type="text" name="supplierContact" size="50"></td>
	</tr>
	<tr>
		<td>Supplier Email :</td>
		<td><input type="text" name="supplierEmail" size="50"></td>
	</tr>
	<tr>
		<td>Supplier RegDate :</td>
		<td><input type="text" name="regDate" size="50"></td>
	</tr>
	<tr><td><br>
		<input type="submit" value="Register" >
		<input type="reset" value="Refresh">
	</td></tr>
</table>
<br>
</form>
</body>
</html>