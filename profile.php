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
            #header form
            {
                float: right;
                margin-top: 20px;
                margin-right: 5px;
                
            }
            #header img
            {
                margin-top:8px;
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
                height: 1500px;
                background-color: #A8A8A8;   
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
            table, td {
                border: 2px ;
                margin-left: 15px;
            }
            #status
            {
                margin-top: 50px;
                width: 50%;
            }
            #statuspost
            {
                margin-top: 50px;
            }
            
  	.hoverTable{
             margin-left: 20px; 
		width:50%; 
		border-collapse:collapse;
                color: red;
	}
	.hoverTable td{ 
		padding:7px; border:#4e95f4 1px solid;
	}
	/* Define the default color for all the table rows */
	.hoverTable tr{
		background: #b8d1f3;
	}
	/* Define the hover highlight color for the table row */
    .hoverTable tr:hover {
          background-color: #ffff99;
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
                    <?php
                    session_start();
                    #$image = $_SESSION["file"];
                    $email = $_SESSION['email'];
                    #$uid = $_SESSION['id'];
					//echo $email;
                    $username = "root";
                    $password = "";
                    $hostname = "localhost"; 
                    $db_name = "wildbook";
                    $dbhandle = new mysqli($hostname, $username, $password, $db_name) or die(mysqli_error($dbhandle));
                    $query = "SELECT name from wildbook.user where email = '$email'";
                    $result = mysqli_query($dbhandle, $query) or die ("query failed: " . mysql_error());
		
                    while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
                        foreach ($row as $col_value){
                            print "$col_value";
                        }
                    }
                    $squery = "select gender from user where email = '$email'";
                    $sresult = mysqli_query($dbhandle, $squery) or die ("query failed: " . mysql_error());
                    echo " (";
                    while ($row = mysqli_fetch_array($sresult, MYSQL_ASSOC)) {
                        foreach ($row as $col_value){
                            print "$col_value";
                        }
                    }
                    echo ") ";
                    ?>
                </th>
            </thead>
            <tr>
                <td>
                    <img id = "profile pic" src ="http://www.patterndynamics.com.au/wp-content/themes/twentyeleven/images/avatar_image.jpg"/>
                </td>
            </tr>
            </tbody>
            </table>
            <form action="php_upload.php" method="post"
                  enctype="multipart/form-data">
                <input type="file" name="file" id="file">
                <input type="submit" name="submit" value="Upload">
            </form>
            <form action ='editprofile.php' method ='post'>
                <input type ='submit' name ='submit' value ='Edit Profile'>
            </form>
        </div>

        <div id ="right">
        <form method = "post" action = "statusupdate.php">
                <input id = "status" type = "text" name = "status" placeholder = "What's on Your Mind?" required>
                <input id = statuspost type = "submit" name = "post" placeholder = "post" >
        </form>          
        <?php
            
        $con = new mysqli("localhost", "root", "", "wildbook")        
                or die(mysqli_error($con));            
        $uquery = "select uid from user where email = '$email'";        
        $uresult = mysqli_query($con, $uquery) or die ("query failed: " . mysql_error());
            //$result_array = array();
        while ($row = mysqli_fetch_array($uresult, MYSQL_ASSOC)) {
            foreach ($row as $uid){
                $_SESSION['id'] = $uid;		
                
                echo "<h2>Status:</h2>";
                $query = "select text, date(dateposted), likes from notes where userid = '$uid'";
                $result = mysqli_query($con, $query) or die ("query failed: " . mysql_error());
                $rows_found = mysqli_num_rows($result);
                if($rows_found > 0){
                    print("<table class = 'hoverTable' border ='5' width ='40%'> \n");
                    while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
                        print("<tr>\n");
                        foreach ($row as $col_value){
                            print("<td>$col_value</td>\n");
                        }
                        print("<td><a href = 'like.php'>like</a></td>");
                    }	
                    print("\t</tr>\n");            
                }
                else{
                    print "no results!";
                    }    
                    print("</table>\n");
            }
				
            
            echo "<h2>Friends:</h2>";
            $fquery = "select u.name from wildbook.user u, wildbook.friend f where f.userid = '$uid'";
            $fresult = mysqli_query($con, $fquery) or die ("query failed: hahaha" . mysql_error());
            $rows_found = mysqli_num_rows($fresult);
            if($rows_found > 0){
                print("<table class = 'hoverTable' border ='5' width ='40%'> \n");
                while ($row = mysqli_fetch_array($fresult, MYSQL_ASSOC)) {
                    print("<tr>\n");
                    foreach ($row as $col_value){
                        print("<td>$col_value</td>\n");
                    }
                    
                }	
                print("\t</tr>\n");    
            }
            else
                print "no results!";
            print("</table\n>");
            
            echo "<h2>Interests:</h2>";
            $fquery = "select aname from interests where userid = '$uid'";
            $fresult = mysqli_query($con, $fquery) or die ("query failed: " . mysql_error());
            $rows_found = mysqli_num_rows($fresult);
            if($rows_found > 0){
                print("<table class = 'hoverTable' border ='5' width ='40%'> \n");
                while ($row = mysqli_fetch_array($fresult, MYSQL_ASSOC)) {
                    print("<tr>\n");
                    foreach ($row as $col_value){
                        print("<td>$col_value</td>\n");
                    }
                    
                }	
                print("\t</tr>\n");    
            }
            else
                print "no results!";
            print("</table\n>");
        }
            mysqli_close($con);
            ?>
            <h2>RSVP'd Events</h2>
            <table class = 'hoverTable' border ='5' width ='40%'>
                <td>
                    <a href = "events.php"> Tour De Bronx</a>
                </td>
            </table>
        </div>
    </body>
</html>

 