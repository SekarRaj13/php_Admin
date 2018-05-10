<?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');
$servername = "localhost";
$username = "root";
$password = "sekarraj";

$conn = mysqli_connect($servername, $username, $password);

$db = mysqli_select_db($conn, "adminpanel");

// if (!$db) {
// 	# code...
// 	echo ("mysql db connection problem:" mysqli_error());
// }
// else {
// 	# code..

// 	echo "succeesfully connect";
// }


?>