<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <style>
            #header {
                z-index: 1;
                position: fixed;
                width: 97.5%;
                margin-left: 5px;
                margin-top: -16px;
                height: 60px;
                background-color: #808080;
        	margin-bottom: 5px;
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
            #header form
            {
                float: right;
                margin-top: 20px;
                margin-right: 5px;
                
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
                height: 60px;
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
            <?php
            session_start();
            $value = $_SESSION['email'];
            echo $value;
            ?>  
            <table>
              <tbody> 
                <thead colspan = "3">
                <th>
                    Tour De Bronx
       </th>
            </thead>
            <tr>
                <td>
                    <img id = "profile pic" src ="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRjlqc9Rxuk9bigKK7HUCaMDrnn1gTMB2oEGbZzFVXn2HWNpW8F-A"/>
                </td>
            </tr>
            </tbody>
            </table>
            <h3>What: A bike race!</h3> 
            <h3>When: June!</h3>
            <h3>Where: <a href = "spot.php">The Bronx</a></h3>
            <form method ="post" action ="rsvp.php">
                <input type ="submit" name ="RSVP" value ="RSVP">
            </form>


       
        </div>

        <div id ="right">
            <h4>Join us for the biggest cycling event in the five boroughs this summer when the 
            Legendary Tour De Bronx returns! There will be food, there will be music, there will
            be trails and there will be excitement!</h4>
        </div>
                <div id ='bottom'>
            
        </div>
    </body>
</html>


