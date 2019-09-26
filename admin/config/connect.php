<?php 

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = mysqli_connect($servername, $username, $password);

// Check connection
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
mysqli_select_db($con, "ep");

?>