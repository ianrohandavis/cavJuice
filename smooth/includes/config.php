<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/London");

	$con = mysqli_connect("localhost", "root", "", "smooth");
	// $dbconn = pg_connect("dbname=cavjuiceclients");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}else {
		// echo "Connected";
	}
?>