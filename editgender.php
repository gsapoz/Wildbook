
<?php
session_start();
$uid = $_SESSION['id'];

$gender = $_POST['sex'];
#$interest = $_POST['interests'];
#$fname = $_POST['fname'];

$con = new mysqli("localhost", "root", "", "wildbook")        
                or die(mysqli_error($con));

$squery = "update user set gender = '$gender' where uid = '$uid'";        
$sresult = mysqli_query($con, $squery) or die ("query failed: " . mysql_error());

#$aquery = "insert into activities(aname) values ('$interest')";
#$iquery = "insert into interests(userid, aname) values ('$uid', '$interest')";
#$sresult = mysqli_query($con, $aquery) or die ("query failed: " . mysql_error());
#$sresult = mysqli_query($con, $iquery) or die ("query failed: " . mysql_error());


header( 'Location: editprofile.php');
?>