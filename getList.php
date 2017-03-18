<?php 

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "images";
        $result = array();
        $connect = mysql_connect($servername, $username, $password);
        $db_connect = mysql_select_db('images', $connect);
   
        $selectQuery = mysql_query('SELECT * FROM files'); 
        
        while ($row = mysql_fetch_array($selectQuery, MYSQL_NUM)) {
            $result[] = $row; 
        }  
        echo json_encode($result); 
     
?>