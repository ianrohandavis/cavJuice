<?php 
$connection = mysqli_connect('localhost', 'root', '', 'insurance');

if(mysqli_connect_errno()){
echo "Failed to connect to MySQL: " . mysqli_connect_error();
};

$total = 0;

$nameQuery = mysqli_query($connection, "SELECT driverID FROM person WHERE name='John Doe' ");
$nameRow = mysqli_fetch_array($nameQuery);

$licenseQuery = mysqli_query($connection, "SELECT * FROM owns");


while ($licenseRow = mysqli_fetch_array($licenseQuery)) {
	# code...

	$license = $licenseRow['license'];
	$particQuery = mysqli_query($connection, "SELECT COUNT(*) FROM participated WHERE license='$license'");

	$total += $particRow = mysqli_fetch_array($particQuery)['COUNT(*)'];


}

echo $total;

UPDATE participated 
set damage_amount = 3000
WHERE license = 'John123';

use bank;

select SUM(amount) from loan;

use bank;

with branch_min as (select MIN(assets) from branch where branch_name='Brooklyn')
select branch_names from branch where assets > branch_min

 ?>