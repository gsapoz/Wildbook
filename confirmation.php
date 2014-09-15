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
    //$login_email = $_POST['email'];
    $login_pass = $_POST[('pass')];
    $loginQuery = "select * from wildbook.user where email = '$email' and password = '$login_pass'" ;
    $result = mysqli_query($con, $loginQuery) or die ("query failed: " . mysql_error());
    $rows_found = mysqli_num_rows($result);
    if($rows_found > 0){
        header( 'Location: newsfeed.php' ) ;
    }
     else {
         header( 'Location: login.php');
    }
    mysqli_close($con);
    ?>
