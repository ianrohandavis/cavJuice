<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/London");

	// $con = mysqli_connect("localhost", "root", "", "smooth");
	// $dbconn = pg_connect("dbname=cavjuiceclients");
	$con = pg_connect("host=
ec2-184-72-234-230.compute-1.amazonaws.com port=
5432 dbname=mary user=utqwckgarmqowa password=d8c00bc1ace96155f0d2bab63931ac0c6961ebcf3ac5e21aa7230bc42feee993");

	// if(mysqli_connect_errno()) {
	// 	echo "Failed to connect: " . mysqli_connect_errno();
	// }else {
	// 	// echo "Connected";
	// }
?>