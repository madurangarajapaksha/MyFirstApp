<!DOCTYPE HTML>
<html>
<body bgcolor="FAEBD7">
<INPUT TYPE="button" VALUE="Back to previous page" onClick="history.go(-1);">
<h2>Order Handling</h2>
<form action="orderphp.php" method="post">
<table>
	<tr>
		<td>Order ID :</td>
		<td><input type="text" name="orderId" size="50"></td>
	</tr>
	<tr>
		<td>Supplier ID :</td>
		<td><input type="text" name="supplierId" size="50"></td>
	</tr>
	<tr>
		<td>Book category :</td>
		<td><input type="text" name="book_category" size="50"></td>
	</tr>
	<tr>
		<td>NumberOfBooks :</td>
		<td><input type="text" name="numberOfbooks" size="50"></td>
	</tr>
	<tr>
		<td>OrderDate :</td>
		<td><input type="text" name="orderDate" size="50"></td>
	</tr>
	<tr><td><br>
		<input type="submit" value="Add" >
		<input type="reset" value="Refresh">
	</td></tr>
</table>
<br>
</form>
</body>
</html>