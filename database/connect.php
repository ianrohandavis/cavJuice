<?php 
$connection = mysqli_connect('localhost', 'root', '', 'slotify');

if(mysqli_connect_errno()){
echo "Failed to connect to MySQL: " . mysqli_connect_error();
};

$a=array();

$data = mysqli_query($connection, "SELECT subscribe_array FROM users WHERE username='ian-davis'");
$dataArray = mysqli_fetch_array($data);
// print_r($dataArray);
$pizza= implode(",", $dataArray);
$pieces = explode(",", $pizza);
foreach($pieces as $values ){
	if(!in_array($values, $a)){
		array_push($a, $values);
	}
	
}

$insertQuery = mysqli_query($connection, "UPDATE users SET subscribe_array='$artistId'");

print_r($a);	
 ?>


