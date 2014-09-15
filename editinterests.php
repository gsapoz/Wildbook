<?php
//<form action ="editinterests.php" method = "post">
 //                   <h3>Interests</h3>
 //                  <input type ="text" name ="interests" placeholder = "">
  //                  <input type = "submit" name ="add" value ="add">
   //             </form>
session_start();
$uid = $_SESSION['id'];

$con = new mysqli("localhost", "root", "", "wildbook")        
                or die(mysqli_error($con));


$interest = $_POST['interests'];
$aquery = "insert into activities(aname) values ('$interest')";
$iquery = "insert into interests(userid, aname) values ('$uid', '$interest')";
$sresult = mysqli_query($con, $aquery) or die ("query failed: " . mysql_error());
$sresult = mysqli_query($con, $iquery) or die ("query failed: " . mysql_error());
header( 'Location: editprofile.php');
?>