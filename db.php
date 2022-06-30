<?php

 /* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'cart1');
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
//$con = mysqli_connect("localhost","root","","cart1");
//	if (mysqli_connect_errno()){
//		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	//	die();
	//	}

		$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
   $con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
