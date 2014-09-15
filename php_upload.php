<HTML>
    <body>
<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 200000)
&& in_array($extension, $allowedExts)){
    if ($_FILES["file"]["error"] > 0){
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    { 
        echo "Your file " . $_FILES["file"]["name"] . " successfully uploaded!!<br>";
        echo "Details :";    
        echo "Upload: " . $_FILES["file"]["name"] . "<br>";
        echo "Type: " . $_FILES["file"]["type"] . "<br>";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        echo "<img src=upload/" . $_FILES["file"]["name"] . ">";
        if (file_exists("upload/" . $_FILES["file"]["name"])){
            echo $_FILES["file"]["name"] . " already exists. ";
            
        }
        else{
            move_uploaded_file($_FILES["file"]["tmp_name"],
                    "upload/" . $_FILES["file"]["name"]);
            }    
        }
        
        }
        else{
            $filename = preg_replace('/[^A-Z0-9]/','',$_FILES["file"]["name"]) . $extension;
            $logo = "upload/$filename";
            $username = "root";
            $password = "";
            $hostname = "localhost"; 
            $db_name = "wildbook";
            $dbhandle = new mysqli($hostname, $username, $password, $db_name) or die(mysqli_error($dbhandle));
            echo "Connected to MySQL<br>";
            #$strSQL = "UPDATE nbatable SET images = '$logo' WHERE yearFounded = 1946";
            #$result = mysqli_query($dbhandle, $strSQL) or die ("query failed: " . mysql_error());
	}
        
        ?>  
        <br><br>
        <a href = "profile.php">Go back to your profile</a>
	
    </body>
	</HTML>
	