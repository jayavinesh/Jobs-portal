<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
$select=mysqli_select_db($conn,'Vinesh');
if(!$select){
	die("Not connected to database");
}
else
{
include 'main.html';	
}
}
mysqli_close($conn);
	

?>