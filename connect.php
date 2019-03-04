<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$select=mysqli_select_db($conn,'vinesh');
if(!$select){
	die("Not connected to database");
}

?>
