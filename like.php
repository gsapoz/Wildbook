<?php
$username = "root";
$password = "";
$hostname = "localhost"; 
$db_name = "wildbook";
$dbhandle = new mysqli($hostname, $username, $password, $db_name) or die(mysqli_error($dbhandle));
$query = "UPDATE  wildbook.notes SET likes = likes + 1";
$result = mysqli_query($dbhandle, $query) or die ("query failed: " . mysql_error());
header( 'Location: profile.php');
?>
