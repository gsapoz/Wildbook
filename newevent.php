<!DOCTYPE HTML> 
<?php
            session_start();
            //$_SESSION['email'] = $email;
            $email = $_SESSION['email'];
            $username = "root";
            $password = "";
            $hostname = "localhost"; 
            $db_name = "wildbook";
            $dbhandle = new mysqli($hostname, $username, $password, $db_name) or die(mysqli_error($dbhandle));
	
    
            #<form action = "newevent.php" method = "POST">
            #    <input type = "text" name = "ename" placeholder= "Name of the Event" required>
            #    Date: <input type="date" name="date">
            #    <input type = "submit" name = "submit" value = "Create">
            #</form>
    $con = new mysqli("localhost", "root", "", "wildbook")
            or die(mysqli_error($con));
    $name = $_POST[('ename')];
    $date = $_POST[('date')];
    $query = "insert into event(eventid, eventname, eventdate) values (null, '$name', 'getDate()')";
    $result = mysqli_query($con, $query) or die ("query failed: " . mysql_error());
    header( 'Location: newsfeed.php');
    mysqli_close($con);
    ?>

