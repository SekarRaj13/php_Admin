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
 		$check_login = mysqli_query($conn, "SELECT id, type from users where username = '$username' AND password = '$password'");
 		if(mysqli_num_rows($check_login) === 1) {
 			$run = mysqli_fetch_array($check_login);
 			$user_id = $run['id'];
 			$type = $run['type'];
 			if ($type == 'd' ) {
 				echo "<p>Your account has been deactivated.</p>";
 			} else {
 				$_SESSION['user_id'] = $user_id;
 				header("location: index.php");
 			}
 		} else {

 			echo "<p>User name or password incorrect</p>";
 		}

	}

}

?>
<h3>Login Here :</h3>
<form method="post">
	User Name: </br>
	<input type="text" name="username"> 
	</br></br>
	Password : </br>
	<input type="password" name="password">
	<br><br>
	<input type="submit" name="submit" value="Login">
</form>
</body>
</html>