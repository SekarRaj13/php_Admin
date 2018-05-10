<?php
include "connect.php";

if (isset($_REQUEST['submit'])) {
	# code...
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$Qulification= $_POST['Qulification'];

	$query = mysqli_query($conn, "INSERT INTO register(name, email, mobile, qulification) VALUES ('$name', '$email', '$mobile', '$Qulification')");
	echo $query;
	header("Refresh:0");
}
?>




<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
<form method="post">
	<table>
	<tr>
		<td>NAME :</td>
		<td><input type="text" name="name"></td>
	</tr>
	<tr>
		<td>Email :</td>
		<td><input type="email" name="email"></td>
	</tr>
	<tr>
		<td>Mobile :</td>
		<td><input type="text" name="mobile"></td>
	</tr>
	<tr>
		<td>Qulification :</td>
		<td><input type="text" name="Qulification"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="submit"></td>
	</tr>
</table>
</form>

</body>
</html>