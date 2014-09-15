<html>
<head>
  <title></title>
  <style>
            #header {
                position: fixed;
                width: 97.5%;
                margin-left: 5px;
                margin-top: -16px;
                height: 60px;
                background-color: #808080;
        	margin-bottom: 5px;
            }
            #header img
            {
                margin-top:8px;
            }
            #searchbar
            {
                margin-right: 10px;
                margin-top: 20px;
                float:right;
            }
            #logo
            {
                float: left;
                margin-left: 5px;
            }
            #login
            {
                margin-top: 15px;
                margin-right: 10px;
                float: right;
            }
            div
            {
                border-radius: 5px;
            }
            body
            { 
                background:white;
                color: white;
            }
            input
            {
                padding: 5px;
            }
            #left
            {
                position: relative;
                float: left;
                margin-left: 5px;
                margin-top: 50px;
                width: 18%;
                height: 400px;
                background-color: #808080;
                margin-bottom: 10px;
                font-family: comic sans;
            }
            #left form
            {
                margin-left: 7px;
                margin-top: 5px;
                text-align:left;
            }
            #right
            {
                position: relative;
                float: right;
                margin-top: 50px;
                width: 80%;
                margin-left: 5px;
                margin-right: 15px;
                height: 400px;
                background-color: #A8A8A8; 
                margin-bottom: 10px;
            }
            #text
            {
                float: left;
                margin-left:  10p0x;
                margin-top: 20px;
            }
            #register
            {
                margin-left: 5px;
                 
            }
            #bottom
            {
               	position: relative;
                height: 80px;
                width: 98.5%;
                background-color: #808080;
                clear: both;
                font-family: Verdana, sans-serif;
                font-size: 14px;
                text-align: center;
                color: #ffffff;
                margin-left: 5px;
                margin-top: -15px;
            }
            #button
            {
                float: right;
                margin-right: 66px;
            }
            img
            {
                margin-left: 10px;
            }
        </style>
    </head>
    <body>
        <div id ="header">
            <a href = "login.php"> <img id = "home" src = "http://i.imgur.com/XnqjQ2Q.png"/> </a>
            <a href = "newsfeed.php"><img src = "http://i.imgur.com/CEzAfwz.png"/></a>
            <form id = "searchbar" action = "searchresults.php" method = "post">
                <input type = "text" name = "search" placeholder = "Type Anything" required>
                <input type = "submit" name = "gobutton" value = "Search">
            </form>
        </div>
        <div id = "left">
            <table>
              <tbody> 
                <thead colspan = "3">
                <th>
                <h1>The Bronx</h1>
                </th>
            </thead>
            <tr>
                <td>
                    <img id = "profile pic" src ="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRHPdRZJcXvuvkMCEr0uCkICYSMF16RU_bOXnbfsj5junOOtdF7"/>
                </td>
            </tr>
            </tbody>
            </table>
            <form method ="post" action ="spotphp">
                <input type ="submit" name ="check-in" value ="Check-In">
            </form>
        </div>

        <div id ="right">
            <img src ="http://i.imgur.com/IdTR6r5.png"/>
        </div>
        <div id ="bottom">
            <img id = "logo" src = "http://i.imgur.com/IwJshFP.png"/>
        </div>
    </body>
</html>


<!--
for login forms tutorial 
http://www.w3schools.com/php/php_form_validation.asp

                     <script type="text/javascript">
		document.getElementById("post").onclick = function () {
                    location.href = "profile.php";
                };
            </script>

            

            < ?php
                    session_start();
                    $value = $_SESSION['email'];
                    $username = "root";
                    $password = "";
                    $hostname = "localhost"; 
                    $db_name = "wildbook";
                    $dbhandle = new mysqli($hostname, $username, $password, $db_name) or die(mysqli_error($dbhandle));
                    $query = "SELECT name from wildbook.user where email = \"$value/";
                    $result = mysqli_query($dbhandle, $query) or die ("query failed: " . mysql_error());
                    while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
                        foreach ($row as $col_value){
                            print "<p>$col_value<br>";
                        }
                    }
                    ?>
             
-->