<?php 
$servername = 'wsjti.com';
$username = 'u1011496_sweeta';
$password = 'sweeta2020';
$db = 'u1011496_sweeta';
// Create connection
$con = mysqli_connect($servername, $username, $password, $db);
 // Check connection
if (!$con) {
	die ("connection failed.". mysqli_connect_error()); //close connection
}
 ?>