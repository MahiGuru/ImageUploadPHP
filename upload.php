<?php 

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "images";

        $connect = mysql_connect($servername, $username, $password);
        $db_connect = mysql_select_db('images', $connect);
 
    if($_FILES["file"]["name"] != ""){

        $extWithName = explode(".", $_FILES["file"]["name"]);
        $onlyExtension = end($extWithName);
        $name = "operate_".rand(100, 999).".".$onlyExtension; 
        $location = './images/'.$name;
        $result = array();
        move_uploaded_file($_FILES["file"]["tmp_name"], $location);  
        $insertQuery = "INSERT INTO files (Name, location) VALUES ('".$name."', './images/')";
        $query = mysql_query($insertQuery); 
        echo "<img src='".'./images/'.$name."'  width='250' alt='image'>";
    }else{
        echo "THere is noFile".$_FILES['file'];
    } 
?>