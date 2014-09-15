
<!DOCTYPE HTML> 
    <?php	
                        session_start();
                    #$image = $_SESSION["file"];
                    $email = $_SESSION['email'];
                    $uid = $_SESSION['id'];
    $con = new mysqli("localhost", "root", "", "wildbook")
            or die(mysqli_error($con));
    $status = $_POST['status'];
    
    $query = "insert into wildbook.notes(userid, text) values ('$uid', '$status')" ;
    $result = mysqli_query($con, $query) or die ("query failed: " . mysql_error());
    $rows_found = mysqli_num_rows($result);
    if($rows_found > 0){
        header( 'Location: profile.php' ) ;
    }
     else {
         header( 'Location: profile.php');
    }
    mysqli_close($con);
    ?>
