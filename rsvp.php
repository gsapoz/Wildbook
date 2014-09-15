
<?php
session_start();
$uid = $_SESSION['id'];

$con = new mysqli("localhost", "root", "", "wildbook")        
                or die(mysqli_error($con));

$query = "insert into rsvp(userid, eventid) values ('$uid', 3)";        
$result = mysqli_query($con, $query) or die ("query failed: " . mysql_error());


header( 'Location: events.php');
?>