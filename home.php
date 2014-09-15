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
        $email = $pass = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $email = test_input($_POST["email"]);
            $pass = test_input($_POST["pass"]);               
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        <h3>Thank you for Registering for Wildbook!</h3>
        <h4>Before you jump right in, please <a href = "login.php"/> confirm your account information </h4>

    </body>
</html>

