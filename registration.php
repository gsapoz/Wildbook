<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body
            { 
                background:white;
                color: blue;
            }
            input
            {
                padding: 5px;
            }
            #button
            {
                padding: 1px;
            }
        </style>
    </head>
    <body>
        <?php
        $name = $email = $password = "";
        if (isset($_POST['name']))       #converts $_post input to string
        {
            $name = $_POST['name'];         
        }
        if (isset($_POST['email']))       #converts $_post input to string
        {
            $email = $_POST['email'];         
        }
        if (isset($_POST['pass']))       #converts $_post input to string
        {
            $pass = $_POST['pass'];         
        }

        
        $con=mysqli_connect("localhost","root",NULL,"wildbook") or  #connect to database
                die("Could not connect: " . mysql_error());
        $data = array(); 
            
        #$query = "Select * from wildbook.user";
        $query = "INSERT INTO wildbook.user(email, name, password) VALUES('".$email."','".$name."','".$pass."')";
        #echo $query;  #test
        $result = mysqli_query($con,$query);
        if (!$result) {
            die('Invalid query: ' . mysql_error());
        }
        
        
        ?>
        <h3>Thank you for Registering for Wildbook!</h3>
        <h4>Before you jump right in, please <a href = "login.php"/> confirm your account information </h4>

    </body>
</html>

