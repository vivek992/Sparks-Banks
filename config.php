<?php
	//Local Development Connection requirement
	$servername = "localhost";
	$username = "id16591219_root";
	$password = "Vadhiya@1234";
	$dbname = "id16591219_sparks_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
