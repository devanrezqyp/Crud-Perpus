<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$db = "perpus";
	$conn = mysqli_connect($hostname, $username, $password, $db);

	if(!$conn) {
		die("Database tidak terhubung");
	}
?>