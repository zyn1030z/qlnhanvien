<?php 
	$servername = "localhost";
	$username = "root";
	$password = "1234";
	$databasename = "user";
	$conn = mysqli_connect($servername, $username, $password, $databasename);
	if (!$conn){
		die ("MySQL disssss connect" .mysqli_connect_ERROR());
	}
	
 ?>