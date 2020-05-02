<?php
$mysqli = new mysqli("localhost", "root", "");
if (mysqli_connect_errno()) {
	echo "ERROR " . mysqli_connect_errno() . ": " . mysqli_connect_error() . "\n";
	die;
}
$query = file_get_contents("setup.sql");

if (!mysqli_multi_query($mysqli, $query))
	echo "ERROR " . mysqli_errno() . ": " . mysqli_error() ."\n";
?>