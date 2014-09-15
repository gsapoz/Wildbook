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
            <div id = 'login'>
                <form method="post" action="confirmation.php">		
                    <input type="text" placeholder = "Your Email" name="email" required>
                    <input type="password" placeholder = "Your Password" name="pass" required>                
                    <input type="submit" name="Login" value="Login">   
		
                </form>
            </div>
        </div>
        <div id = "left">
            <img id = "logo" src = "http://i.imgur.com/IwJshFP.png"/>
            <form id = "searchbar" action = "searchresults.php" method = "post">
                <input type = "text" name = "search" placeholder = "Type Something Here" required>
                <input type = "submit" name = "gobutton" value = "Search">
            </form>
            
            <div id = "register">
                <FORM action= "registration.php" method= "post">
                    <h3>Sign Up! It's Free.</h3>
                    <input TYPE='text' placeholder = 'Your Full Name' name = 'name' required>
                    <br>
                    <input TYPE='text' PLACEHOLDER = 'Your Email' name = 'email' required>
                    <br>
                    <input TYPE='text' PLACEHOLDER = 'Re-enter Email' name = 'reemail' required>
                    <br>
                    <input TYPE='password' PLACEHOLDER = 'New Password' name = 'pass' required>
                    <br>
                    <input id='button' TYPE='Submit' VALUE = 'Register'>
                    <br>
                </FORM>
            </div>
        </div>
        
      
        <div id ="right">
            <div id = "text">
                <img src = "http://i.imgur.com/1Qmihxd.png"/>
                
            </div>
        </div>
        <div id ='bottom'>
            
        </div>
    </body>
</html>


