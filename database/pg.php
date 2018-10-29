<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/London");

	// $con = mysqli_connect("localhost", "root", "", "smooth");
	// $dbconn2 = pg_connect("host=localhost port=5432 dbname=smooth");

	pg_connect("host=localhost port=5432 dbname=
d505i2bq2pcm2n") or die('Could not connect: ' . pg_last_error());
	// $dbconn = pg_connect("dbname=cavjuiceclients");

	// if(mysqli_connect_errno()) {
	// 	echo "Failed to connect: " . mysqli_connect_errno();
	// }else {
	// 	echo "Connected";
	// }
?>