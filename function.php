<?php
include "connect.php";
session_start();

function loggedin(){ 

	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		return  true;
	} else {
		return false;
	}
}

if(loggedin()){

	$myid = $_SESSION['user_id'];

	$query = mysqli_query($conn, "SELECT username, user_level FROM users WHERE id='$myid'");
	$run = mysqli_fetch_array($query);
    $username = $run['username']."<br>";
	$user_level = $run['user_level']."<br>";

	$querylevel = mysqli_query($conn, "SELECT name FROM user_level WHERE id='$user_level'");
	$run_level = mysqli_fetch_array($querylevel);
	$level_name = $run_level['name'];
}

// var_dump($_SESSION);
// var_dump(loggedin());

?>