<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PANEL</title>
</head>
<body>

<?php include ("connect.php"); ?>
<?php include ("function.php"); ?>
<?php include ("titlebar.php"); ?>
<?php
if (isset($_POST['submit'])) {
	
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	if (empty($username) or  empty($password)) {
		echo "<p>Fields Empty !</p>";
	}else {
		mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password', '2', 'a')");
		echo "<p> Successfully Registered !</p>";
	}

}

?>
<h3>Register Here :</h3>
<form method="post">
	User Name: </br>
	<input type="text" name="username"> 
	</br></br>
	Password : </br>
	<input type="password" name="password">
	<br><br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>