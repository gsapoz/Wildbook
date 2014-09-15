<!DOCTYPE HTML> 
<?php
            session_start();

            $username = "root";
            $password = "";
            $hostname = "localhost"; 
            $db_name = "wildbook";
            $dbhandle = new mysqli($hostname, $username, $password, $db_name) or die(mysqli_error($dbhandle));
	
            $email = $_POST['email'];
	
            $_SESSION['email'] = $email;
	?>
    <?php
    $con = new mysqli("localhost", "root", "", "wildbook")
            or die(mysqli_error($con));
    $name = $_POST[('sname')];
    #$loginQuery = "select * from wildbook.user where email = '$email' and password = '$login_pass'" ;
    $query = "insert into spot(name, geolat, geolng) values('$name', 00.0000, 00.0000)";
    $result = mysqli_query($con, $query) or die ("query failed: " . mysql_error());
    header( 'Location: newsfeed.php');
    mysqli_close($con);
    ?>
