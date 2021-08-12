<?php     
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "FD";

	$mycon = new mysqli($servername, $username, $password, $dbname);

    if ($mycon->connect_error) {
  		die("Connection failed: " . $mycon->connect_error);
	} 
	else{
		echo "";
	}
?>