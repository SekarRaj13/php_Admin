<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');
$servername = "localhost";
$username = "root";
$password = "sekarraj"; 

$conn = mysqli_connect($servername, $username, $password);

$db = mysqli_select_db($conn, "adminpanel");


?>