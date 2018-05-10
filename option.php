<?php
include "connect.php";
include "function.php";


$uid = $_GET['uid'];
$type = $_GET['type'];

if ($type == 'a') {
	
 mysqli_query($conn, "UPDATE users SET type='d' WHERE id = '$uid' ");

 	header("location: adminpanel.php?type=user");

} else if ($type == 'd') {
	
	mysqli_query($conn, "UPDATE users SET type='a' WHERE id = '$uid' ");

 	header("location: adminpanel.php?type=user");
} 

?>