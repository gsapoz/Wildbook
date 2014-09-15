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
            body
            { 
                background:white;
                color: white;
            }
            input
            {
                padding: 5px;
            }
            #right
            {
                position: relative;
                float: right;
                margin-top: 50px;
                width: 80%;
                margin-right: 15px;
                height: 2000px;
                background-color: #E0E0E0 ;
                color: black;
            }
            #text
            {
                float: left;
                margin-left:  20px;
            }
            #status
            {
                float: left;
                margin-left:  20px; 
            }
            a
            {
                font-family: comic-sans;
                float: center;
            }
            h3
            {
                color: red;
            }
            table
            {
                margin-left: 50px;
            }
            #logo
            {
                float: left;
                margin-left: 5px;
            }
            home
            {
                margin-top: 500px;
                margin-left: 10px;
            }
            button
            {
                margin-left: 5px;
            }
            profile
            {
                margin-left: 5px;
            }
        </style>
    </head>
    <body>
        <div id ="header">
            <a href = "login.php"> <img id = "home" src = "http://i.imgur.com/XnqjQ2Q.png"/> </a>  
            <a href = "profile.php"><img id = "profile" src = "http://i.imgur.com/hEwfpGv.png"/></a>
        </div>
        <div id = "left">
            <img id = "logo" src = "http://i.imgur.com/IwJshFP.png"/>
            <br><br>
            
            <br>
            <form id = "searchbar" action = "searchresults.php" method = "post">
                <input type = "text" name = "search" placeholder = "Search Criteria" required>
                <input type = "submit" name = "gobutton" value = "Search">
            </form>
            <form action = "profile_page.php" method = "GET"></form>
            <br>
            <form action = "newspot.php" method = "POST">
                <input type = "text" name = "sname" placeholder= "Name of the Spot" required>
                <input type = "submit" name = "submit" value = "Create">
            </form>
            <br>
            <form action = "newevent.php" method = "POST">
                <input type = "text" name = "ename" placeholder= "Name of the Event" required>
                <input type="date" name="date" value="<?php echo date('yyyy-mm-dd'); ?>">
                <input type = "submit" name = "submit" value = "Create">
            </form>

            <form action = "profile.php" method = "post">
                <input type = "submit" value = "profile">
            </form>
        </div>
        <div id ="right">
        <div id ="right">
            <form> 
                <?php
                $con = new mysqli("localhost", "root", "", "wildbook")
                or die(mysqli_error($con));
                
                echo "<h3>People You May Know:</h3>";
                $userQuery = "select name from wildbook.user";
                $userResult = mysqli_query($con, $userQuery) or die ("query failed: " . mysql_error());
                $rows_found = mysqli_num_rows($userResult);
                if($rows_found > 0){
                    print("<table border ='2' width ='20%'> \n");
                    echo "<th>name</th>";
                    while ($row = mysqli_fetch_array($userResult, MYSQL_ASSOC)) {
                        print("<tr>\n");
                        foreach ($row as $col_value){
                            print("<td>$col_value</td>\n");
                        }
                    }	
                    print("\t</tr>\n");
                }
                else
                    print "no results!";
                print("</table>\n");
                
                $statusQuery = "SELECT u.name, n.text FROM wildbook.notes n, wildbook.user u"; 
                echo '<h3>Statuses:</h3>';
                $statusResult = mysqli_query($con, $statusQuery) or die ("query failed: " . mysql_error());
                $rows_found = mysqli_num_rows($statusResult);
                if($rows_found > 0){
                    print("<table border ='2' width ='40%'> \n");
                    echo "<th>User</th>";
                    echo "<th>Status</th>";    
                    while ($row = mysqli_fetch_array($statusResult, MYSQL_ASSOC)) {
                        print("<tr>\n");
                        foreach ($row as $col_value){
                            print("<td>$col_value</td>\n");
                        }
                    }	
                    print("\t</tr>\n");
                }
                else
                    print "no results!";
                print("</table>\n");
                
                
                $activitiesQuery = "select aname from wildbook.activities";
                echo '<h3>Activities</h3>';
                $activitiesResult = mysqli_query($con, $activitiesQuery) or die ("query failed: " . mysql_error());
                $rows_found = mysqli_num_rows($activitiesResult);
                if($rows_found > 0){
                    print("<table border ='2' width ='20%'> \n");
                    echo "<th>Name</th>";
                    while ($row = mysqli_fetch_array($activitiesResult, MYSQL_ASSOC)) {
                        print("<tr>\n");
                        foreach ($row as $col_value){
                            print("<td>$col_value</td>\n");
                        }
                    }	
                    print("\t</tr>\n");
                }
                else
                    print "no results!";
                print("</table>\n");

                
                $spotsQuery = "select name from wildbook.spot";
                echo '<h3>Spots</h3>';
                $spotsResult = mysqli_query($con, $spotsQuery) or die ("query failed: " . mysql_error());
                $rows_found = mysqli_num_rows($spotsResult);
                if($rows_found > 0){
                    print("<table border ='2' width ='20%'> \n");
                    echo "<th>Name</th>";
                    while ($row = mysqli_fetch_array($spotsResult, MYSQL_ASSOC)) {
                        print("<tr>\n");
                        foreach ($row as $col_value){
                            print("<td>$col_value</td>\n");
                        }
                    }	
                    print("\t</tr>\n");
                }
                else
                    print "no results!";
                print("</table>\n");
                
                $eventsQuery = "select * from wildbook.event";
                echo '<h3>Events</h3>';
                $eventsResult = mysqli_query($con, $eventsQuery) or die ("query failed: " . mysql_error());
                $rows_found = mysqli_num_rows($eventsResult);
                if($rows_found > 0){
                    print("<table border ='2' width ='20%'> \n");
                    echo "<th>Name</th>";
                    while ($row = mysqli_fetch_array($spotsResult, MYSQL_ASSOC)) {
                        print("<tr>\n");
                        foreach ($row as $col_value){
                            print("<td>$col_value</td>\n");
                        }
                    }	
                    print("\t</tr>\n");
                }
                else
                    print "no results!";
                print("</table>\n");
                mysqli_close($con);
                
                
                ?>
            </form>
            
        </div>
        </div>
    </body>
</html>


<!--
for login forms tutorial 
http://www.w3schools.com/php/php_form_validation.asp


                //$con = new mysqli("localhost", "root", "", "wildbook")
                //or die(mysqli_error($con));
                
 
                //$userQuery = "select name from wildbook.user where name LIKE '$search_word%'";
                //echo '<h3>Users</h3>';
                //$userResult = mysqli_query($con, $userQuery) or die ("query failed: " . mysql_error());
                //$rows_found = mysqli_num_rows($userResult);
                //if($rows_found > 0){
                //    print("<table border ='2' width ='20%'> \n");
                //    echo "<th>name</th>";
                //    while ($row = mysqli_fetch_array($userResult, MYSQL_ASSOC)) {
                //        print("<tr>\n");
                //        foreach ($row as $col_value){
                //            print("<td>$col_value</td>\n");
                //        }
                //    }	
                //    print("\t</tr>\n");
                //}
                //else
                //    print "no results!";
                //print("</table>\n");           
                //mysqli_close($con);




            < ?php
            session_start();

            $username = "root";
            $password = "";
            $hostname = "localhost"; 
            $db_name = "wildbook";
            $dbhandle = new mysqli($hostname, $username, $password, $db_name) or die(mysqli_error($dbhandle));
	
            $email = $_POST['email'];
            $password = $_POST['pass'];
            $query = "select * from wildbook.user where email = ".$email." and password = ".$password."";
            $result = mysqli_query($dbhandle, $query) or die ("query failed: " . mysql_error());
            $rows_found = mysqli_num_rows($result);
            if($rows_found > 0){
                header( 'Location: newsfeed.php' ) ;
            }
            else {
                header( 'Location: login.php');
            }
            $_SESSION['email'] = $email;
            
            mysqli_close($dbhandle);
	?>
<button id="myButton" class="float-left submit-button" >Profile</button>
            <script type="text/javascript">
		document.getElementById("myButton").onclick = function () {
                    location.href = "profile.php";
                };
            </script>
            
-->